<?php get_header(); ?>
    <div class="site-section bg-beige top-image pb-0">
      <div class="container">
        <div class="row">
         <div class="news-image col-12 w-100 p-0 m-0 text-center" data-aos="fade-up" data-aos-delay="100">
<?php the_post_thumbnail(); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="site-margin-top-section col-12 col-lg-8 bg-beige p-3">
            <div class="site-section p-0 m-0">
              <div class="container p-0">
                <div class="row m-0">
                  <p class="text-gray-menu font-weight-bold mb-2"><?php the_time('Y.m.d'); ?></p>
                  <div class="heading-bar w-100 mb-3"></div>
                  <div class="w-100">
                    <h6 class="text-black font-weight-bold mb-3"><?php the_title(); ?></h6>
                  </div>
                  <div class="text-gray-menu"><?php the_content(); ?></div>
                </div>
              </div>
            </div>
            <div class="site-section p-0 my-4">
              <div class="container p-0 text-center">
<?php if (get_previous_post()): ?>
<?php     previous_post_link('%link', '&lt; Prev'); ?>
<?php else: ?>
                 <span>&lt; Prev</span>
<?php endif;?>
                 <a href="<?= HOME_URL; ?>" class="sns-icon mx-3"><img src="<?= get_template_directory_uri(); ?>/images/icon_home.png"></a>
<?php if (get_next_post()): ?>
<?php     next_post_link('%link', 'Next &gt;');?>
<?php else: ?>
                 <span>Next &gt;</span>
<?php endif;?>
              </div>
            </div>
            <h4 class="heading-bar color-cyan font-weight-bold mb-4"><span class="pr-3">関連記事</span></h4>
            <div class="row px-3">
              <div class="col-12 col-md-6 p-0">
                <div class="project-frame simple" data-aos="fade-up" data-aos-delay="100">
                  <div class="p-0 mb-3">
                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="p-0">
                    <div class="site-section-heading w-border mx-auto col-12 p-0">
                      <h5 class="font-weight-bold mb-2">タイトルタイトル</h5>
                      <div class="pb-2 mb-2 text-gray-menu">
                        テキスト入ります。テキスト入ります。
                      </div>
                      <div class="news-date-ubar text-right text-gray-menu pr-2 m-0">2021.07.10</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php include 'parts/news-slider.php'; ?>
          </div>
          <div class="col-12 col-lg-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
