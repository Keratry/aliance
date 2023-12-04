<nav class="navbar <?= $navbar_style??''; ?>">
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
        <li><a href="./about.php">О компании</a></li>
        <li><a href="./contracts.php">Контрактное производство</a></li>
        <li><a href="./trademarks.php">Собственные торговые марки</a></li>
        <li><a href="#">Новости</a></li>
        <li><a href="./contacts.php">Контакты</a></li>
    </ul>

    <div class="navbar-phone">
        <svg class="icon" width="24" height="24">
            <use href="./img/sprite.svg#phone"></use>
        </svg>

        <a href="tel:+74996861014">+7 (499) 686-10-14</a>
    </div>
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="icon" width="24" height="24">
            <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
    </button>
</nav>