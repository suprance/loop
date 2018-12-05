<?php /* Template Name: About us */ ?>
<?php get_header(); ?>
<?//php $imageUrl = ($ilValue ? $ilValue['url'] : imgfolder('no-image.png')); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php include(locate_template('template-parts/page-templates/page-banners/small-banner.php')); ?>
      <div class="page-about-us">
        <div class="container">
          <div class="row">

            <div class="col-12 offset-md-1 col-md-10">
              <div class="content-holder">
                <div class="title-holder">
                  <h2>LOOP INVESTMENT SERVICES</h2>
                </div>
                <div class="description-holder">
                <?php
                  if (have_posts()) :
                   while (have_posts()) :
                    the_post();
                    the_content();
                   endwhile;
                  endif;
                ?>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="staff-container">
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Manuelito Hernandez</div>
                    <div class="position">CEO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image colored"></div>
            <div class="staff-content description">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="title">Our Team</div>
                    <div class="caption">Seamlessly aggregate total linkage info <br/> Dramatically visualize ubiquitous leadership.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Manuelito Hernandez</div>
                    <div class="position">CEO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Manuelito Hernandez</div>
                    <div class="position">CEO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman-1.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Joselito Ramirez</div>
                    <div class="position">COO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman-1.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Joselito Ramirez</div>
                    <div class="position">COO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman-1.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Joselito Ramirez</div>
                    <div class="position">COO</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="staff-holder">
            <div class="staff-image" style="background-image:url(/wp-content/uploads/2018/12/woman-1.png)"></div>
            <div class="staff-content">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="name">Joselito Ramirez</div>
                    <div class="position">COO</div>
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
