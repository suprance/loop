<?php /* Template Name: Contact us */ ?>
<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php include(locate_template('template-parts/page-templates/page-banners/small-banner.php')); ?>
      <div class="main-contact-us">
        <div class="container">
          <div class="row">

            <div class="col-12 col-sm-12 col-md-8">
              <div class="contact-holder">
                  <?php _e(do_shortcode( '[contact-form-7 id="25" title="Contact form 1"]' )); ?>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4">
              <div class="content-holder">
                <div class="title-holder">
                  <h2>GET IN TOUCH</h2>
                </div>
                  <p>EMAIL: inquiry@loop-tech.co<br/>
                  TELEPHONE: 123-1234</p>
                <div class="social-media-holder">
                  <div class="title-holder">
                    <h2>OUR SOCIAL MEDIA</h2>
                  </div>
                  <div class="social-media-container">
                    <div class="media-holder">
                      <a href="#" target="_blank"><div class="fb"><i class="fab fa-facebook-f" aria-hidden="true"></i></div></a>
                      <a href="#" target="_blank"><div class="twit"><i class="fab fa-twitter" aria-hidden="true"></i></div></a>
                      <a href="#" target="_blank"><div class="ints"><i class="fab fa-instagram" aria-hidden="true"></i></div></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>
  </div>

<?php
get_footer();
