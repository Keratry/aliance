/*document.querySelectorAll('li span').forEach(function (link) {
    link.addEventListener('click', function () {
        this.parentElement.classList.toggle('opened');
    });
});*/
const navbar = document.querySelector('.navbar');
const logoLight = document.querySelector('.logo-light');
const logo = document.querySelector('.logo');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');

const liteModeOn = (event) => {
    navbar.classList.add('navbar-light');
    logo.style.display = 'block';
    logoLight.style.display = 'none';
}

const liteModeOff = (event) => {
    navbar.classList.remove('navbar-light');
    logo.style.display = 'none';
    logoLight.style.display = 'block';
}

// Функция открытия меню
const openMenu = (event) => {
    mMenuToggle.classList.add('close-menu');
    menu.classList.add('is-open'); // Вешаем класс is-open
    document.body.classList.add('lock'); // Запрещаем скролл сайта
    liteModeOn();
}

// Функция открытия меню
const closeMenu = (event) => {
    mMenuToggle.classList.remove('close-menu');
    menu.classList.remove('is-open'); // Удаляем класс is-open с менб
    document.body.classList.remove('lock'); // Возвращаем скролл сайта

    if (pageYOffset == 0) {
        liteModeOff();
    }
}



window.addEventListener('scroll', () => {
    this.scrollY > 1 ? liteModeOn() : liteModeOff();
});

mMenuToggle.addEventListener('click', (event) => {
    event.preventDefault();
    menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper('.steps-slider', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: '.steps-button-next',
        prevEl: '.steps-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        640: {
            slidesPerView: 2,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        1200: {
            slidesPerView: 4,
        }
    }
});

const swiper = new Swiper('.header-features-slider', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
            slidesPerView: 2,
        },
        // when window width is >= 480px
        768: {
            slidesPerView: 3,
        },
        // when window width is >= 640px
        1024: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        }
    }

});

const swiperBlog = new Swiper('.blog-slider', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        992: {
            slidesPerView: 2,
        }
    }
});