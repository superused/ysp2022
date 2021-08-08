<?php get_header(); ?>
<?php if (CONTEST_RESULT): ?>
<?php
$photo = $util->getContestDatasSort('photo');
$datas = array_map(function($s) { return $s['polla_datas']; }, $photo);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="slide-show">
            <img src="<?= get_template_directory_uri(); ?>/images/sidebar/photo_bg1.jpg" class="img-fluid slide-image">
            <img src="<?= get_template_directory_uri(); ?>/images/sidebar/photo_bg2.jpg" class="img-fluid slide-image">
            <img src="<?= get_template_directory_uri(); ?>/images/sidebar/photo_bg3.jpg" class="img-fluid slide-image">
            <img src="<?= PHOTO_RESULT_IMG; ?>" alt="Image" class="img-fluid fix-image">
          </div>
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
                      <h1 class="font-weight-bold text-cyan text-center small ml-3 mr-3">フォトコンテスト！<br>総合グランプリ発表！</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left mx-3">「地域の魅力」を感じるひとコマをテーマに7月4日まで募集しました。そして応募された作品のなかから、皆さんの投票でいよいよ最優秀賞が決定しました！<br>それでは、結果発表です！</p>
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
                      <div class="mb-3">
                        <img src="<?= $data['photo']; ?>" class="photo_image img-fluid">
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
                      <div class="mb-3">
                        <img src="<?= $data['photo']; ?>" class="photo_image img-fluid">
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
                        <div class="mb-3">
                          <img src="<?= $data['photo']; ?>" class="img-fluid photo_image">
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
            <div class="site-section py-5 text-center mx-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="font-weight-bold rem1-5">11位～70位</div>
              <p class="contents-border mb-4"></p>
              <a href="<?= PHOTO_RESULT_LIST_URL; ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">作品を見る</button></a>
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
<?php else: ?>
<?php
// $datas = [['photo' => '', 'episode' => '', 'name' => '', 'age' => '', 'gender' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('photo'));

$photo = $util->getContestDatas('photo');
if (CONTEST_LAST) {
  $photo = $util->staticVoteNumPhoto($photo);
}
$datas = array_map(function($s) { return $s['polla_datas']; }, $photo);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= PHOTO_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid w-100 h-100">
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
<?php if (CONTEST_ENDED): ?>
                    <h2 class="font-weight-bold text-center small text-cyan mb-3">※投票は受付終了<br>結果は18時公開予定</h2>
<?php endif; ?>
                    <h1 class="font-weight-bold text-center mx-3 small">あなたの投票で優勝が決まる！<br>『私の推し町』フォトコンテスト！</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left mx-3">「地域の魅力」を感じるひとコマをテーマに7月4日まで募集しました。応募があった全194作品の中から選ばれた10作品を掲載しています。<br><br>あなたが素敵だと思う写真に、ぜひ投票してみてください！投票結果で順位が決まります！<br><br>（現在表示されている投票数は8月7日時点のものです。8月8日の投票数は表示されず、8月9日18時に最終結果を発表します。）</p>
                </div>
              </div>
            </div>

<?php include 'parts/contest-voting-method.php'; ?>

            <div class="site-section">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold mb-2">応募作品</h4>
                    <div class="contents-border short mt-1 mb-1"></div>
                  </div>
<?php foreach ($datas as $key => $data): ?>
                  <div class="col-12 col-lg-6 p-2" data-type="content-block" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-frame square w-100 p-0 mb-2 mr-2">
                      <div class="team-member m-0">
                        <a href="#" data-toggle="modal" data-target="#modal" ontouchstart=""><img src="<?= $data['photo'];?>" class="photo_image w-100"></a>
                      </div>
                      <div class="row px-2">
                        <div class="col-8 col-xl-7 pt-2 pr-0">
                          <h6 class="photo_title"><?=$data['title']; ?></h6>
                          <p class="photo_name text-secondary mb-1"><?=$data['name']; ?></p>
                        </div>
                        <div class="photo_button col-4 col-xl-5 row w-100 p-0 text-right">
                          <div class="row w-100 m-0">
                            <div class="col-12 p-0">
                              <div class="ml-1 text-center mx-auto">
                                <span class="rem0-8 text-right font-weight-bold m-0 p-0">得票数<span class="vote_num oswald rem1 text-cyan ml-2 mr-1"><?= $photo[$key]['polla_votes']; ?></span>票</span>
<?php if (CONTEST_ENDED): ?>
                                <button class="vote mx-auto m-0 p-0 w-100 text-nowrap" ontouchstart="" disabled>投票</button>
<?php else: ?>
                                <button class="vote mx-auto m-0 p-0 w-100 text-nowrap" ontouchstart="" data-vote="<?= $photo[$key]['polla_qid']; ?>">投票</button>
<?php endif; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="photo_episode small pl-2 pr-2 mb-2"><?= nl2br(esc_html($data['episode'])); ?></div>
                      <div style="height:3px;"></div>
                    </div>
                  </div>
<?php endforeach; ?>
                  <div class="text-center col-12 mt-5" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-left mt-6">投票結果は8月9日に発表します。</p>
                  </div>
                </div>
              </div>
            </div>

<?php include 'parts/contest-prize.php'; ?>

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
        <div class="col-12 modal-content bg-transparent border-0">
<?php if (CONTEST_ENDED): ?>
          <button class="vote mx-auto m-1 pt-2 pb-2 pl-4 pr-4 text-nowrap" disabled>投票</button>
<?php else: ?>
          <button class="vote mx-auto m-1 pt-2 pb-2 pl-4 pr-4 text-nowrap" data-vote="" ontouchstart="">投票</button>
<?php endif; ?>
        </div>
      </div>
    </div>
<?php if (!CONTEST_ENDED): ?>
    <div id="tohyo" class="d-none">
      <?php the_content(); ?>
    </div>
<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>
