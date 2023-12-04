<?php require_once('_head.php'); ?>

<body>
    <?php
    require_once('_mobile-menu.php');

    $navbar_style = 'navbar-light';
    require_once('_navbar.php');

    $page_title = 'Блог';
    $breadcrumbs = [
        [
            'link' => '#',
            'name' => 'Блог'
        ],
        [
            'link' => '#',
            'name' => 'Современная методология разработки одухотворила всех причастных'
        ],
    ];
    $header_style = 'post-header-bg-image';
    require_once('_header.php');

    $blog_title = 'Так же вас может заинтересовать:';
    require_once('./template-parts/postsslider-block.php');

    require_once('_footer.php');
    ?>

</body>

</html>