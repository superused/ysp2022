<?php get_header(); ?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= LIVE_TITLE_IMG; ?>" alt="Image" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>

    <div class="site-section pt-4 pb-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="site-section-heading w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
            <div>
              <h3 class="color-cyan font-weight-bold mb-2">LIVE スケジュール</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'parts/live-date-button.php'; ?>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 p-0">
            <div class="site-section pb-0">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="mx-auto">
                      <h3 class="font-weight-bold text-center ml-3 mr-3" data-date="20210807"><span class="mr-2 font-family-none">8/7</span><span class="small font-family-none font-weight-bold">SAT</span></h3>
                      <h3 class="font-weight-bold text-center ml-3 mr-3" data-date="20210808"><span class="mr-2 font-family-none">8/8</span><span class="small font-family-none font-weight-bold">SUN</span></h3>
                      <h3 class="font-weight-bold text-center ml-3 mr-3" data-date="20210809"><span class="mr-2 font-family-none">8/9</span><span class="small font-family-none font-weight-bold">MON</span></h3>
                      <div class="contents-border short mt-1 mb-1"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section live-top-timetable w-border mx-auto px-4" data-aos="fade-up" data-aos-delay="100">
              <h4 class="heading-bar color-cyan font-weight-bold mb-2"><span class="pr-3">LIVEプログラム</span></h4>
              <div class="mt-4"></div>
<?php include 'parts/timetable0807.php'; ?>
<?php include 'parts/timetable0808.php'; ?>
<?php include 'parts/timetable0809.php'; ?>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="site-section other-live-container pb-0">
              <div>
                <div class="sidebar-title heading-bar color-cyan mb-2" data-aos="fade-up" data-aos-delay="100"><span class="pr-3">注目！LIVE配信</span></div>
              </div>
<?php include 'parts/live-pickup.php'; ?>
            </div>
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>

<?php include 'parts/live-date-button.php'; ?>
<?php get_footer(); ?>
