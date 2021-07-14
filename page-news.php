<?php get_header(); ?>

    <div class=""></div>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 bg-beige">
<?php $title = 'NEWS'; ?>
<?php include 'parts/title-block.php'; ?>
<?php include 'parts/news-slider.php'; ?>
            <div class="site-section">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-6 p-0">
                    <div class="project-frame square m-2" data-aos="fade-up" data-aos-delay="100">
                      <div class="p-0 mb-3">
                        <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-0">
                        <div class="site-section-heading w-border mx-auto col-12 p-0">
                          <h4 class="font-weight-bold mb-2">タイトルタイトル</h4>
                          <div class="pb-2 mb-2 text-gray-menu">
                            テキスト入ります。テキスト入ります。
                          </div>
                          <div class="news-date-ubar text-right text-gray-menu pr-2 m-0">2021.07.10</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 p-0">
                    <div class="project-frame square m-2" data-aos="fade-up" data-aos-delay="100">
                      <div class="p-0 mb-3">
                        <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-0">
                        <div class="site-section-heading w-border mx-auto col-12 p-0">
                          <h4 class="font-weight-bold mb-2">タイトルタイトル</h4>
                          <div class="pb-2 mb-2 text-gray-menu">
                            テキスト入ります。テキスト入ります。
                          </div>
                          <div class="news-date-ubar text-right text-gray-menu pr-2 m-0">2021.07.10</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 p-0">
                    <div class="project-frame square m-2" data-aos="fade-up" data-aos-delay="100">
                      <div class="p-0 mb-3">
                        <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-0">
                        <div class="site-section-heading w-border mx-auto col-12 p-0">
                          <h4 class="font-weight-bold mb-2">タイトルタイトル</h4>
                          <div class="pb-2 mb-2 text-gray-menu">
                            テキスト入ります。テキスト入ります。
                          </div>
                          <div class="news-date-ubar text-right text-gray-menu pr-2 m-0">2021.07.10</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 p-0">
                    <div class="project-frame square m-2" data-aos="fade-up" data-aos-delay="100">
                      <div class="p-0 mb-3">
                        <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-0">
                        <div class="site-section-heading w-border mx-auto col-12 p-0">
                          <h4 class="font-weight-bold mb-2">タイトルタイトル</h4>
                          <div class="pb-2 mb-2 text-gray-menu">
                            テキスト入ります。テキスト入ります。
                          </div>
                          <div class="news-date-ubar text-right text-gray-menu pr-2 m-0">2021.07.10</div>
                        </div>
                      </div>
                    </div>
                  </div>
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
    <div class="site-section footer-banner zindex-tooltip m-0 p-0">
      <div class="container-fluid">
        <div class="footer-banner-contents text-center p-3">
          <img src="<?= get_template_directory_uri(); ?>/images/logo.jpg">
        </div>
        <button class="close-btn" ontouchstart=""></button>
      </div>
    </div>
<?php get_footer(); ?>
