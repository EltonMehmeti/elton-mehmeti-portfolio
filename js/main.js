const menuToggle = document.getElementById('menuToggle');
const navMenu = document.getElementById('menu_mobile');
const header = document.getElementById('header');



const toggle = () => {

    menuToggle.classList.toggle('active');
    navMenu.classList.toggle('active');
    header.classList.toggle('sticky');
}


menuToggle.onclick = () => {
    toggle();
}