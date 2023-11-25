/*document.querySelectorAll('li span').forEach(function (link) {
    link.addEventListener('click', function () {
        this.parentElement.classList.toggle('opened');
    });
});*/
const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo use');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');


window.addEventListener('scroll', () => {
    if (this.scrollY > 1) {
        navbar.classList.add('navbar-light');
        logo.href.baseVal = './img/sprite.svg#logo';
    } else {
        navbar.classList.remove('navbar-light');
        logo.href.baseVal = './img/sprite.svg#logo-light';
    }
});

mMenuToggle.addEventListener('click', (event) => {
    event.preventDefault();
    menu.classList.toggle('is-open');
});