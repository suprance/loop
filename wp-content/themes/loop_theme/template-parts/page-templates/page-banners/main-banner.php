<?php $pageBanner = get_field('page_banner_layout')['gp_page_banners']; ?>

<?php if($pageBanner['type'] != 'default') { ?>
  <div class="main-banner">
    <?php //var_dump(get_template_part()); ?>
    <?php
      switch ($pageBanner['type']) {
        case 'small':
          // get_template_part('page-templates/page-banners/banner-small');
          include_once(locate_template('template-parts/page-templates/page-banners/small-banner.php'));
          break;

        case 'medium':
          // get_template_part('page-templates/page-banners/banner-medium');
          // include_once(locate_template('page-templates/page-banners/banner-medium.php'));
        echo 'this is medium';
          break;

        case 'large':
          // get_template_part('page-templates/page-banners/banner-large');
          include_once(locate_template('template-parts/page-templates/page-banners/large-banner.php'));
          break;

        case 'search':
          // get_template_part('page-templates/page-banners/banner-search');
          // include_once(locate_template('page-templates/page-banners/banner-search.php'));
        echo 'this is search banner';
          break;

      default:
        include locate_template('page-templates/flexible-layouts/row-layouts/layout-carouselbox/default.php');
        break;
      }
    ?>
  </div>
<?php } ?>