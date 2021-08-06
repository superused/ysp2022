            <div id="other-contest" class="site-section mx-auto pb-0">
              <h4 class="heading-bar color-cyan font-weight-bold mb-2" data-aos="fade-up" data-aos-delay="100"><span class="pr-3">その他コンテスト</span></h4>
              <div class="row text-center" data-aos="fade-up" data-aos-delay="100">
<?php if (!isset($viewMovie) || $viewMovie): ?>
                <div class="col-12 col-md-6 px-md-0">
                  <div class="mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="other-balloon balloon bottom border-cyan">ムービーコンテストの結果を見る</div>
                  </div>
                  <div class="m-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member text-center image col-12 p-md-0">
                      <a href="<?= MOVIE_CONTEST_URL; ?>"><img src="<?= MOVIE_TITLE_IMG; ?>" alt="MOVIEコンテスト" class="img-fluid"></a>
                    </div>
                  </div>
                </div>
<?php endif; ?>
<?php if (!isset($viewPhoto) || $viewPhoto): ?>
                <div class="col-12 col-md-6 px-md-0">
                  <div class="mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="other-balloon balloon bottom border-cyan"><?= CONTEST_ENDED ? 'フォトコンテストの結果を見る' : 'フォトに投票する'; ?></div>
                  </div>
                  <div class="m-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member text-center image col-12 p-md-0">
                      <a href="<?= PHOTO_CONTEST_URL; ?>"><img src="<?= PHOTO_TITLE_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid"></a>
                    </div>
                  </div>
                </div>
<?php endif; ?>
<?php if (!isset($viewSenryu) || $viewSenryu): ?>
                <div class="col-12 col-md-6 px-md-0">
                  <div class="mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="other-balloon balloon bottom border-cyan"><?= CONTEST_ENDED ? '川柳コンテストの結果を見る' : '川柳に投票する'; ?></div>
                  </div>
                  <div class="m-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member text-center image col-12 p-md-0">
                      <a href="<?= SENRYU_CONTEST_URL; ?>"><img src="<?= SENRYU_TITLE_IMG; ?>" alt="川柳コンテスト" class="img-fluid"></a>
                    </div>
                  </div>
                </div>
<?php endif; ?>
              </div>
            </div>
