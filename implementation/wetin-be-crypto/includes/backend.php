<?php
if (!defined('ABSPATH')) { exit; }
final class WBC_Backend {
    const VERSION = '1';
    private static $principal;
    private static $catalog;
    private static $activities;
    public static function boot() {
        add_action('init', [self::class, 'init']);
        add_action('rest_api_init', [self::class, 'routes']);
        add_action('wp', [self::class, 'prepare_page']);
        add_action('delete_user', [self::class, 'delete_user']);
        add_filter('rest_post_dispatch', [self::class, 'cache_headers'], 10, 3);
        add_action('wbc_cleanup', [self::class, 'cleanup']);
        add_shortcode('wbc_app', [self::class, 'shortcode']);
    }
    public static function cache_headers($response, $server, $request) {
        if (str_starts_with($request->get_route(), '/wbc/v1/') && $request->get_route() !== '/wbc/v1/catalog') {
            $response=rest_ensure_response($response);
            $response->header('Cache-Control','private, no-store');
        }
        return $response;
    }
    public static function prepare_page() {
        global $post;
        if ($post && has_shortcode($post->post_content, 'wbc_app')) {
            self::csrf();
            if (!defined('DONOTCACHEPAGE')) { define('DONOTCACHEPAGE', true); }
            nocache_headers();
        }
    }
    public static function delete_user($user_id) {
        global $wpdb;
        $id=$wpdb->get_var($wpdb->prepare('SELECT id FROM '.self::table('principals').' WHERE user_id=%d',$user_id));
        if (!$id) { return; }
        $wpdb->query('START TRANSACTION');
        $wpdb->get_row($wpdb->prepare('SELECT id FROM '.self::table('principals').' WHERE id=%s FOR UPDATE',$id));
        foreach (['records','attempts','receipts','bookmarks'] as $table) { $wpdb->delete(self::table($table),['principal'=>$id]); }
        $wpdb->delete(self::table('principals'),['id'=>$id]);
        $wpdb->query('COMMIT');
    }
    private static function table($name) { global $wpdb; return $wpdb->prefix . 'wbc_' . $name; }
    public static function install() {
        global $wpdb;
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        $c = $wpdb->get_charset_collate();
        $schemas = [
            'principals' => 'id varchar(64) NOT NULL, user_id bigint unsigned NULL, token_hash varchar(64) NULL, csrf_hash varchar(64) NULL, memory tinyint NOT NULL DEFAULT 0, expires bigint NOT NULL, learning bigint NOT NULL DEFAULT 0, PRIMARY KEY (id), UNIQUE KEY account (user_id), UNIQUE KEY token (token_hash)',
            'records' => 'id varchar(64) NOT NULL, principal varchar(64) NOT NULL, kind varchar(24) NOT NULL, object_id varchar(100) NOT NULL, version varchar(100) NOT NULL DEFAULT "", payload longtext NOT NULL, created bigint NOT NULL, PRIMARY KEY (id), KEY owned (principal,kind), KEY identity (principal,object_id)',
            'attempts' => 'id varchar(64) NOT NULL, principal varchar(64) NOT NULL, activity_id varchar(100) NOT NULL, snapshot longtext NOT NULL, answers longtext NOT NULL, revision int NOT NULL DEFAULT 0, status varchar(24) NOT NULL, result longtext NULL, created bigint NOT NULL, PRIMARY KEY (id), KEY owned (principal)',
            'receipts' => 'id varchar(100) NOT NULL, principal varchar(64) NOT NULL, fingerprint varchar(64) NOT NULL, payload longtext NOT NULL, created bigint NOT NULL, PRIMARY KEY (id,principal)',
            'bookmarks' => 'principal varchar(64) NOT NULL, article_id varchar(100) NOT NULL, saved tinyint NOT NULL DEFAULT 1, revision int NOT NULL DEFAULT 1, created bigint NOT NULL, PRIMARY KEY (principal,article_id)',
        ];
        foreach ($schemas as $name => $fields) { $fields=str_replace(', ', ',\n', $fields); $fields=str_replace('\n', "\n", $fields); dbDelta('CREATE TABLE ' . self::table($name) . " (\n$fields\n) ENGINE=InnoDB $c;"); }
        update_option('wbc_schema', self::VERSION, false);
        if (!wp_next_scheduled('wbc_cleanup')) { wp_schedule_event(time(), 'hourly', 'wbc_cleanup'); }
    }
    public static function init() {
        if (get_option('wbc_schema') !== self::VERSION) { self::install(); }
    }
    private static function load() {
        if (self::$catalog !== null) { return; }
        $base = dirname(__DIR__) . '/data/';
        self::$catalog = file_exists($base . 'public-content.json') ? json_decode(file_get_contents($base . 'public-content.json'), true) : [];
        self::$catalog = is_array(self::$catalog) ? self::$catalog : [];
        self::$activities = [];
        if (file_exists($base . 'private-activities.php')) {
            $data = require $base . 'private-activities.php';
            if (is_string($data)) { $data = json_decode($data, true); }
            self::$activities = is_array($data) ? ($data['activities'] ?? []) : [];
            if (class_exists('WBC_Review')) { self::$activities=WBC_Review::apply(self::$activities); }
        }
    }
    public static function routes() {
        $r = [
            '/catalog' => ['GET','catalog',false], '/journey' => ['GET','journey',false],
            '/guest' => ['POST','guest',false], '/guest/clear' => ['POST','clear',false],
            '/reading-position' => ['POST','reading_position',false], '/completion' => ['POST','completion',false], '/attempt' => ['POST','start',false],
            '/attempt/(?P<id>[a-zA-Z0-9-]+)' => ['GET','resume',false],
            '/attempt/(?P<id>[a-zA-Z0-9-]+)/(?:checkpoint|submit)' => ['POST','attempt',false],
            '/import-preview' => ['GET','import_preview',true], '/import' => ['POST','import',true], '/bookmarks' => ['GET','bookmarks',true],
            '/bookmark' => ['POST','bookmark',true], '/export' => ['GET','export',true],
        ];
        foreach ($r as $path => $d) {
            register_rest_route('wbc/v1', $path, ['methods'=>$d[0], 'callback'=>[self::class,$d[1]], 'permission_callback'=>function($request) use($d) { return self::permission($request, $d[2]); }]);
        }
    }
    private static function error($code, $message, $status=400) { return new WP_Error($code, $message, ['status'=>$status]); }
    public static function permission($request, $account=false) {
        if ($account && !is_user_logged_in()) { return self::error('login_required','Sign in to save this in your account.',401); }
        if ($request->get_method() === 'GET') { return true; }
        foreach (['memory','saved'] as $field) {
            if ($request->has_param($field) && !is_bool($request[$field])) { return self::error('invalid_boolean','Use a true or false value for '.$field.'.',422); }
        }
        if ($request->has_param('revision') && (!is_int($request['revision']) || $request['revision']<0)) { return self::error('invalid_revision','Supply a nonnegative integer revision.',422); }
        if ((str_ends_with($request->get_route(),'/checkpoint') || str_ends_with($request->get_route(),'/submit') || str_ends_with($request->get_route(),'/bookmark')) && !$request->has_param('revision')) { return self::error('invalid_revision','Supply the current saved revision before changing this record.',422); }
        $origin = $request->get_header('origin');
        if ($origin && strtolower((string)wp_parse_url($origin, PHP_URL_HOST)) !== strtolower((string)wp_parse_url(home_url(),PHP_URL_HOST))) { return self::error('origin','This request must come from this website.',403); }
        if (is_user_logged_in()) {
            return wp_verify_nonce($request->get_header('x_wp_nonce'), 'wp_rest') ? true : self::error('request_token','Refresh the page and try again.',403);
        }
        // Guest requests use a double-submit random token, separate from ownership cookie.
        $ip_key='wbc_rate_'.hash_hmac('sha256',(string)($_SERVER['REMOTE_ADDR'] ?? 'unknown'),wp_salt('nonce'));
        $rate=(int)get_transient($ip_key);
        if ($rate>180) { return self::error('rate_limit','Please wait a minute before trying again.',429); }
        set_transient($ip_key,$rate+1,60);
        $token = $_COOKIE['wbc_csrf'] ?? '';
        if (!$token || !hash_equals($token, (string)$request->get_header('x_wbc_token'))) { return self::error('request_token','Refresh the learning page and try again.',403); }
        return true;
    }
    private static function cookie($name,$value,$expires=0,$http=true) {
        setcookie($name,$value,['expires'=>$expires,'path'=>'/','secure'=>is_ssl(),'httponly'=>$http,'samesite'=>'Lax']);
        $_COOKIE[$name]=$value;
    }
    private static function csrf() {
        if (empty($_COOKIE['wbc_csrf'])) { self::cookie('wbc_csrf',bin2hex(random_bytes(32)),0,false); }
        return $_COOKIE['wbc_csrf'];
    }
    private static function principal($create=false,$guest_only=false) {
        global $wpdb;
        if (!$guest_only && is_user_logged_in()) {
            $user=get_current_user_id();
            $p=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('principals').' WHERE user_id=%d',$user),ARRAY_A);
            if (!$p) {
                $p=['id'=>wp_generate_uuid4(),'user_id'=>$user,'expires'=>0,'learning'=>0,'memory'=>0];
                if ($wpdb->insert(self::table('principals'),$p)===false) { return self::error('storage','Account saving is temporarily unavailable.',503); }
            }
            return $p;
        }
        $secret=$_COOKIE['wbc_guest'] ?? '';
        $p=$secret ? $wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('principals').' WHERE token_hash=%s',hash_hmac('sha256',$secret,wp_salt('auth'))),ARRAY_A) : null;
        if ($p && (int)$p['expires']<=time()) { $p=null; }
        if (!$p && $create) {
            $secret=bin2hex(random_bytes(32));
            $p=['id'=>wp_generate_uuid4(),'token_hash'=>hash_hmac('sha256',$secret,wp_salt('auth')),'csrf_hash'=>hash('sha256',self::csrf()),'expires'=>time()+7200,'learning'=>0,'memory'=>0];
            if ($wpdb->insert(self::table('principals'),$p)===false) { return self::error('storage','Visit saving is temporarily unavailable.',503); }
            self::cookie('wbc_guest',$secret);
        }
        return $p;
    }
    private static function touch($p,$qualifying=false) {
        global $wpdb;
        if (!empty($p['user_id'])) { return; }
        $now=time();
        $values=$qualifying ? ['learning'=>$now,'expires'=>$now+(!empty($p['memory']) ? 2592000 : 7200)] : (!empty($p['memory']) ? [] : ['expires'=>$now+7200]);
        if ($values) { $wpdb->update(self::table('principals'),$values,['id'=>$p['id']]); }
        if (!empty($p['memory']) && $qualifying) { self::cookie('wbc_guest',$_COOKIE['wbc_guest'],$now+2592000); }
    }
    private static function response($data,$public=false) {
        $r=new WP_REST_Response($data,200);
        $r->header('Cache-Control',$public ? 'public, max-age=60' : 'private, no-store');
        return $r;
    }
    public static function catalog($request) {
        self::load();
        $data=self::public_content();
        $data['activities']=[];
        foreach(self::$activities as $a) { $data['activities'][]=array_intersect_key($a,array_flip(['id','canonical_id','form','module_id','kind','outcomes','prerequisites','title','approved'])); }
        return self::response($data,true);
    }
    private static function get_activity($id) { self::load(); foreach(self::$activities as $a) { if ($a['id']===$id) { return $a; } } return null; }
    private static function public_content() {
        self::load();$data=self::$catalog;$map=get_option('wbc_published_map',null);
        if (is_array($map)) {
            foreach (['lessons','articles','hubs','glossary'] as $kind) {
                $data[$kind]=array_values(array_filter($data[$kind] ?? [],function($item) use ($map) { return isset($map[$item['id']]) && get_post_status($map[$item['id']])==='publish'; }));
                foreach ($data[$kind] as &$item) {
                    $post=get_post($map[$item['id']]);
                    // The CMS remains the public editorial source after import.
                    $content=preg_replace('/<nav aria-label="Learning navigation"[^>]*>.*?<\/nav>/s','',$post->post_content,1);
                    $item['title']=$post->post_title;
                    $item['body_html']=wp_kses_post(do_blocks($content));
                    $item['url']=get_permalink($post);
                }
                unset($item);
            }
        }
        if (class_exists('WBC_Site')) {
            foreach (['articles','hubs'] as $kind) {
                foreach ($data[$kind] ?? [] as $index=>$item) { $data[$kind][$index]['image']=WBC_Site::illustration($item['id']); }
            }
        }
        return $data;
    }
    private static function content_exists($kind,$id) { foreach(self::public_content()[$kind] ?? [] as $item) { if ($item['id']===$id) { return true; } } return false; }
    private static function activity_digest($a) { unset($a['approved'],$a['_digest']);return hash('sha256',wp_json_encode($a)); }
    public static function guest($request) {
        $p=self::principal(true,true); if(is_wp_error($p)) { return $p; }
        global $wpdb;
        if ($request->has_param('memory')) {
            $memory=(bool)$request->get_param('memory');
            $expires=$memory ? (($p['learning'] ?: time())+2592000) : time()+7200;
            $wpdb->update(self::table('principals'),['memory'=>$memory ? 1:0,'expires'=>$expires],['id'=>$p['id']]);
            self::cookie('wbc_guest',$_COOKIE['wbc_guest'],$memory ? $expires:0);
            $p['expires']=$expires; $p['memory']=$memory;
        } else { self::touch($p,false); }
        return self::response(['mode'=>!empty($p['memory'])?'remembered':'visit','expires_at'=>(int)$p['expires'],'saved'=>true]);
    }
    public static function clear($request) {
        global $wpdb; $p=self::principal(false,true);
        if($p && !is_wp_error($p)) {
            $wpdb->query('START TRANSACTION');
            $wpdb->get_row($wpdb->prepare('SELECT id FROM '.self::table('principals').' WHERE id=%s FOR UPDATE',$p['id']));
            foreach(['records','attempts','receipts'] as $t) { $wpdb->delete(self::table($t),['principal'=>$p['id']]); }
            $wpdb->delete(self::table('principals'),['id'=>$p['id']]); $wpdb->query('COMMIT');
        }
        self::cookie('wbc_guest','',time()-3600);
        return self::response(['cleared'=>true]);
    }
    public static function journey($request) {
        global $wpdb; $p=self::principal(false);
        if(is_wp_error($p)) { return $p; }
        if(!$p) { return self::response(['records'=>[],'attempts'=>[],'mode'=>'unsaved']); }
        $records=$wpdb->get_results($wpdb->prepare('SELECT id,kind,object_id,version,payload,created FROM '.self::table('records').' WHERE principal=%s ORDER BY created',$p['id']),ARRAY_A);
        foreach($records as &$r) { $r['payload']=json_decode($r['payload'],true); $r['applicable']=self::applicable($r); }
        $attempts=$wpdb->get_results($wpdb->prepare('SELECT id,activity_id,revision,status,result,created FROM '.self::table('attempts').' WHERE principal=%s ORDER BY created DESC',$p['id']),ARRAY_A);
        foreach($attempts as &$a) { $a['result']=$a['result'] ? json_decode($a['result'],true):null; }
        return self::response(['records'=>$records,'attempts'=>$attempts,'mode'=>!empty($p['user_id'])?'account':(!empty($p['memory'])?'remembered':'visit'),'expires_at'=>(int)$p['expires']]);
    }
    private static function applicable($r) {
        if(in_array($r['kind'],['completion','position'],true)) { return true; }
        $payload=is_array($r['payload']) ? $r['payload']:json_decode($r['payload'],true);
        $a=self::get_activity($payload['activity_id'] ?? '');
        return $a && !empty($a['approved']) && empty($a['retired']) && empty($a['essential_correction']) && (string)$a['revision']===(string)$r['version'] && (!isset($payload['activity_digest']) || hash_equals($payload['activity_digest'],self::activity_digest($a)));
    }
    private static function insert_record($record) {
        global $wpdb;
        // WordPress globally treats object_id as numeric; canonical learning IDs are strings.
        return $wpdb->insert(self::table('records'),$record,array_fill(0,count($record),'%s'));
    }
    private static function lock_principal($p) {
        global $wpdb;
        $wpdb->query('START TRANSACTION');
        $locked=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('principals').' WHERE id=%s FOR UPDATE',$p['id']),ARRAY_A);
        if (!$locked || (empty($locked['user_id']) && (int)$locked['expires']<=time())) {
            $wpdb->query('ROLLBACK');
            return self::error('expired','Your visit ended before this action was saved.',410);
        }
        return $locked;
    }
    public static function completion($request) {
        $id=sanitize_text_field($request['lesson_id']);
        if(!self::content_exists('lessons',$id)) { return self::error('lesson','This lesson is unavailable.',404); }
        $p=self::principal(true); if(is_wp_error($p)) { return $p; }
        global $wpdb;
        $p=self::lock_principal($p); if(is_wp_error($p)) { return $p; }
        $rid=hash('sha256',$p['id'].'|completion|'.$id);
        $existing=$wpdb->get_var($wpdb->prepare('SELECT id FROM '.self::table('records').' WHERE id=%s',$rid));
        if(!$existing && self::insert_record(['id'=>$rid,'principal'=>$p['id'],'kind'=>'completion','object_id'=>$id,'version'=>'1','payload'=>'{}','created'=>time()])===false) { $wpdb->query('ROLLBACK');return self::error('storage','Completion was not saved. Try again.',503); }
        if(!$existing) { self::touch($p,true); }
        $wpdb->query('COMMIT');
        return self::response(['saved'=>true,'already_saved'=>(bool)$existing,'lesson_id'=>$id]);
    }
    public static function reading_position($request) {
        $id=sanitize_text_field($request['lesson_id']);$position=$request['position'];
        if (!is_int($position) && !is_float($position)) { return self::error('position','Supply a numeric reading position.',422); }
        if (!is_finite((float)$position) || $position<0 || $position>1) { return self::error('position','Reading position must be between zero and one.',422); }
        if (!self::content_exists('lessons',$id)) { return self::error('lesson','This lesson is unavailable.',404); }
        $position=round((float)$position,3);$p=self::principal(true);if (is_wp_error($p)) { return $p; }
        global $wpdb;$p=self::lock_principal($p);if (is_wp_error($p)) { return $p; }
        $rid=hash('sha256',$p['id'].'|position|'.$id);
        $old=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('records').' WHERE id=%s',$rid),ARRAY_A);
        $previous=$old ? json_decode($old['payload'],true):null;
        $changed=!$old || (float)$previous['position']!==$position;
        if ($changed) {
            $values=['payload'=>wp_json_encode(['position'=>$position]),'created'=>time()];
            $ok=$old ? $wpdb->update(self::table('records'),$values,['id'=>$rid]) : self::insert_record(array_merge($values,['id'=>$rid,'principal'=>$p['id'],'kind'=>'position','object_id'=>$id,'version'=>'1']));
            if ($ok===false) { $wpdb->query('ROLLBACK');return self::error('storage','Your reading place was not saved. Try again.',503); }
            self::touch($p,true);
        }
        $wpdb->query('COMMIT');return self::response(['saved'=>true,'changed'=>$changed,'lesson_id'=>$id,'position'=>$position]);
    }
    private static function gate($p,$a) {
        global $wpdb; $needed=$a['prerequisites'] ?? []; if(!$needed) { return []; }
        $earned=[];
        $rows=$wpdb->get_results($wpdb->prepare('SELECT * FROM '.self::table('records').' WHERE principal=%s AND kind=%s',$p['id'],'pass'),ARRAY_A);
        foreach($rows as $row) { if(self::applicable($row)) { $earned[]=$row['object_id']; } }
        return array_values(array_diff($needed,$earned));
    }
    public static function start($request) {
        $a=self::get_activity(sanitize_text_field($request['activity_id']));
        if(!$a || empty($a['approved']) || !empty($a['retired']) || !empty($a['essential_correction'])) { return self::error('review_required','This activity is awaiting content review. Its lessons remain open.',409); }
        $p=self::principal(true); if(is_wp_error($p)) { return $p; }
        $missing=self::gate($p,$a); if($missing) { return self::error('prerequisites','Complete the required checks first: '.implode(', ',$missing),409); }
        global $wpdb; $p=self::lock_principal($p); if(is_wp_error($p)) { return $p; } $id=wp_generate_uuid4(); $a['_digest']=self::activity_digest($a);
        if($wpdb->insert(self::table('attempts'),['id'=>$id,'principal'=>$p['id'],'activity_id'=>$a['id'],'snapshot'=>wp_json_encode($a),'answers'=>'{}','revision'=>0,'status'=>'open','created'=>time()])===false) { $wpdb->query('ROLLBACK'); return self::error('storage','The attempt could not start. Try again.',503); }
        self::touch($p,false);
        $wpdb->query('COMMIT');
        foreach($a['items'] as &$item) { unset($item['answer_action'],$item['answer_reason'],$item['feedback']); }
        unset($a['reviewer_notes'],$a['keys']);
        return self::response(['attempt_id'=>$id,'revision'=>0,'activity'=>$a]);
    }
    public static function resume($request) {
        global $wpdb; $p=self::principal(false);
        if (is_wp_error($p)) { return $p; }
        if (!$p) { return self::error('expired','Your visit expired. Start a fresh attempt.',410); }
        $row=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('attempts').' WHERE id=%s AND principal=%s',$request['id'],$p['id']),ARRAY_A);
        if (!$row) { return self::error('attempt','Attempt unavailable.',404); }
        $a=json_decode($row['snapshot'],true);
        foreach ($a['items'] as &$item) { unset($item['answer_action'],$item['answer_reason'],$item['feedback']); }
        unset($a['reviewer_notes'],$a['keys']);
        return self::response(['attempt_id'=>$row['id'],'revision'=>(int)$row['revision'],'status'=>$row['status'],'answers'=>json_decode($row['answers'],true),'activity'=>$a,'result'=>$row['result'] ? json_decode($row['result'],true):null]);
    }
    public static function grade($snapshot,$answers) {
        $rows=[]; $passed=true;
        foreach($snapshot['items'] as $item) {
            $v=$answers[$item['id']] ?? [];
            $ok=(string)($v['action'] ?? '')===(string)$item['answer_action'] && (string)($v['reason'] ?? '')===(string)$item['answer_reason'];
            $passed=$passed && $ok;
            $rows[]=['id'=>$item['id'],'correct'=>$ok,'essential'=>($item['class'] ?? '')==='E','feedback'=>$item['feedback'] ?? 'Review the explanation and try the alternate form.'];
        }
        return ['passed'=>$passed && count($rows)>0,'rows'=>$rows,'outcomes'=>$passed ? ($snapshot['outcomes'] ?? []):[]];
    }
    public static function attempt($request) {
        global $wpdb; $p=self::principal(false);
        if(is_wp_error($p)) { return $p; } if(!$p) { return self::error('expired','Your visit has expired. Start a fresh attempt.',410); }
        $wpdb->query('START TRANSACTION');
        $locked=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('principals').' WHERE id=%s FOR UPDATE',$p['id']),ARRAY_A);
        if (!$locked || (empty($locked['user_id']) && (int)$locked['expires']<=time())) { $wpdb->query('ROLLBACK');return self::error('expired','Your visit has expired. Start a fresh attempt.',410); }
        $row=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('attempts').' WHERE id=%s AND principal=%s FOR UPDATE',$request['id'],$p['id']),ARRAY_A);
        if(!$row) { $wpdb->query('ROLLBACK'); return self::error('attempt','Attempt unavailable.',404); }
        if($row['status']==='submitted') { $wpdb->query('COMMIT'); return self::response(['saved'=>true,'revision'=>(int)$row['revision'],'result'=>json_decode($row['result'],true)]); }
        if((int)$request['revision']!==(int)$row['revision']) { $wpdb->query('ROLLBACK'); return self::error('conflict','This attempt changed in another tab. Reload it before retrying.',409); }
        $snapshot=json_decode($row['snapshot'],true); $current=self::get_activity($row['activity_id']);
        if(!$current || empty($current['approved']) || !empty($current['retired']) || !empty($current['essential_correction'])) { $wpdb->query('ROLLBACK'); return self::error('correction','This activity is paused for review. No new pass was awarded.',409); }
        $answers=$request['answers'];
        if(!is_array($answers) || strlen(wp_json_encode($answers))>100000) { $wpdb->query('ROLLBACK'); return self::error('answers','Supply the selected action and reason for each row.',422); }
        $allowed=array_column($snapshot['items'],'id');
        foreach($answers as $key=>$value) { if(!in_array($key,$allowed,true) || !is_array($value)) { $wpdb->query('ROLLBACK'); return self::error('answers','An answer does not belong to this attempt.',422); } }
        $submit=str_ends_with($request->get_route(),'/submit');
        if($submit && count($answers)!==count($allowed)) { $wpdb->query('ROLLBACK'); return self::error('incomplete','Answer every required row before submitting.',422); }
        foreach ($snapshot['items'] as $question) {
            $answer=$answers[$question['id']] ?? [];
            if (array_diff(array_keys($answer),['action','reason'])) { $wpdb->query('ROLLBACK');return self::error('answers','An answer contains unsupported fields.',422); }
            foreach (['action'=>'actions','reason'=>'reasons'] as $field=>$choices) {
                $value=$answer[$field] ?? '';
                if (!is_string($value) || ($submit && $value==='') || ($value!=='' && !in_array($value,array_column($question[$choices],'id'),true))) { $wpdb->query('ROLLBACK');return self::error('answers','Choose a listed action and reason for each required row.',422); }
            }
        }
        $missing=self::gate($p,$snapshot);
        if($submit && $missing) { $wpdb->query('ROLLBACK'); return self::error('prerequisites','Required evidence is no longer current. Review the prerequisite check.',409); }
        $json=wp_json_encode($answers); $changed=$json!==$row['answers'];
        $result=$submit ? self::grade($snapshot,$answers):null;
        $values=['answers'=>$json,'revision'=>(int)$row['revision']+1];
        if($submit) { $values['status']='submitted';$values['result']=wp_json_encode($result); }
        if($wpdb->update(self::table('attempts'),$values,['id'=>$row['id']])===false) { $wpdb->query('ROLLBACK'); return self::error('storage','Answers were not saved. Keep this page open and retry.',503); }
        if($submit && $result['passed']) {
            foreach($result['outcomes'] as $outcome) {
                $rid=hash('sha256',$row['id'].'|'.$outcome);
                if(self::insert_record(['id'=>$rid,'principal'=>$p['id'],'kind'=>$snapshot['kind']==='mission'?'demonstration':'pass','object_id'=>$outcome,'version'=>(string)$snapshot['revision'],'payload'=>wp_json_encode(['activity_id'=>$snapshot['id'],'attempt_id'=>$row['id'],'activity_digest'=>$snapshot['_digest'] ?? self::activity_digest($snapshot)]),'created'=>time()])===false) { $wpdb->query('ROLLBACK'); return self::error('storage','The result was not saved. Retry your submission.',503); }
            }
        }
        if($submit || $changed) { self::touch($p,true); }
        $wpdb->query('COMMIT');
        return self::response(['saved'=>true,'revision'=>$values['revision'],'result'=>$result]);
    }
    private static function import_summary($payload) {
        $items=$payload['items'];
        $saved=true;
        foreach ($items as $item) { if (!in_array($item['status'],['saved','already_saved'],true)) { $saved=false; } }
        return ['saved'=>$saved,'operation_id'=>$payload['operation_id'],'items'=>$items];
    }
    public static function import_preview($request) {
        global $wpdb; $account=self::principal(true); if (is_wp_error($account)) { return $account; }
        $guest=self::principal(false,true);
        if (!$guest || is_wp_error($guest)) { return self::response(['items'=>[],'account_id'=>get_current_user_id(),'target_user_id'=>get_current_user_id(),'available'=>false]); }
        $items=[];
        $attempts=$wpdb->get_results($wpdb->prepare('SELECT id,activity_id,status,created FROM '.self::table('attempts').' WHERE principal=%s',$guest['id']),ARRAY_A);
        foreach ($attempts as $a) { $items[]=['source_id'=>'attempt:'.$a['id'],'kind'=>'attempt','object_id'=>$a['activity_id'],'status'=>$a['status'],'created'=>(int)$a['created'],'dependencies'=>[]]; }
        $records=$wpdb->get_results($wpdb->prepare('SELECT * FROM '.self::table('records').' WHERE principal=%s',$guest['id']),ARRAY_A);
        foreach ($records as $r) {
            $data=json_decode($r['payload'],true);$dependencies=[];
            if (!empty($data['attempt_id'])) {
                $owner=$wpdb->get_var($wpdb->prepare('SELECT principal FROM '.self::table('attempts').' WHERE id=%s',$data['attempt_id']));
                if ($owner===$guest['id']) { $dependencies[]='attempt:'.$data['attempt_id']; }
                elseif ($owner!==$account['id']) { continue; }
            }
            $items[]=['source_id'=>'record:'.$r['id'],'kind'=>$r['kind'],'object_id'=>$r['object_id'],'version'=>$r['version'],'created'=>(int)$r['created'],'dependencies'=>$dependencies];
        }
        return self::response(['items'=>$items,'account_id'=>get_current_user_id(),'target_user_id'=>get_current_user_id(),'available'=>true,'expires_at'=>(int)$guest['expires']]);
    }
    public static function import($request) {
        global $wpdb;
        if ($request['intent']!=='save_progress') { return self::error('intent','Choose Save my progress before importing.',422); }
        $account=self::principal(true); if (is_wp_error($account)) { return $account; }
        $operation=sanitize_text_field($request['operation_id']);
        if (!$request->has_param('target_user_id') || !is_int($request['target_user_id']) || $request['target_user_id']!==get_current_user_id()) { return self::error('account_changed','Sign in to the account selected for this import.',403); }
        $bound=$wpdb->get_var($wpdb->prepare('SELECT principal FROM '.self::table('receipts').' WHERE id=%s LIMIT 1',$operation));
        if ($bound && $bound!==$account['id']) { return self::error('account_changed','This recovery operation belongs to another account.',403); }
        if (!preg_match('/^[a-zA-Z0-9-]{8,80}$/',$operation)) { return self::error('operation','Provide a valid import operation identifier.',422); }
        $selected=$request['source_ids'];
        if (!is_array($selected) || !$selected || count($selected)>500) { return self::error('selection','Select the visit records you want to save.',422); }
        foreach ($selected as $id) { if (!is_string($id) || !preg_match('/^(record|attempt):[a-zA-Z0-9-]{20,64}$/',$id)) { return self::error('selection','A selected record identifier is invalid.',422); } }
        $selected=array_values(array_unique($selected));sort($selected);$fingerprint=hash('sha256',wp_json_encode($selected));
        $receipt=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('receipts').' WHERE id=%s AND principal=%s',$operation,$account['id']),ARRAY_A);
        if ($receipt && !hash_equals($receipt['fingerprint'],$fingerprint)) { return self::error('conflict','This import operation belongs to a different selection.',409); }
        if (!$receipt) {
            $guest=self::principal(false,true);
            if (!$guest || is_wp_error($guest)) { return self::error('expired','No unexpired visit progress is available to import.',410); }
            $preview=self::import_preview($request)->get_data();$available=[];
            foreach ($preview['items'] as $item) { $available[$item['source_id']]=$item; }
            foreach ($selected as $id) {
                if (!isset($available[$id])) { return self::error('selection','A selected record is no longer available.',422); }
                foreach ($available[$id]['dependencies'] as $dependency) { if (!in_array($dependency,$selected,true)) { return self::error('dependency','Select the associated attempt too: '.$dependency,422); } }
            }
            $payload=['operation_id'=>$operation,'source_principal'=>$guest['id'],'items'=>[]];
            // Attempts precede dependent outcome records; ordering does not silently add selected data.
            foreach ($selected as $id) { $payload['items'][]=['source_id'=>$id,'status'=>'pending']; }
            $locked_account=self::lock_principal($account);if (is_wp_error($locked_account)) { return $locked_account; }
            $locked=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('principals').' WHERE id=%s FOR UPDATE',$guest['id']),ARRAY_A);
            if (!$locked || (int)$locked['expires']<=time()) { $wpdb->query('ROLLBACK');return self::error('expired','The visit ended before import started.',410); }
            if ($wpdb->insert(self::table('receipts'),['id'=>$operation,'principal'=>$account['id'],'fingerprint'=>$fingerprint,'payload'=>wp_json_encode($payload),'created'=>time()])===false) {
                $wpdb->query('ROLLBACK');return self::error('storage','Import did not start. Keep your selection and retry.',503);
            }
            $wpdb->query('COMMIT');
        } else { $payload=json_decode($receipt['payload'],true); }
        foreach ($payload['items'] as $index=>$unused) {
            $locked_account=self::lock_principal($account);if (is_wp_error($locked_account)) { return $locked_account; }
            $row=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('receipts').' WHERE id=%s AND principal=%s FOR UPDATE',$operation,$account['id']),ARRAY_A);
            if (!$row) { $wpdb->query('ROLLBACK');return self::error('storage','Import recovery is temporarily unavailable.',503); }
            $payload=json_decode($row['payload'],true);$item=$payload['items'][$index];
            if (in_array($item['status'],['saved','already_saved'],true)) { $wpdb->query('COMMIT');continue; }
            $guest=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('principals').' WHERE id=%s FOR UPDATE',$payload['source_principal']),ARRAY_A);
            $cookie_guest=self::principal(false,true);
            if (!$guest || (int)$guest['expires']<=time() || !$cookie_guest || $cookie_guest['id']!==$guest['id']) {
                $payload['items'][$index]['status']='ineligible';$payload['items'][$index]['message']='Visit expired, cleared or unavailable. Previously confirmed account records remain saved.';
                $wpdb->update(self::table('receipts'),['payload'=>wp_json_encode($payload)],['id'=>$operation,'principal'=>$account['id']]);$wpdb->query('COMMIT');continue;
            }
            [$kind,$id]=explode(':',$item['source_id'],2);$ok=true;$status='saved';$destination=$id;
            if ($kind==='attempt') {
                $source=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('attempts').' WHERE id=%s FOR UPDATE',$id),ARRAY_A);
                if (!$source || !in_array($source['principal'],[$guest['id'],$account['id']],true)) { $ok=false; }
                elseif ($source['principal']===$account['id']) { $status='already_saved'; }
                else { $ok=$wpdb->update(self::table('attempts'),['principal'=>$account['id']],['id'=>$id,'principal'=>$guest['id']])!==false; }
            } else {
                $source=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('records').' WHERE id=%s AND principal=%s FOR UPDATE',$id,$guest['id']),ARRAY_A);
                if (!$source) { $ok=false; }
                else {
                    $data=json_decode($source['payload'],true);
                    if (!empty($data['attempt_id'])) {
                        $owner=$wpdb->get_var($wpdb->prepare('SELECT principal FROM '.self::table('attempts').' WHERE id=%s',$data['attempt_id']));
                        if ($owner!==$account['id']) { $ok=false; }
                    }
                    $destination=in_array($source['kind'],['completion','position'],true) ? hash('sha256',$account['id'].'|'.$source['kind'].'|'.$source['object_id']) : hash('sha256',$account['id'].'|import|'.$id);
                    $existing=$wpdb->get_var($wpdb->prepare('SELECT id FROM '.self::table('records').' WHERE id=%s',$destination));
                    if ($existing) {
                        $status='already_saved';
                        if ($source['kind']==='position' && $ok) {
                            $current=$wpdb->get_row($wpdb->prepare('SELECT created FROM '.self::table('records').' WHERE id=%s FOR UPDATE',$destination),ARRAY_A);
                            if ((int)$source['created']>(int)$current['created']) { $ok=$wpdb->update(self::table('records'),['payload'=>$source['payload'],'created'=>$source['created']],['id'=>$destination])!==false;$status='saved'; }
                        }
                    }
                    elseif ($ok) { $copy=$source;$copy['id']=$destination;$copy['principal']=$account['id'];$ok=self::insert_record($copy)!==false; }
                    if ($ok) { $ok=$wpdb->delete(self::table('records'),['id'=>$id,'principal'=>$guest['id']])!==false; }
                }
            }
            if ($ok && (int)$guest['expires']<=time()) { $ok=false; }
            if (!$ok) {
                $wpdb->query('ROLLBACK');
                $payload['items'][$index]['status']='needs_retry';$payload['items'][$index]['message']='This item was not confirmed. Available visit work remains until its original expiry.';
                // Persist failure status separately; previously committed items stay intact.
                $wpdb->query('START TRANSACTION');
                $fresh=$wpdb->get_row($wpdb->prepare('SELECT payload FROM '.self::table('receipts').' WHERE id=%s AND principal=%s FOR UPDATE',$operation,$account['id']),ARRAY_A);
                $latest=json_decode($fresh['payload'],true);
                if (!in_array($latest['items'][$index]['status'],['saved','already_saved'],true)) { $latest['items'][$index]=$payload['items'][$index]; }
                $wpdb->update(self::table('receipts'),['payload'=>wp_json_encode($latest)],['id'=>$operation,'principal'=>$account['id']]);$wpdb->query('COMMIT');continue;
            }
            $payload['items'][$index]=['source_id'=>$item['source_id'],'destination_id'=>$destination,'status'=>$status];
            if ($wpdb->update(self::table('receipts'),['payload'=>wp_json_encode($payload)],['id'=>$operation,'principal'=>$account['id']])===false) { $wpdb->query('ROLLBACK');return self::error('storage','Item confirmation was interrupted. Retry the same selection.',503); }
            $wpdb->query('COMMIT');
        }
        $receipt=$wpdb->get_row($wpdb->prepare('SELECT payload FROM '.self::table('receipts').' WHERE id=%s AND principal=%s',$operation,$account['id']),ARRAY_A);
        return self::response(self::import_summary(json_decode($receipt['payload'],true)));
    }
    public static function bookmarks($request) {
        global $wpdb;$p=self::principal(true);if(is_wp_error($p)) { return $p; }
        $rows=$wpdb->get_results($wpdb->prepare('SELECT article_id,saved,revision,created FROM '.self::table('bookmarks').' WHERE principal=%s ORDER BY created DESC',$p['id']),ARRAY_A);
        foreach($rows as &$row) { $row['saved']=(bool)$row['saved']; $row['revision']=(int)$row['revision']; $row['created']=(int)$row['created']; $row['available']=self::content_exists('articles',$row['article_id']); }
        return self::response(['bookmarks'=>$rows]);
    }
    public static function bookmark($request) {
        global $wpdb;$p=self::principal(true);if(is_wp_error($p)) { return $p; }
        $article=sanitize_text_field($request['article_id']);$saved=(bool)$request['saved'];
        if($saved && !self::content_exists('articles',$article)) { return self::error('unavailable','This article is unavailable.',410); }
        $p=self::lock_principal($p);if (is_wp_error($p)) { return $p; }
        $row=$wpdb->get_row($wpdb->prepare('SELECT * FROM '.self::table('bookmarks').' WHERE principal=%s AND article_id=%s FOR UPDATE',$p['id'],$article),ARRAY_A);
        $revision=$row ? (int)$row['revision']:0;
        if($row && (bool)$row['saved']===$saved) { $wpdb->query('COMMIT');return self::response(['saved'=>$saved,'confirmed'=>true,'revision'=>$revision]); }
        if((int)$request['revision']!==$revision) { $wpdb->query('ROLLBACK');return self::error('conflict','This bookmark changed elsewhere. Refresh before retrying.',409); }
        $values=['saved'=>$saved?1:0,'revision'=>$revision+1];
        $ok=$row ? $wpdb->update(self::table('bookmarks'),$values,['principal'=>$p['id'],'article_id'=>$article]) : $wpdb->insert(self::table('bookmarks'),array_merge($values,['principal'=>$p['id'],'article_id'=>$article,'created'=>time()]));
        if($ok===false) { $wpdb->query('ROLLBACK');return self::error('storage','Bookmark not saved. Try again.',503); }
        $wpdb->query('COMMIT');return self::response(['saved'=>$saved,'confirmed'=>true,'revision'=>$revision+1]);
    }
    public static function export($request) {
        $journey=self::journey($request);if(is_wp_error($journey)) { return $journey; }
        $bookmarks=self::bookmarks($request);if(is_wp_error($bookmarks)) { return $bookmarks; }
        global $wpdb; $p=self::principal(true);
        $responses=$wpdb->get_results($wpdb->prepare('SELECT id,activity_id,answers,status,created FROM '.self::table('attempts').' WHERE principal=%s',$p['id']),ARRAY_A);
        foreach ($responses as &$r) { $r['answers']=json_decode($r['answers'],true); }
        return self::response(['exported_at'=>gmdate('c'),'journey'=>$journey->get_data(),'attempt_responses'=>$responses,'saved_articles'=>$bookmarks->get_data()]);
    }
    public static function cleanup() {
        global $wpdb;
        $expired=$wpdb->get_col($wpdb->prepare('SELECT id FROM '.self::table('principals').' WHERE user_id IS NULL AND expires<=%d',time()));
        foreach($expired as $id) {
            foreach(['records','attempts','receipts'] as $table) { $wpdb->delete(self::table($table),['principal'=>$id]); }
            $wpdb->delete(self::table('principals'),['id'=>$id]);
        }
        $wpdb->query($wpdb->prepare('DELETE FROM '.self::table('receipts').' WHERE created<%d',time()-7776000));
    }
    public static function shortcode($atts) {
        $a=shortcode_atts(['view'=>'learn'],$atts);
        $views=['learn','journey','articles','practice','saved','glossary','topics','hubs','home'];
        $view=in_array($a['view'],$views,true)?$a['view']:'learn';
        $base=plugins_url('assets/',dirname(__DIR__).'/wetin-be-crypto.php');
        if(file_exists(dirname(__DIR__).'/assets/app.css')) { wp_enqueue_style('wbc-app',$base.'app.css',[], '0.3.0'); }
        if(file_exists(dirname(__DIR__).'/assets/app.js')) {
            wp_enqueue_script('wbc-app',$base.'app.js',[], '0.3.0',true);
            wp_localize_script('wbc-app','WBC',['rest'=>esc_url_raw(rest_url('wbc/v1/')),'nonce'=>is_user_logged_in()?wp_create_nonce('wp_rest'):'','token'=>self::csrf(),'loggedIn'=>is_user_logged_in(),'accountId'=>get_current_user_id(),'registrationEnabled'=>(bool)get_option('users_can_register'),'login'=>wp_login_url(get_permalink()),'register'=>wp_registration_url(),'topics'=>home_url('/topics/'),'learn'=>home_url('/learn/')]);
        }
        return '<div class="wbc-app" data-view="'.esc_attr($view).'"><p>Loading your learning space…</p></div><noscript><p>Interactive learning needs JavaScript. Public lesson text remains available through the learning pages.</p></noscript>';
    }
}
