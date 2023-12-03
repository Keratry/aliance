<header class="page-header <?= $header_style; ?>">
  <?php 
  // <img src="img/thumb.png" alt="" class="page-header-thumb" /> 
  ?>
  <div class="container">
    <div class="separator"></div>
    <h1 class="page-header-title"><?= $page_title ?></h1>
    <ul class="breadcrumbs">
      <li class="breadcrumbs-item">
        <a href="#" class="breadcrumbs-link">Главная</a>
      </li>
      <li class="breadcrumbs-item active">
        <a href="#" class="breadcrumbs-link"><?= $page_title ?></a>
      </li>
    </ul>
  </div>
  <!-- /.container -->
</header>