<!DOCTYPE html>
<html lang="ru">

<?php require_once('_header.php'); ?>


<body class="home-page">
    <?php require_once('_mobile-menu.php'); ?>

    <nav class="navbar">
        <a href="" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>

        <a href="/" class="navbar-logo">
            <svg class="logo-svg logo-light">
                <use href="./img/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="./img/sprite.svg#logo"></use>
            </svg>
        </a>

        <ul class="navbar-nav">
            <li><a href="#">О компании</a></li>
            <li><a href="#">Контрактное производство</a></li>
            <li><a href="#">Собственные торговые марки</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>

        <div class="navbar-phone">
            <svg class="icon" width="24" height="24">
                <use href="./img/sprite.svg#phone"></use>
            </svg>

            <a href="tel:+74996861014">+7 (499) 686-10-14</a>
        </div>
        <button class="navbar-button button" data-toggle="modal">
            <svg class="icon" width="24" height="24">
                <use href="./img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
    <header class="header header-image">

        <div class="container">
            <div class="header-content">
                <div class="separator"></div>
                <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
                <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким
                    доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от
                    анализа
                    существующих паттернов поведения.</p>
                <a href="#" class="button header-buttom">Подробнее о компании</a>
            </div>
            <!-- /.header-content -->

            <!-- Главный контейнер слайдера -->
            <div class="swiper header-features-slider">
                <!-- Обертка -->
                <ul class="swiper-wrapper header-features">
                    <!-- Слайды -->
                    <li class="swiper-slide header-features-item">
                        <svg class="icon" width="36" height="36">
                            <use href="./img/sprite.svg#time"></use>
                        </svg>
                        <p class="header-features-text">Непрерывная работа c 2017 года</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="icon" width="36" height="36">
                            <use href="./img/sprite.svg#certificates"></use>
                        </svg>
                        <p class="header-features-text">Вся продукция сертифицирована</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="icon" width="36" height="36">
                            <use href="./img/sprite.svg#control"></use>
                        </svg>
                        <p class="header-features-text">Контроль качества на всех этапах</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="icon" width="36" height="36">
                            <use href="./img/sprite.svg#delivery"></use>
                        </svg>
                        <p class="header-features-text">Возможны поставки по всей России</p>
                    </li>
                    <li class="swiper-slide header-features-item">
                        <svg class="icon" width="36" height="36">
                            <use href="./img/sprite.svg#speed"></use>
                        </svg>
                        <p class="header-features-text">Оперативное производство</p>
                    </li>
                </ul>

                <!-- Кнопки навигации -->
                <div class="slider-buttons">
                    <div class="slider-button-prev">
                        <svg class="icon" width="36" height="24">
                            <use href="./img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-button-next">
                        <svg class="icon" width="36" height="24">
                            <use href="./img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div>

            </div><!-- /.swiper -->

        </div>
        <!-- /.container -->
    </header>

    <section class="section">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">схема работы</h2>
            <!-- Slider main container -->
            <div class="swiper steps-slider">
                <!-- Additional required wrapper -->
                <ol class="swiper-wrapper steps">
                    <!-- Slides -->
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">01</span>
                        <h3 class="steps-title">Знакомство</h3>
                        <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм воздействия.</p>
                        <a href="#" class="button-link">Оставить заявку</a>
                    </li>
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">02</span>
                        <h3 class="steps-title">Заключение договора</h3>
                        <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </li>
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">03</span>
                        <h3 class="steps-title">Производство</h3>
                        <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                    </li>
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">04</span>
                        <h3 class="steps-title">Доставка</h3>
                        <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о
                            возможностях приоритизации разума над эмоциями.</p>
                    </li>
                </ol>

                <div class="steps-buttons primary-buttons-wrapper">
                    <div class="steps-button-prev primary-button-prev">
                        <svg class="icon" width="36" height="24">
                            <use href="./img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="steps-button-next primary-button-next">
                        <svg class="icon" width="36" height="24">
                            <use href="./img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section production section-production">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">Контрактное производство</h2>
            <div class="cards production-cards">
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Автомобильная химия</h3>
                        <p class="card-text">
                            Безусловно, сплочённость команды профессионалов позволяет
                            оценить значение форм воздействия.
                        </p>
                    </div>
                    <!-- /.card-content -->
                    <img src="img/avto-him.png" alt="Автомобильная химия" class="card-image" />
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Бытовая химия</h3>
                        <p class="card-text">
                            А также стремящиеся вытеснить традиционное производство,
                            нанотехнологии функционально разнесены на независимые элементы.
                        </p>
                    </div>
                    <!-- /.card-content -->
                    <img src="img/household.png" alt="Бытовая химия" class="card-image" />
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Дезинфицирующие средства</h3>
                        <p class="card-text">
                            Лишь интерактивные прототипы призваны к ответу.
                        </p>
                    </div>
                    <!-- /.card-content -->
                    <img src="img/desinfection.png" alt="Дезинфицирующие средства" class="card-image" />
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Пищевые аэрозоли</h3>
                        <p class="card-text">
                            Безусловно, сплочённость команды профессионалов позволяет
                            оценить значение форм воздействия.
                        </p>
                    </div>
                    <!-- /.card-content -->
                    <img src="img/food.png" alt="Пищевые аэрозоли" class="card-image" />
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Косметическая продукция</h3>
                        <p class="card-text">
                            Лишь интерактивные прототипы призваны к ответу.
                        </p>
                    </div>
                    <!-- /.card-content -->
                    <img src="img/him.png" alt="Косметическая продукция" class="card-image" />
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Краски аэрозольные</h3>
                        <p class="card-text">
                            А также стремящиеся вытеснить традиционное производство,
                            нанотехнологии функционально разнесены на независимые элементы.
                        </p>
                    </div>
                    <!-- /.card-content -->
                    <img src="img/colors.png" alt="Краски аэрозольные" class="card-image" />
                </a>
            </div>
        </div>
        <!-- /.container -->
    </section>


    <section class="section trademark section-trademark">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">Собственные марки</h2>
            <div class="trademark-cards">
                <div class="trademark-card">
                    <svg class="trademark-card-logo">
                        <use href="img/sprite.svg#AGTECH"></use>
                    </svg>
                    <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
                    <p class="trademark-card-text">
                        Для современного мира разбавленное изрядной долей эмпатии,
                        рациональное мышление создаёт предпосылки для поставленных
                        обществом задач.
                    </p>
                </div>
                <div class="trademark-card">
                    <svg class="trademark-card-logo">
                        <use href="img/sprite.svg#AP"></use>
                    </svg>
                    <h3 class="trademark-card-title">Автохимия AP</h3>
                    <p class="trademark-card-text">
                        Для современного мира разбавленное изрядной долей эмпатии,
                        рациональное мышление создаёт предпосылки для поставленных
                        обществом задач.
                    </p>
                </div>
            </div>
            <!-- /.trademark-cards -->
        </div>
        <!-- /.container -->
    </section>

    <section class="section founder section-founder">
        <img src="img/founder.jpg" class="founder-photo" alt="founder">
        <div class="container">
            <div class="founder-content-wrapper">
                <div class="founder-content">
                    <div class="separator"></div>
                    <h2 class="section-title">Отношение к делу <br />и к клиентам</h2>
                    <p class="founder-text">
                        Кстати, интерактивные прототипы описаны максимально подробно.
                        Повседневная практика показывает, что укрепление и развитие
                        внутренней структуры говорит о возможностях соответствующих
                        условий активизации. Внезапно, независимые государства, которые
                        представляют собой яркий пример континентально-европейского типа
                        политической культуры, будут подвергнуты целой серии независимых
                        исследований. С учётом сложившейся международной обстановки,
                        синтетическое тестирование выявляет срочную потребность системы
                        массового участия. <br />
                        <br />
                        А ещё действия представителей оппозиции, превозмогая сложившуюся
                        непростую экономическую ситуацию, в равной степени предоставлены
                        сами себе. Не следует, однако, забывать, что выбранный нами
                        инновационный путь в значительной степени обусловливает важность
                        дальнейших направлений развития.
                    </p>
                    <a href="#" class="button-link">Подробнее о компании</a>
                </div>
                <!-- /.founder-content -->
            </div>
            <!-- /.founder-content-wrapper -->
        </div>
        <!-- /.container -->
    </section>

    <section class="section clients section-clients">
        <div class="container">
            <div class="separator"></div>
            <div class="clients-wrapper">
                <div class="clients-content">
                    <h2 class="section-title">
                        Производим аэрозольную продукцию для разных сфер
                    </h2>
                    <ul class="clients-list">
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#him"></use>
                            </svg>
                            Химические производства
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#car"></use>
                            </svg>
                            Автомойки
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#eat"></use>
                            </svg>
                            Пищевая продукция
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#brush"></use>
                            </svg>
                            Лаки и краски
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#cosmetic"></use>
                            </svg>
                            Косметические средства
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#car-cosm"></use>
                            </svg>
                            Автомобильная косметика
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#shirt"></use>
                            </svg>
                            Косметика по уходу за одеждой
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#boots"></use>
                            </svg>
                            Косметика по уходу за обувью
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#bricks"></use>
                            </svg>
                            Строительные материалы
                        </li>
                        <li class="clients-list-item">
                            <svg width="30" height="30" class="clients-list-icon">
                                <use href="img/sprite.svg#more"></use>
                            </svg>
                            И многих других
                        </li>
                    </ul>
                </div>
                <!-- /.clients-content -->
                <div class="clients-logo-list">
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                    <a href="#" class="clinets-logo-item">
                        <img src="img/client.png" class="clients-logo" alt="client">
                    </a>
                </div>
                <!-- /.clients-logo -->
            </div>
            <!-- /.clients-wrapper -->
        </div>
        <!-- /.container -->
    </section>


    <section class="section blog">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <!-- Slider main container -->
            <div class="swiper blog-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <a href="#" class="swiper-slide blog-card">
                        <img src="img/blog/blog-photo.jpeg" alt="" class="blog-card-image" />
                        <h3 class="blog-card-title">
                            Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card-text">
                            Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени
                            предоставлены...
                        </p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <img src="img/blog/blog-post.jpeg" alt="" class="blog-card-image" />
                        <h3 class="blog-card-title">
                            Сложно сказать, почему жизнь прекрасна </h3>
                        <p class="blog-card-text">
                            Сложно сказать, почему элементы политического процесса функционально разнесены на
                            независимые элементы. Безусловно, высокотехнологичная...
                        </p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <img src="img/blog/blog-photo.jpeg" alt="" class="blog-card-image" />
                        <h3 class="blog-card-title">
                            Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card-text">
                            Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени
                            предоставлены...
                        </p>
                    </a>
                </div>

                <div class="blog-slider-footer">
                    <a href="#" class="button-link">Весь блог</a>
                    <div class="blog-buttons primary-buttons-wrapper">
                        <div class="blog-button-prev primary-button-prev">
                            <svg width="36" height="24">
                                <use href="img/sprite.svg#arrow-prev"></use>
                            </svg>
                        </div>
                        <div class="blog-button-next primary-button-next">
                            <svg class="icon" width="36" height="24">
                                <use href="./img/sprite.svg#arrow-next"></use>
                            </svg>
                        </div>
                    </div>

                    <!-- /.blog-button -->
                </div>
                <!-- /.blog-slider-footer -->
            </div>
        </div>
        <!-- /.container -->
    </section>

    <?php require_once('_footer.php'); ?>

</body>

</html>