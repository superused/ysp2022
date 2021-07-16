<?php get_header(); ?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= get_template_directory_uri(); ?>/images/photo_contest_full_pc.jpg" alt="Image" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center w-border mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-auto">
              <h4 class="font-weight-bold text-center ml-3 mr-3">オンラインブース</h4>
              <div class="contents-border mt-1 mb-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8">
            <div class="site-section">
              <div class="container">
<?php for ($i = 0; $i < 8; $i++): ?>
<?php include 'parts/project-frame.php'; ?>
<?php endfor; ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section footer-banner zindex-tooltip m-0 p-0">
      <div class="container-fluid">
        <div class="footer-banner-contents text-center p-3">
          <img src="<?= get_template_directory_uri(); ?>/images/logo.jpg">
        </div>
        <button class="close-btn" ontouchstart=""></button>
      </div>
    </div>
<?php get_footer(); ?>
