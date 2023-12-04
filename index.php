<?php require_once('_head.php'); ?>


<body class="home-page">
    <?php require_once('_mobile-menu.php'); ?>
    <?php require_once('_navbar.php'); ?>

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

            <?php include_once('./template-parts/features-block.php'); ?>

        </div>
        <!-- /.container -->
    </header>



    <?php

    include_once('./template-parts/steps-block.php');

    $production_title = 'Контрактное производство';
    include_once('./template-parts/production-block.php');


    $trademarks_title = "собственные торговые марки";
    require_once('./template-parts/trademarks-block.php');
    require_once('./template-parts/founder-block.php');
    require_once('./template-parts/clients-block.php');

    $blog_title = 'Блог экспертов в области производства';
    require_once('./template-parts/postsslider-block.php');
    require_once('_footer.php');
    ?>

</body>

</html>