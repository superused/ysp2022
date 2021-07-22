<?php get_header(); ?>
<?php
// $datas = [['photo' => '', 'episode' => '', 'name' => '', 'age' => '', 'gender' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('photo'));
$photo = $util->getContestDatas('photo');
$datas = array_map(function($s) { return $s['polla_datas']; }, $photo);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= PHOTO_TITLE_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-auto">
            <h4 class="font-weight-bold text-center ml-3 mr-3">あなたの投票で優勝が決まる！<br>プレゼントが当たる！<br>あなたが選ぶ○○川柳大賞！</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="site-section" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left ml-3 mr-3">「地域の魅力」を感じるひとコマをテーマに何月何日まで募集をしました。応募された作品のなかから選抜されたものを掲載しています。素晴らしい作品をぜひ御覧ください。サムネイルをクリックすると作品の情報をご覧いただけます。（エピソードはクリックして確認）<br>あなたが素敵だと思う作品に投票してみてください。投票期間は○月○日までです。</p>
                </div>
              </div>
            </div>

            <div class="site-section beige py-3" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12">
                    <div class="rem1-3 font-weight-bold mt-3">投票方法</div>
                    <div class="contents-border short mb-2"></div>
                    <div class="text-left mx-auto voting_method">１．気に入った作品すべてに投票できます！<br>２．投票期間中は毎日１回投票できます！</div>
                    <div class="rem1-3 font-weight-bold mt-3">投票期間</div>
                    <div class="contents-border short mb-2"></div>
                    <p>2021年8月8日まで</p>
                    <div class="rem1-3 font-weight-bold mt-3">結果発表</div>
                    <div class="contents-border short mb-2"></div>
                    <p>2021年8月9日</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold mb-2">応募作品</h4>
                    <div class="contents-border short mt-1 mb-1"></div>
                  </div>
<?php foreach ($datas as $key => $data): ?>
                  <div class="col-12 col-lg-6 col-xl-4 p-2" data-type="content-block" data-aos="fade-up" data-aos-delay="100">
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
                                <span class="rem0_8 text-right font-weight-bold m-0 p-0">得票数<span class="vote_num oswald rem1 text-cyan ml-2 mr-1"><?= $photo[$key]['polla_votes']; ?></span>票</span>
                                <button class="vote mx-auto m-0 p-0 w-100 text-nowrap" ontouchstart="" data-vote="<?= $photo[$key]['polla_qid']; ?>">投票</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="photo_episode small pl-2 pr-2 pb-2"><?= nl2br(esc_html($data['episode'])); ?></div>
                    </div>
                  </div>
<?php endforeach; ?>
                  <div class="text-center col-12 mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div href="#" class="arrow down circle"></div>
                  </div>
                  <div class="text-center col-12" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-left mt-6">投票結果は8月7日に掲載されます。</p>
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

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
      <div class="modal-dialog text-white text-center" role="document">
        <h4 class="photo_title font-weight-bold mb-3"></h4>
        <div class="m-0 mb-4">
          <img src="" class="photo_image w-100">
        </div>
        <div class="text-left mb-1 w-100"><span class="mr-3">ペンネーム</span><span class="photo_name"></span></div>
        <div class="photo_episode text-left mb-3 w-100"></div>
        <div class="col-12 modal-content bg-transparent border-0">
          <button class="vote mx-auto m-1 pt-2 pb-2 pl-4 pr-4 text-nowrap" data-vote="" ontouchstart="">投票</button>
        </div>
      </div>
    </div>
    <div id="tohyo" class="d-none">
      <?php the_content(); ?>
    </div>
<?php get_footer(); ?>
