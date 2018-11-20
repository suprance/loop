  </div><!-- #content -->

  <footer id="colophon" class="site-footer">
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'loop_theme' ) ); ?>">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'loop_theme' ), 'WordPress' );
        ?>
      </a>
      <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s.', 'loop_theme' ), 'loop_theme', '<a href="http://underscores.me/">Underscores.me</a>' );
        ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
  </div><!-- #page -->

  <?php // PAGE LOADER ?>
  <div class="loader-overlay">
    <div class="loader">
      <div class="loader-img">
        <div class="cm">
          <div class="lds-dual-ring"></div>
        </div>
        <div class="cm sh"></div>
      </div>
    </div>
  </div>

<?php wp_footer(); ?>

</body>
</html>
