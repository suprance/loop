<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="/wp-content/uploads/2018/11/0004-1.png" alt="Loop">
      </a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'nav-list',
      ) );
      ?>
    </nav>
  </div>
</section>

