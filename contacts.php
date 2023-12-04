<?php require_once('_head.php'); ?>

<body>
    <?php
    require_once('_mobile-menu.php');

    $navbar_style = 'navbar-light';
    require_once('_navbar.php');

    $page_title = 'О компании';
    $header_style = 'page-header-bg-grey';
    require_once('_header.php');

    require_once('./template-parts/clients-block.php');

    require_once('_footer.php');
    ?>

</body>

</html>