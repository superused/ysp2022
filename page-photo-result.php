<?php get_header(); ?>
<?php
// $datas = [['senryu' => '', 'episode' => '', 'name' => '', 'age' => '', 'gender' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('senryu'));
$senryu = $util->getContestDatas('senryu');
$datas = array_map(function($s) { return $s['polla_datas']; }, $senryu);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="site-section pb-0">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="mx-auto">
                      <h4 class="font-weight-bold text-cyan text-center ml-3 mr-3">フォトコンテスト！<br>総合グランプリ発表！</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left ml-3 mr-3">「地域の魅力」を感じるひとコマをテーマに何月何日まで募集をしました。応募された作品のなかから選抜されたものを掲載しています。素晴らしい作品をぜひ御覧ください。サムネイルをクリックすると作品の情報をご覧いただけます。（エピソードはクリックして確認）<br>それでは、結果発表です！</p>
                </div>
              </div>
            </div>
            <div class="site-section bg-gold p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="trophy-box row text-center mx-auto mt-5 mb-2 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_g.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">最優秀賞</div>
                      <div class="font-weight-bold">得票数<span class="text-cyan rem1-3 ml-1">123</span>票</div>
                    </div>
                  </div>
                  <div class="col-12 text-center mx-auto">
                    <div class="font-weight-bold px-0 rem1-2">「タイトル」</div>
                  </div>
                  <div class="px-3 pb-4 pt-2 mx-auto">
                    <div class="width-fixmax">
                      <div class="team-member mb-3">
                        <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                      </div>
                      <div class="episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section bg-silver p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="trophy-box row text-center mx-auto mt-5 mb-2 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_s.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">優秀賞</div>
                      <div class="font-weight-bold">得票数<span class="text-cyan rem1-3 ml-1">123</span>票</div>
                    </div>
                  </div>
                  <div class="col-12 text-center mx-auto">
                    <div class="font-weight-bold px-0 rem1-2">「タイトル」</div>
                  </div>
                  <div class="px-3 pb-4 pt-2 mx-auto">
                    <div class="width-fixmax">
                      <div class="team-member mb-3">
                        <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                      </div>
                      <div class="episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section bg-bronze p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 justify-content-center trophy-box row text-center mx-auto mt-5 mb-4 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_b.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">佳作</div>
                    </div>
                  </div>
                </div>
                <div class="row">
<?php for ($i = 0; $i < 8; $i++): ?>
                  <div class="col-12 col-lg-6 p-0">
                    <div class="m-3 mt-4 mt-lg-3">
                      <div class="float-left font-weight-bold px-0 rem1-2">「タイトル」</div>
                      <div class="float-right font-weight-bold small">得票数<span class="text-cyan rem1-3 ml-1">123</span>票</div>
                      <div class="width-fixmax">
                        <div class="team-member mb-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                        <div class="episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                        <div class="name mt-2">山田 花子 (30代 女性)</div>
                      </div>
                    </div>
                  </div>
<?php endfor; ?>
                </div>
              </div>
            </div>
<?php $viewPhoto = false; ?>
<?php include 'parts/other-contest.php'; ?>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="kakejiku_outer m-0 mt-4 mb-3 mx-auto">
          <div class="kakejiku_inner">
          </div>
        </div>
        <div class="kakejiku_episode col-10 mx-auto mt-4 mb-3 text-white font-weight-bold">
        </div>
        <div class="kakejiku_name col-10 mx-auto mt-3 mb-2 text-white font-weight-bold">
        </div>
        <input type="hidden" id="index" value="">
        <div class="mx-auto text-center modal-content bg-transparent border-0">
          <button class="vote mx-auto pl-4 pr-4 c-pointer" ontouchstart="">投票</button>
        </div>
      </div>
    </div>
    <div id="tohyo" class="d-none">
      <?php the_content(); ?>
    </div>
<?php get_footer(); ?>
