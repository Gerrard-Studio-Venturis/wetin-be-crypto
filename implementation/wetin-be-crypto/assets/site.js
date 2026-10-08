(() => {
 'use strict';
 const button=document.querySelector('.wbc-menu-button');
 const nav=document.getElementById('wbc-main-nav');
 if(!button||!nav)return;
 const set=open=>{button.setAttribute('aria-expanded',String(open));nav.dataset.open=String(open);};
 button.addEventListener('click',()=>set(button.getAttribute('aria-expanded')!=='true'));
 nav.addEventListener('click',event=>{if(event.target.closest('a'))set(false);});
 document.addEventListener('keydown',event=>{if(event.key==='Escape'&&button.getAttribute('aria-expanded')==='true'){set(false);button.focus();}});
 window.matchMedia('(min-width: 901px)').addEventListener('change',event=>{if(event.matches)set(false);});
})();
