/*document.querySelectorAll('li span').forEach(function (link) {
    link.addEventListener('click', function () {
        this.parentElement.classList.toggle('opened');
    });
});*/
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (this.scrollY > 1) {
        navbar.classList.add('navbar-light');
    } else {
        navbar.classList.remove('navbar-light');
    }
})