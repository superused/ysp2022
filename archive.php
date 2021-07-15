<?php get_header(); ?>

    <div class=""></div>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="site-margin-top-section col-12 col-lg-8 bg-beige">
<?php $title = 'NEWS'; ?>
<?php include 'parts/title-block.php'; ?>
<?php include 'parts/news-slider.php'; ?>
            <div class="site-section pt-4">
              <div class="container">
                <div class="row">
<?php if (have_posts()): ?>
<?php     while (have_posts()): the_post(); ?>
                  <div class="col-12 col-md-6 p-0">
                    <div class="project-frame simple" data-aos="fade-up" data-aos-delay="100">
                      <div class="p-0 mb-3">
                        <a href="<?= get_permalink(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-0">
                        <div class="site-section-heading w-border mx-auto col-12 p-0">
                          <h5 class="font-weight-bold mb-2"><?php the_title(); ?></h5>
                          <div class="pb-2 mb-2 text-gray-menu"><?php the_excerpt(); ?></div>
                          <div class="news-date-ubar text-right text-gray-menu pr-2 m-0"><?php the_time('Y.m.d'); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
<?php     endwhile; ?>
<?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
