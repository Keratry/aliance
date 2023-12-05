<?php require_once('_head.php'); ?>

<body>
    <?php
    require_once('_mobile-menu.php');

    $navbar_style = 'navbar-light';
    require_once('_navbar.php');

    $page_title = 'Контрактное производство';
    $header_style = 'page-header-bg-grey';
    require_once('_header.php');

    require_once('./template-parts/production-block.php');
    ?>
    <div class="seo container">
        <h3>SEO Заголовок</h3>
        <p>Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...</p>
        <a href="#" class="more-link">
            <svg class="icon" width="24" height="24">
                <use href="./img/sprite.svg#load"></use>
            </svg>
            Читать больше
        </a>
    </div>
    <?php
    require_once('_footer.php');
    ?>

</body>

</html>