<?php get_header(); ?>
<?php
$photo = $util->getContestDatasSort('photo');
$datas = array_map(function($s) { return $s['polla_datas']; }, $photo);
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
<?php $count = 0; ?>
<?php foreach ($datas as $key => $data): ?>
<?php     $count++; ?>
<?php     if ($count == 1): ?>
            <div class="photo_button site-section bg-gold p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100" data-type="content-block">
              <div class="container">
                <div class="row">
                  <div class="trophy-box row text-center mx-auto mt-5 mb-2 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_g.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">最優秀賞</div>
                      <div class="font-weight-bold">得票数<span class="text-cyan rem1-3 ml-1"><?= $photo[$key]['polla_votes']; ?></span>票</div>
                    </div>
                  </div>
                  <div class="col-12 text-center mx-auto">
                    <div class="photo_title font-weight-bold px-0 rem1-2"><?= $data['title']; ?></div>
                  </div>
                  <div class="px-3 pb-4 pt-2 mx-auto">
                    <div class="width-fixmax">
                      <div class="team-member mb-3">
                        <a href="#" data-toggle="modal" data-target="#modal" ontouchstart=""><img src="<?= $data['photo']; ?>" class="photo_image img-fluid"></a>
                      </div>
                      <div class="photo_episode"><?= nl2br(esc_html($data['episode'])); ?></div>
                      <div class="photo_name mt-2"><?= $data['name']; ?> さん</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     elseif ($count == 2): ?>
            <div class="photo_button site-section bg-silver p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100" data-type="content-block">
              <div class="container">
                <div class="row">
                  <div class="trophy-box row text-center mx-auto mt-5 mb-2 align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/images/trophy_s.png" class="mr-3">
                    <div class="text">
                      <div class="font-weight-bold rem1-5">優秀賞</div>
                      <div class="font-weight-bold">得票数<span class="text-cyan rem1-3 ml-1"><?= $photo[$key]['polla_votes']; ?></span>票</div>
                    </div>
                  </div>
                  <div class="col-12 text-center mx-auto">
                  <div class="photo_title font-weight-bold px-0 rem1-2"><?= $data['title']; ?></div>
                  </div>
                  <div class="px-3 pb-4 pt-2 mx-auto">
                    <div class="width-fixmax">
                      <div class="team-member mb-3">
                        <a href="#" data-toggle="modal" data-target="#modal" ontouchstart=""><img src="<?= $data['photo']; ?>" class="photo_image img-fluid"></a>
                      </div>
                      <div class="photo_episode"><?= nl2br(esc_html($data['episode'])); ?></div>
                      <div class="photo_name mt-2"><?= $data['name']; ?> さん</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     else: ?>
<?php         if ($count == 3): ?>
            <div class="photo_button site-section bg-bronze p-0 mb-4 project-frame" data-aos="fade-up" data-aos-delay="100">
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
<?php         endif; ?>
                  <div class="col-12 col-lg-6 p-0" data-type="content-block">
                    <div class="m-3 mt-4 mt-lg-3">
                      <div class="photo_title float-left font-weight-bold px-0 rem1-2"><?= $data['title']; ?></div>
                      <div class="float-right font-weight-bold small">得票数<span class="text-cyan rem1-3 ml-1"><?= $photo[$key]['polla_votes']; ?></span>票</div>
                      <div class="width-fixmax">
                        <div class="team-member mb-3">
                          <a href="#" data-toggle="modal" data-target="#modal" ontouchstart=""><img src="<?= $data['photo']; ?>" class="img-fluid photo_image"></a>
                        </div>
                        <div class="photo_episode"><?= nl2br(esc_html($data['episode'])); ?></div>
                        <div class="photo_name mt-2"><?= $data['name']; ?> さん</div>
                      </div>
                    </div>
                  </div>
<?php         if ($count == count($datas)): ?>
                </div>
              </div>
            </div>
<?php         endif; ?>
<?php     endif; ?>
<?php endforeach; ?>
<?php $viewPhoto = false; ?>
<?php include 'parts/other-contest.php'; ?>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>

    <div id="fixed-menu-move"></div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
      <div class="modal-dialog text-white text-center" role="document">
        <h4 class="photo_title font-weight-bold mb-3"></h4>
        <div class="m-0 mb-4">
          <img src="" class="photo_image w-100">
        </div>
        <div class="text-left mb-1 w-100"><span class="mr-3">ペンネーム</span><span class="photo_name"></span></div>
        <div class="photo_episode text-left mb-3 w-100"></div>
      </div>
    </div>
<?php get_footer(); ?>
