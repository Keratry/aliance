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
      <?php
      if (!empty($breadcrumbs)) {
        $breadcrumbs_count = count($breadcrumbs);
        foreach ($breadcrumbs as $breadcrumb) {
          $active_link = (++$i == $breadcrumbs_count) ? ' active' : '';
          echo '<li class="breadcrumbs-item' . $active_link . '">';
          echo "<a href='{$breadcrumb['link']}' class='breadcrumbs-link'>{$breadcrumb['name']}</a>";
          echo '</li>';
        }
      } else {
        echo '<li class="breadcrumbs-item active">';
        echo '<a href="#" class="breadcrumbs-link">' . $page_title . '</a>';
        echo '</li>';
      }
      ?>
    </ul>
  </div>
  <!-- /.container -->
</header>