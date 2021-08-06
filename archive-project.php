<?php $util->getProjectImages('nagaoka'); ?>
<?php get_header(); ?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= PROJECT_IMG; ?>" alt="Image" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center w-border mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-auto">
              <h1 class="font-weight-bold text-center ml-3 mr-3 rem1-75">オンラインブース</h1>
              <div class="contents-border mt-1 mb-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8">
            <div class="site-section">
              <div class="container">
                <div class="row project-list">
<?php $datas = $util->getProjectDetail(); ?>
<?php
$the_query = new WP_Query([
  'post_type' => get_post_type(),
  'posts_per_page' => -1,
  'orderby' => 'post__in',
]);
?>
<?php if ($the_query->have_posts()): ?>
<?php   while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php     include 'parts/project-frame.php'; ?>
<?php   endwhile; ?>
<?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
<?php /*
    <div class="site-section footer-banner zindex-tooltip m-0 p-0">
      <div class="container-fluid">
        <div class="footer-banner-contents text-center p-3">
          <img src="<?= get_template_directory_uri(); ?>/images/logo.jpg">
        </div>
        <button class="close-btn" ontouchstart=""></button>
      </div>
    </div>
 */ ?>
<?php get_footer(); ?>
