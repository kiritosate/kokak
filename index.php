const menuBtn   = document.getElementById('menu');
const menu      = document.getElementById('menu-list');
const scrim     = document.getElementById('scrim');
const regModal  = document.getElementById('register-modal');
const termsModal= document.getElementById('terms-modal');

function openMenu(open){
    menu.classList.toggle('open', open);
    scrim.hidden = !open;
    menuBtn.setAttribute('aria-expanded', open);
    menu.setAttribute('aria-hidden', !open);
}
menuBtn.addEventListener('click', () => openMenu(!menu.classList.contains('open')));
scrim.addEventListener('click', () => openMenu(false));

function openModal(m){ m.classList.add('open'); }
function closeModal(m){ m.classList.remove('open'); }

document.getElementById('a').addEventListener('click', () => { openMenu(false); openModal(regModal); });
document.getElementById('b').addEventListener('click', () => { openMenu(false); openModal(termsModal); });
document.getElementById('c').addEventListener('click', () => { openMenu(false); /* scroll to about */ });

document.getElementById('open-form').addEventListener('click', () => openModal(regModal));
document.getElementById('closeform').addEventListener('click', () => closeModal(regModal));
document.getElementById('closeform2').addEventListener('click', () => closeModal(termsModal));

// Click outside to close
[regModal, termsModal].forEach(m => {
    m.addEventListener('click', e => { if (e.target === m) closeModal(m); });
});
// ESC to close
document.addEventListener('keydown', e => {
    if (e.key === 'Escape') { closeModal(regModal); closeModal(termsModal); openMenu(false); }
});

// Optional: play frog audio on first interaction (autoplay policies block it otherwise)
const aud = document.getElementById('aud');
document.addEventListener('click', function once(){
    aud.play().catch(()=>{});
    document.removeEventListener('click', once);
}, { once:true });
