            <div id="other-contest" class="site-section mx-auto pb-0">
              <h4 class="heading-bar color-cyan font-weight-bold mb-2" data-aos="fade-up" data-aos-delay="100"><span class="pr-3">その他コンテスト</span></h4>
<?php if (!isset($viewMovie) || $viewMovie): ?>
              <div class="row text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="balloon bottom text-cyan border-cyan rounded mx-auto px-3 mb-2 mt-4 rem1-5">ムービーコンテストの結果を見る</div>
              </div>
              <div data-aos="fade-up" data-aos-delay="100">
                <div class="text-center image col-12 mt-3 mb-3">
                  <a href="<?= MOVIE_CONTEST_URL; ?>" disabled><div class="gray-out"><img src="<?= MOVIE_TITLE_IMG; ?>" alt="MOVIEコンテスト" class="img-fluid"></div></a>
                </div>
              </div>
<?php endif; ?>
<?php if (!isset($viewPhoto) || $viewPhoto): ?>
              <div class="row text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="balloon bottom text-cyan border-cyan rounded mx-auto px-5 mb-2 mt-4 rem1-5">フォトに投票する</div>
              </div>
              <div data-aos="fade-up" data-aos-delay="100">
                <div class="team-member text-center image col-12 mt-3 mb-3">
                  <a href="<?= PHOTO_CONTEST_URL; ?>"><img src="<?= PHOTO_TITLE_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid"></a>
                </div>
              </div>
<?php endif; ?>
<?php if (!isset($viewSenryu) || $viewSenryu): ?>
              <div class="row text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="balloon bottom text-cyan border-cyan rounded mx-auto px-5 mb-2 mt-4 rem1-5">川柳に投票する</div>
              </div>
              <div data-aos="fade-up" data-aos-delay="100">
                <div class="team-member text-center image col-12 mt-3 mb-3">
                  <a href="<?= SENRYU_CONTEST_URL; ?>"><img src="<?= SENRYU_TITLE_IMG; ?>" alt="川柳コンテスト" class="img-fluid"></a>
                </div>
              </div>
<?php endif; ?>
            </div>
