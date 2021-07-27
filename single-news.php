<?php get_header(); ?>
    <div></div>
    <div class="site-section pt-0 bg-beige">
      <div class="container p-0">
        <div class="row justify-content-center mt-0 mx-0">
          <div class="site-section col-12 col-md-8 pt-0 important">


            <div class="container d-none d-md-block" data-aos="fade-up" data-aos-delay="100">
              <div class="contents-border m-0 mt-md-5 w-100"></div>
              <p class="text-gray-menu text-right font-weight-bold text-break my-2 rem1-1"><?php the_time('Y.m.d'); ?></p>
            </div>


            <div class="news-image col-12 w-100 p-0 pt-0 pt-md-3 px-md-3 m-0 mb-4 text-center mx-auto" data-aos="fade-up" data-aos-delay="100">
              <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?: NO_IMAGE_URL ?>">
            </div>
            <div class="site-section py-0 mx-3" data-aos="fade-up" data-aos-delay="100">
              <div class="container p-0">
                <div class="row m-0">
                  <p class="text-gray-menu font-weight-bold text-break mb-2 d-md-none"><?php the_time('Y.m.d'); ?></p>
                  <div class="heading-bar w-100 mb-3 d-md-none"></div>
                </div>
              </div>
            </div>
            <div class="news-title-header" data-aos="fade-up" data-aos-delay="100">
              <h1 class="text-black font-weight-bold text-break mb-3 rem1-3"><?php the_title(); ?></h1>
            </div>
            <div class="site-section py-0 mx-3" data-aos="fade-up" data-aos-delay="100">
              <div class="container p-0">
                <div class="row m-0">
                  <div class="text-gray-menu text-break w-100"><?php the_content(); ?></div>
                </div>
              </div>
            </div>
            <div class="site-section p-0 my-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container p-0 text-center">
<?php if (get_previous_post()): ?>
<?php     previous_post_link('%link', '&lt; Prev'); ?>
<?php else: ?>
                 <span>&lt; Prev</span>
<?php endif;?>
                 <a href="<?= NEWS_URL; ?>" class="sns-icon mx-3"><img src="<?= get_template_directory_uri(); ?>/images/icon_home.png"></a>
<?php if (get_next_post()): ?>
<?php     next_post_link('%link', 'Next &gt;');?>
<?php else: ?>
                 <span>Next &gt;</span>
<?php endif;?>
              </div>
            </div>
            <div class="site-section p-3 pt-5">
              <h4 class="heading-bar color-cyan font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="100"><span class="pr-3">関連記事</span></h4>
              <div class="row px-3">



<?php
//現在のページのカテゴリを取得
$categories = get_the_category($post->ID);
$the_query = new WP_Query([
  'post_type' => get_post_type(),
  'posts_per_page' => 2,
  'post__not_in' => [$post->ID],
  'orderby' => 'rand',
]);
if ($the_query->have_posts()) :
 while ($the_query->have_posts()) : $the_query->the_post();
?>
                <div class="col-12 col-lg-6 p-0">
                  <div class="project-frame simple" data-aos="fade-up" data-aos-delay="100" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-0 mb-3 text-center">
                        <a href="<?= get_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?: NO_IMAGE_URL ?>" alt="Image" class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="p-0">
                      <div class="site-section-heading w-border mx-auto col-12 p-0">
                        <h5 class="font-weight-bold mb-2 text-break"><?php the_title(); ?></h5>
                        <div class="pb-2 mb-2 text-gray-menu text-break"><?php the_excerpt(); ?></div>
                        <div class="news-date-ubar text-right text-gray-menu text-break pr-2 m-0"><?php the_time('Y.m.d'); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
<?php endwhile;
endif; ?>
              </div>
            </div>
<?php $newsShort = true; ?>
<?php include 'parts/news-slider.php'; ?>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
