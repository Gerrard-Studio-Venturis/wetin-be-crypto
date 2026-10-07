(() => {
'use strict';
const mounts = document.querySelectorAll('.wbc-app');
if (!mounts.length) return;
const config = window.WBC || {};
const el = (tag, text, cls) => { const n = document.createElement(tag); if (text !== undefined) n.textContent = text; if (cls) n.className = cls; return n; };
const cookie = name => document.cookie.split('; ').find(v => v.startsWith(name + '='))?.split('=').slice(1).join('=') || '';
async function api(path, data) {
 const headers = {'Accept':'application/json', 'X-WBC-Token':decodeURIComponent(cookie('wbc_csrf')) || config.token || ''};
 if(config.nonce) headers['X-WP-Nonce']=config.nonce;
 if (data !== undefined) headers['Content-Type'] = 'application/json';
 const response = await fetch((config.rest || '/wp-json/wbc/v1/').replace(/\/$/, '') + '/' + path, {method:data === undefined ? 'GET':'POST', credentials:'same-origin', headers, body:data === undefined ? undefined:JSON.stringify(data)});
 const result = await response.json();
 if (!response.ok) throw new Error(result.message || 'Saving is unavailable. Keep your answers here and try again.');
 return result;
}
function button(text, handler, secondary = false) { const b = el('button',text,secondary?'wbc-secondary':'wbc-button'); b.type='button'; b.addEventListener('click',handler); return b; }
function panel(title) { const p=el('section',undefined,'wbc-panel'); p.append(el('h2',title)); return p; }
mounts.forEach(async mount => {
 mount.replaceChildren();
 const status=el('p','Loading your learning space…','wbc-status'); status.setAttribute('role','status'); status.setAttribute('aria-live','polite'); mount.append(status);
 const report = message => { status.textContent=message; };
 const run = async (b, task) => { b.disabled=true; try { await task(); } catch(error) { report(error.message); } finally { b.disabled=b.dataset.locked==='true'; } };
 try {
 const catalog=await api('catalog');
 let journey=await api('journey');let guestReady=Promise.resolve();
 const view=mount.dataset.view || 'learn';const learningView=['learn','journey','practice','home'].includes(view);
 const main=el('div',undefined,'wbc-main'); mount.append(main);
 const refresh=async()=>{journey=await api('journey');};
 const completed = id => journey.records.some(r=>r.kind==='completion' && r.object_id===id);
 const summary=el('div',undefined,'wbc-summary'); if(learningView) main.append(summary);
 function updateSummary() { summary.replaceChildren(el('p',`${journey.records.filter(r=>r.kind==='completion').length} of ${(catalog.lessons || []).length} lessons read`),el('p',journey.mode==='account'?'Your journey is saved in your account.':journey.mode==='remembered'?'Progress is remembered on this browser.':'Progress is kept for this visit.')); if(journey.expires_at) summary.append(el('small','Visit memory expires: '+new Date(journey.expires_at*1000).toLocaleString())); }
 updateSummary();if(view==='journey'){const evidence=panel('What your progress means');evidence.append(el('p','Reading completion, demonstrated understanding and practical application are recorded separately.'));for(const kind of ['pass','demonstration']){const records=journey.records.filter(r=>r.kind===kind);evidence.append(el('h3',kind==='pass'?'Understanding checks':'Practice demonstrations'));if(!records.length)evidence.append(el('p','No results yet.'));for(const r of records)evidence.append(el('p',r.object_id+(r.applicable?' · Current evidence':' · Historical result; check current requirements')));}main.append(evidence);}
 if(learningView && journey.mode!=='account') {
 const memory=panel('Keep your place'); memory.append(el('p','Choose whether this browser remembers your progress for 30 days after your last saved learning activity. Reading articles does not extend that time. An account saves progress across devices.'));
 const label=el('label',undefined,'wbc-memory'); const input=el('input'); input.type='checkbox'; input.checked=journey.mode==='remembered'; label.append(input,document.createTextNode(' Remember my progress on this device')); memory.append(label);
 input.addEventListener('change',async()=>{input.disabled=true; try {await guestReady;await api('guest',{memory:input.checked});await refresh();updateSummary();report('Your memory preference was saved.');}catch(e){input.checked=!input.checked;report(e.message);}finally{input.disabled=false;}});
 const clear=button('Clear this device’s learning progress',()=>run(clear,async()=>{if(!window.confirm('Clear learning progress saved on this browser? Account progress is kept.'))return;await api('guest/clear',{});await refresh();updateSummary();report('This device’s learning progress was cleared.');}),true); memory.append(clear);
 const login=el('a','Sign in'); login.href=config.login || '/wp-login.php'; memory.append(login);if(config.registrationEnabled){const register=el('a','Create an account');register.href=config.register;register.style.marginLeft='1rem';memory.append(register);} main.append(memory);
 }
 const reader=panel('Choose your next lesson'); reader.classList.add('wbc-reader'); main.append(reader);
 function showContent(item, kind) {
 if(kind==='lessons' && journey.mode!=='account')guestReady=api('guest',{}).catch(error=>{report(error.message);});
 reader.replaceChildren(el('h2',item.title));
 const body=el('div',undefined,'wbc-prose'); body.innerHTML=item.body_html || ''; reader.append(body);
 if(kind==='lessons') {
 const remembered=journey.records.find(r=>r.kind==='position' && r.object_id===item.id);if(remembered?.payload?.position>0){reader.append(button('Resume from my saved place',()=>{const top=reader.getBoundingClientRect().top+window.scrollY;window.scrollTo({top:top+Number(remembered.payload.position)*Math.max(1,reader.offsetHeight-window.innerHeight/2),behavior:'auto'});},true));}const position=button('Save my place',()=>run(position,async()=>{const top=reader.getBoundingClientRect().top+window.scrollY;const fraction=Math.max(0,Math.min(1,(window.scrollY-top)/Math.max(1,reader.offsetHeight-window.innerHeight/2)));await guestReady;await api('reading-position',{lesson_id:item.id,position:fraction});await refresh();updateSummary();report('Your reading place was saved. This does not mark the lesson as read.');}),true);reader.append(position);
 const done=button(completed(item.id)?'Lesson marked as read':'Mark this lesson as read',()=>run(done,async()=>{await guestReady;await api('completion',{lesson_id:item.id});await refresh();updateSummary();done.textContent='Lesson marked as read';report('Reading progress saved. Knowledge checks record understanding separately.');})); reader.append(done);
 } else if(kind==='articles') {
 const save=button('Save article',()=>run(save,async()=>{const list=await api('bookmarks');const old=(list.bookmarks || []).find(x=>x.article_id===item.id); const result=await api('bookmark',{article_id:item.id,saved:!(old && old.saved !== false && old.saved !== 0 && old.saved !== '0'),revision:old?.revision || 0});save.textContent=result.saved?'Unsave article':'Save article';report('Article bookmark updated.');}),true); reader.append(save);
 }
 reader.tabIndex=-1; reader.focus();
 }
 const search=el('input'); search.type='search'; search.placeholder='Find a lesson, article or term'; search.setAttribute('aria-label','Find a lesson, article or glossary term'); main.insertBefore(search,reader);
 const libraries=el('div',undefined,'wbc-libraries'); main.insertBefore(libraries,reader);
 function renderLibraries(query='') {
 libraries.replaceChildren();
 const requested=mount.dataset.view || 'learn';
 const groups=requested==='articles'?['articles','hubs']:requested==='glossary'?['glossary']:['lessons','articles','hubs','glossary'];
 for(const kind of groups) {
 const matches=(catalog[kind] || []).filter(x=>!query || (x.title+' '+x.body_html.replace(/<[^>]*>/g,' ')).toLowerCase().includes(query));
 if(!matches.length)continue;
 const section=panel({lessons:'Your foundation',articles:'Articles and stories',hubs:'Explore crypto topics',glossary:'Plain-English glossary'}[kind]);
 const list=el('ul',undefined,'wbc-content-list');
 let module='';for(const item of matches){if(kind==='lessons'&&item.module_id!==module){module=item.module_id;const heading=el('li',module,'wbc-module');list.append(heading);}const li=el('li');const open=button(item.title,()=>showContent(item,kind),true);if(kind==='lessons'&&completed(item.id))open.append(el('span',' · Read'));li.append(open);list.append(li);}section.append(list);libraries.append(section);
 }
 if(!libraries.childElementCount)libraries.append(el('p','No matching published content. Try a shorter phrase.'));
 }
 renderLibraries();const lessonId=new URLSearchParams(window.location.search).get('lesson');const initialLesson=(catalog.lessons || []).find(l=>l.id===lessonId);if(initialLesson)showContent(initialLesson,'lessons');search.addEventListener('input',()=>renderLibraries(search.value.trim().toLowerCase()));
 if(['learn','journey','practice','home'].includes(mount.dataset.view || 'learn')) {
 const practice=panel('Check understanding, then practise');practice.append(el('p','Choose an action and its reason for every scenario. These exercises use fictional situations and never ask for real funds or wallet credentials.'));main.append(practice);
 for(const activity of catalog.activities || []) {const start=button(activity.title || activity.id,()=>run(start,async()=>{const attempt=await api('attempt',{activity_id:activity.id});renderAttempt(attempt);} ),true);if(!activity.approved){start.disabled=true;start.textContent+=' · Content review pending';}practice.append(start);}
 }
 if(learningView && journey.attempts.some(a=>a.status==='open')){const ongoing=panel('Continue a saved attempt');for(const a of journey.attempts.filter(a=>a.status==='open')){const resume=button(a.activity_id,()=>run(resume,async()=>renderAttempt(await api('attempt/'+a.id))),true);ongoing.append(resume);}main.append(ongoing);}
 function renderAttempt(attempt) {
 reader.replaceChildren(el('h2',attempt.activity.title || attempt.activity.id));const fixture=el('div',undefined,'wbc-prose');fixture.innerHTML=attempt.activity.fixture_html || '';reader.append(fixture);let revision=attempt.revision;const answers=attempt.answers || {};
 const form=el('form');const groups=[];
 for(const item of attempt.activity.items || []) {
 const field=el('fieldset');field.append(el('legend',item.prompt || item.scenario || item.title || item.id));
 for(const [type,options] of [['action',item.actions || item.action_options],['reason',item.reasons || item.reason_options]]) {
 const subsection=el('div',undefined,'wbc-options');subsection.append(el('h3',type==='action'?'What would you do?':'Why?'));
 for(const [key,value] of Object.entries(options || {})){const label=el('label');const input=el('input');input.type='radio';input.name=item.id+'-'+type;const choiceKey=typeof value==='object' ? value.id || key : key;input.value=choiceKey;input.required=true;input.checked=answers[item.id]?.[type]===choiceKey;input.addEventListener('change',()=>{answers[item.id]=answers[item.id] || {};answers[item.id][type]=choiceKey;});label.append(input,document.createTextNode(typeof value==='object'?value.text || value.label:String(value)));subsection.append(label);}field.append(subsection);
 }
 groups.push(field);form.append(field);
 }
 const save=button('Save my answers',()=>run(save,async()=>{const response=await api('attempt/'+attempt.attempt_id+'/checkpoint',{revision,answers});revision=response.revision;report('Answers saved. You can continue on this page.');} ),true);form.append(save);
 const submit=el('button','Submit for feedback','wbc-button');submit.type='submit';form.append(submit);
 form.addEventListener('submit',event=>{event.preventDefault();run(submit,async()=>{const response=await api('attempt/'+attempt.attempt_id+'/submit',{revision,answers});revision=response.revision;const result=response.result;const feedback=panel(result.passed?'Understanding demonstrated':'Review and try again');for(const row of result.rows || [])feedback.append(el('p',`${row.id}: ${row.correct?'Correct':'Review this decision'}. ${row.feedback || ''}`));reader.append(feedback);submit.dataset.locked='true';form.querySelectorAll('input,button').forEach(n=>n.disabled=true);await refresh();updateSummary();report(result.passed?'Your result was saved.':'Your result was saved. Review the lesson and choose the alternate practice form.');});});reader.append(form);reader.tabIndex=-1;reader.focus();
 }
 if(journey.mode==='account') {
 const imported=panel('Bring your device progress into your account');imported.append(el('p','Signing in does not copy device progress automatically. Select the records to save to this account. Selecting an outcome also selects its required attempt record. Only confirmed saved records are cleared from the device.'));const preview=await api('import-preview');const selectedIds=new Set();const importChecks=new Map();for(const item of preview.items || []){const label=el('label',undefined,'wbc-memory');const sourceId=item.source_id || item.id;const check=el('input');check.type='checkbox';check.value=sourceId;importChecks.set(sourceId,check);check.addEventListener('change',()=>{if(check.checked){selectedIds.add(sourceId);for(const dependency of item.dependencies || []){selectedIds.add(dependency);if(importChecks.has(dependency))importChecks.get(dependency).checked=true;}}else selectedIds.delete(sourceId);});label.append(check,document.createTextNode((item.kind || 'Learning record')+' · '+(item.object_id || item.id)));imported.append(label);}if(!(preview.items || []).length)imported.append(el('p','No device learning records are available to import.'));const importStorageKey='wbc-import-operation-'+(config.accountId || 'current');let importOperation=null,pendingSelection=null;try{importOperation=sessionStorage.getItem(importStorageKey);pendingSelection=JSON.parse(sessionStorage.getItem(importStorageKey+'-selection') || 'null');}catch{}const importButton=button('Save device progress to this account',()=>run(importButton,async()=>{if(!selectedIds.size && !importOperation){report('Select at least one learning record to save.');return;}if(!window.confirm('Save the selected device learning records to your current account?'))return;if(!importOperation){importOperation=crypto.randomUUID ? crypto.randomUUID() : '10000000-1000-4000-8000-100000000000'.replace(/[018]/g,c=>(c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16));try{sessionStorage.setItem(importStorageKey,importOperation);pendingSelection=Array.from(selectedIds);sessionStorage.setItem(importStorageKey+'-selection',JSON.stringify(pendingSelection));}catch{}}const result=await api('import',{operation_id:importOperation,intent:'save_progress',source_ids:pendingSelection || Array.from(selectedIds),target_user_id:preview.target_user_id});if(result.saved){try{sessionStorage.removeItem(importStorageKey);sessionStorage.removeItem(importStorageKey+'-selection');}catch{}importOperation=null;}for(const item of result.items || [])imported.append(el('p',item.source_id+': '+item.status+(item.message?' · '+item.message:'')));if(!result.saved){report('Some records need another attempt. Confirmed saved records remain in your account. Keep this selection to retry.');return;}await refresh();updateSummary();report(result.message || 'Import completed. Your account contains the confirmed saved records.');}));imported.append(importButton);if(learningView)main.append(imported);const saved=panel('Saved articles');main.append(saved);
 try{const data=await api('bookmarks');for(const item of data.bookmarks || []){const article=(catalog.articles || []).find(a=>a.id===item.article_id);if(article && item.saved !== false && item.saved !== 0 && item.saved !== '0')saved.append(button(article.title,()=>showContent(article,'articles'),true));}if(saved.childElementCount===1)saved.append(el('p','No saved articles yet.'));}catch(e){saved.append(el('p',e.message));}
 }
 report('Your learning space is ready. Take am one step at a time.');
 } catch(error) {report(error.message);}
});
})();
