/*document.querySelectorAll('li span').forEach(function (link) {
    link.addEventListener('click', function () {
        this.parentElement.classList.toggle('opened');
    });
});*/
const navbar = document.querySelector('.navbar');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');
const isFront = document.body.classList.contains('home-page');

const liteModeOn = (event) => {
    navbar.classList.add('navbar-light');
}

const liteModeOff = (event) => {
    navbar.classList.remove('navbar-light');
}

const changeNavHeight = (height) => {
    navbar.style.height = height;
};

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

    if (pageYOffset == 0 && isFront) {
        liteModeOff();
    }
}



window.addEventListener('scroll', () => {

    this.scrollY > 1 ? navbar.classList.add('navbar-scroll') : navbar.classList.remove('navbar-scroll');
    if (isFront) {
        this.scrollY > 1 ? liteModeOn() : liteModeOff();
    }

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


const modal = document.querySelector('.modal');
const modalDialog = document.querySelector('.modal-dialog');

document.addEventListener('click', (event) => {

    if (event.target.dataset.toggle == 'modal' ||
        event.target.parentNode.dataset.toggle == 'modal' ||
        (!event.composedPath().includes(modalDialog) && modal.classList.contains('is-open'))
    ) {
        modal.classList.toggle('is-open');
    }

});

document.addEventListener('keyup', (event) => {
    if (event.key == 'Escape' && modal.classList.contains('is-open')) {
        modal.classList.toggle('is-open');
    }
});

// const modalToggle = document.querySelectorAll('[data-toggle=modal]');
// modalToggle.forEach((element) => {
//     element.addEventListener('click', (event) => {
//         modal.classList.add('is-open');
//     })
// });

const forms = document.querySelectorAll('form');
forms.forEach((form) => {

    const validation = new JustValidate(form, {
        errorFieldCssClass: "is-invalid",
    });

    validation
        .addField("[name=username]", [
            {
                rule: "required",
                errorMessage: "Укажите имя",
            },
            {
                rule: "minLength",
                value: 2,
                errorMessage: "Минимально 2 символа",
            },
            {
                rule: "maxLength",
                value: 50,
                errorMessage: "Максимально 50 символов",
            },
        ])
        .addField("[name=userphone]", [
            {
                rule: "required",
                errorMessage: "Укажите телефон",
            },
            {
                rule: "minLength",
                value: 8,
                errorMessage: "Минимально 8 символов",
            },
            {
                rule: "maxLength",
                value: 20,
                errorMessage: "Максимально 50 символов",
            },
        ])
        .onSuccess((event) => {
            const thisForm = event.target;
            const formData = new FormData(thisForm);
            const ajaxSend = (formData) => {
                fetch(thisForm.getAttribute('action'), {
                    method: thisForm.getAttribute('method'),
                    body: formData,
                }).then((response) => {
                    if (response.ok) {
                        thisForm.reset();
                        alert('Форма отправлена');
                    } else {
                        console.log(response.statusText);
                    }
                });
            };
            ajaxSend(formData);

        });

});