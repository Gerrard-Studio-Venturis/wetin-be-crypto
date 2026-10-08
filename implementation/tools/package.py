"""Create a standard WordPress plugin archive from reviewed source files."""
from pathlib import Path
import zipfile,hashlib,json,re
root=Path(__file__).resolve().parents[1]
plugin=root/'wetin-be-crypto'
out=root/'dist';out.mkdir(exist_ok=True)
version=re.search(r'Version:\s*([0-9.]+)',(plugin/'wetin-be-crypto.php').read_text())[1]
archive=out/f'wetin-be-crypto-{version}.zip'
with zipfile.ZipFile(archive,'w',zipfile.ZIP_DEFLATED) as z:
    for p in sorted(plugin.rglob('*')):
        if not p.is_file() or 'tests' in p.relative_to(plugin).parts:continue
        if p.name=='private-activities.json':raise RuntimeError('Private JSON must never be packaged')
        info=zipfile.ZipInfo(str(Path('wetin-be-crypto')/p.relative_to(plugin)))
        info.external_attr=(0o100644<<16);info.compress_type=zipfile.ZIP_DEFLATED
        z.writestr(info,p.read_bytes())
manifest={'file':archive.name,'sha256':hashlib.sha256(archive.read_bytes()).hexdigest(),'files':zipfile.ZipFile(archive).namelist()}
(out/'manifest.json').write_text(json.dumps(manifest,indent=2)+'\n')
print(str(archive));print(manifest['sha256']);print(len(manifest['files']),'packaged files')
