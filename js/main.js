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

let currentModal;
let modalDialog;
let alertModal = document.querySelector('#alert-modal');

// Переключатели модальных окон
const modalButtons = document.querySelectorAll('[data-toggle=modal]');

modalButtons.forEach((button) => {
    // Клик по переключателю
    button.addEventListener('click', (event) => {
        event.preventDefault();
        // Определяем текущее окно
        currentModal = document.querySelector(button.dataset.target);
        // Открываем текущее окно
        currentModal.classList.toggle('is-open');

        // Назначем диалоговое окно
        modalDialog = currentModal.querySelector('.modal-dialog');

        // Клик по диалоговому фону и пустым областям
        currentModal.addEventListener('click', (event) => {

            if (!event.composedPath().includes(modalDialog) && currentModal.classList.contains('is-open')) {
                // Закрываем окно
                currentModal.classList.remove('is-open');
            }

        });
    });
});

// Закрываем диалоговое окно при нажатии на Escape
document.addEventListener('keyup', (event) => {
    if (event.key == 'Escape' && currentModal.classList.contains('is-open')) {
        currentModal.classList.toggle('is-open');
    }
});


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
            {
                rule: 'customRegexp',
                value: /^[А-Яа-яЁё ]*$/,
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

                        if (currentModal !== undefined) {
                            // Закрываем текущее окно
                            currentModal.classList.remove('is-open');
                        }
                        // Открываем окно с диалогом об успешной отправке
                        alertModal.classList.add('is-open');
                        // Назначаем текущее окно
                        currentModal = alertModal;

                        modalDialog = currentModal.querySelector(".modal-dialog");
                        currentModal.addEventListener("click", (event) => {
                            if (!event.composedPath().includes(modalDialog)) {
                                currentModal.classList.remove("is-open");
                            }
                        });

                    } else {
                        console.log(response.statusText);
                    }
                });
            };
            ajaxSend(formData);

        });

});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
    /* если вводят семерку, добавляем ей скобку */
    if (str === "7") {
        return "7 (";
    }
    /* если вводят восьмерку, ставим вместо нее +7 ( */
    if (str === "8") {
        return "+7 (";
    }
    /* если пишут девятку, заменяем на +7 (9  */
    if (str === "9") {
        return "7 (9";
    }
    /* в других случаях просто 7 (  */
    return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
    /* Проверяем, что это поле имеет класс phone-mask */
    if (e.target.classList.contains("phone-mask")) {
        /* поле с телефоном помещаем в переменную input */
        const input = e.target;
        /* вставляем плюс в начале номера */
        const value = input.value.replace(/\D+/g, "");
        /* длинна номера 11 символов */
        const numberLength = 11;

        /* Создаем переменную, куда будем записывать номер */
        let result;
        /* Если пользователь ввел 8... */
        if (input.value.includes("+8") || input.value[0] === "8") {
            /* Стираем восьмерку */
            result = "";
        } else {
            /* Оставляем плюсик в поле */
            result = "+";
        }

        /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
        for (let i = 0; i < value.length && i < numberLength; i++) {
            switch (i) {
                case 0:
                    /* в самом начале ставим префикс +7 ( */
                    result += prefixNumber(value[i]);
                    continue;
                case 4:
                    /* добавляем после "+7 (" круглую скобку ")" */
                    result += ") ";
                    break;
                case 7:
                    /* дефис после 7 символа */
                    result += "-";
                    break;
                case 9:
                    /* еще дефис  */
                    result += "-";
                    break;
                default:
                    break;
            }
            /* на каждом шаге цикла добавляем новую цифру к номеру */
            result += value[i];
        }
        /* итог: номер в формате +7 (999) 123-45-67 */
        input.value = result;
    }
});