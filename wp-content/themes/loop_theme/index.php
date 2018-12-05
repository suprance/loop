<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loop_theme
 */

get_header();
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php include(locate_template('template-parts/page-templates/page-banners/large-banner.php')); ?>
      <?php include(locate_template('template-parts/main-about-us.php')); ?>
      <?php include(locate_template('template-parts/main-hot-stocks.php')); ?>
      <?php include(locate_template('template-parts/main-trades-to-date.php')); ?>
      <?php include(locate_template('template-parts/main-testimonials.php')); ?>
    </main>
  </div>

<?php
get_footer();
