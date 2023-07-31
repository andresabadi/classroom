let plegableUser = document.querySelector('.user');
let panelUser = document.querySelector('.user-panel');
const hamburger = document.querySelector('.fa-bars');
const menu = document.querySelector('.menu');

function plegarPanelUsuario() {
    panelUser.classList.toggle('hidden');
}
function plegarMenu() {
    menu.classList.toggle('visible');
}
hamburger.addEventListener('click', plegarMenu);

if (plegableUser == null || panelUser == null) {
    plegableUser = "default";
    panelUser = "default";
}

plegableUser.addEventListener('click', plegarPanelUsuario);

