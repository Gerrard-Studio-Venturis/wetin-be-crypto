"""Reproducible extraction. Editorial notes and assessment keys never enter public output."""
import re,json,hashlib
from pathlib import Path
import markdown
root=Path(__file__).resolve().parents[2]
out=root/'implementation/wetin-be-crypto/data'
out.mkdir(parents=True,exist_ok=True)
def html(s):
    s=re.sub(r'\*\*Explore further:\*\*.*?(?=\n\n|$)','',s,flags=re.S)
    return markdown.markdown(s,extensions=['tables'])
def sections(text,pattern):
    matches=list(re.finditer(pattern,text,re.M))
    return [(m,text[m.end():matches[i+1].start() if i+1<len(matches) else len(text)]) for i,m in enumerate(matches)]
public={k:[] for k in ['lessons','articles','hubs','glossary']}
for f in ['FOUNDATION-LESSONS-01-04.md','FOUNDATION-LESSONS-05-08.md']:
    text=(root/f).read_text()
    for m,body in sections(text,r'^### (L-\d{2}\.\d) — (.+)$'):
        body=re.split(r'\*\*Reviewer/source note:|#### Editorial/source note',body)[0]
        body=re.sub(r'^#### Learner copy\s*','',body,flags=re.M)
        body=re.sub(r'\n## M-.*','',body,flags=re.S)
        public['lessons'].append({'id':m[1],'title':m[2],'module_id':'M-'+m[1][2:4],'body_html':html(body),'revision':'1'})
text=(root/'EDITORIAL-SEED-CONTENT.md').read_text()
for m,body in sections(text,r'^## ((?:A-EX-\d+|A-STORY-\d+|H-[A-Z]+)) — (.+)$'):
    marker='### Reader copy' if m[1].startswith('A-') else '### Public introduction'
    body=body.split(marker,1)[1].split('\n### ',1)[0].split('\n## ',1)[0]
    public['articles' if m[1].startswith('A-') else 'hubs'].append({'id':m[1],'title':m[2],'body_html':html(body),'revision':'1'})
for m,body in sections(text,r'^### (G-[A-Z-]+) — (.+)$'):
    body=body.split('\n## ',1)[0]
    public['glossary'].append({'id':m[1],'title':m[2],'body_html':html(body),'revision':'1'})
text=(root/'NEWS-SEED-ARTICLE.md').read_text()
m=re.search(r'^## (A-NEWS-02) — (.+)$',text,re.M)
body=text.split('### Reader copy',1)[1].split('\n### ',1)[0]
public['articles'].append({'id':m[1],'title':m[2],'body_html':html(body),'revision':'1','as_of':'2026-10-07'})
assert [len(public[k]) for k in public]==[32,6,6,24]
(out/'public-content.json').write_text(json.dumps(public,ensure_ascii=False,indent=2))
keys={}; activities=[]
for f in ['ASSESSMENT-BANK-01-04.md','ASSESSMENT-BANK-05-08.md']:
    text=(root/f).read_text()
    for line in text.splitlines():
        cells=[x.strip() for x in line.strip('|').split('|')]
        if len(cells)==3 and re.fullmatch(r'(?:KC\d{2}[AB]-\d+|PM\d{2}[AB]-\d+|[KP]\d[AB]\d+)',cells[0]):
            pair=re.fullmatch(r'([ABC])\s*/\s*([ABC123])',cells[1])
            if pair: keys[cells[0]]=(pair[1],pair[2],cells[2])
    for m,body in sections(text,r'^#{2,3} ((KC|PM)-(\d{2})-([AB])) — (.+)$'):
        learner=body.split('### Facilitator-only',1)[0]
        rows=[]
        for line in learner.splitlines():
            cells=[x.strip() for x in line.strip('|').split('|')]
            if len(cells)!=3:continue
            idmatch=re.match(r'(KC\d{2}[AB]-\d+|PM\d{2}[AB]-\d+|[KP]\d[AB]\d+)\b',cells[0])
            if not idmatch or not re.search(r'O-\d{2}\.\d',cells[0]):continue
            ident=idmatch[1]
            def choices(cell):
                matches=list(re.finditer(r'(?:^|\s)([ABC123])[):]\s*',cell))
                return [{'id':x[1],'label':x[1],'text':cell[x.end():matches[j+1].start() if j+1<len(matches) else len(cell)].strip()} for j,x in enumerate(matches)]
            rows.append({'id':ident,'outcomes':re.findall(r'O-\d{2}\.\d',cells[0]),'class':re.search(r'\b([EC])\s*$',cells[0])[1],'prompt':'Choose the finding or action and its reason.','actions':choices(cells[1]),'reasons':choices(cells[2])})
        fixture=learner.split('\n|',1)[0].strip()
        activities.append({'id':m[1],'canonical_id':m[2]+'-'+m[3],'kind':'check' if m[2]=='KC' else 'mission','form':m[4],'module_id':'M-'+m[3],'title':m[5],'fixture_html':html(fixture),'items':rows,'outcomes':sorted({o for r in rows for o in r['outcomes']}),'prerequisites':[],'revision':'1','approved':False})
for a in activities:
    for r in a['items']:
        r['answer_action'],r['answer_reason'],r['feedback']=keys[r['id']]
        assert len(r['actions'])==len(r['reasons'])==3,r['id']
        assert r['answer_action'] in [c['id'] for c in r['actions']]
        assert r['answer_reason'] in [c['id'] for c in r['reasons']]
    if a['canonical_id']=='PM-05' and a['form']=='A':
        a['fixture_html']=next(x['fixture_html'] for x in activities if x['id']=='KC-05-A')+a['fixture_html']
gates={'PM-04':['O-04.1','O-04.2','O-04.3'],'PM-06':['O-04.2','O-04.3','O-06.1','O-06.2'],'PM-08':['O-02.3','O-04.2','O-06.1','O-08.1','O-08.2']}
for a in activities:a['prerequisites']=gates.get(a['canonical_id'],[])
assert len(activities)==32 and sum(len(a['items']) for a in activities)==234
payload=json.dumps({'activities':activities},ensure_ascii=False)
# PHP data wrapper refuses direct requests and is omitted from every public response.
(out/'private-activities.php').write_text("<?php\nif (!defined('ABSPATH')) { http_response_code(404); exit; }\nreturn json_decode(<<<'WBC_DATA'\n"+payload+"\nWBC_DATA\n, true);\n")
print('Extracted 32 lessons, 6 articles, 6 hubs, 24 terms, 32 private forms and 234 paired keys.')
