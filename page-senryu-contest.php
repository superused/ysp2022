<?php get_header(); ?>
<?php
// $datas = [['senryu' => '', 'episode' => '', 'name' => '', 'personal' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('senryu'));
$senryu = $util->getContestDatas('senryu');
$datas = array_map(function($s) { return $s['polla_datas']; }, $senryu);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= SENRYU_TITLE_IMG; ?>" alt="川柳コンテスト" class="img-fluid w-100 h-100">
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
            <div class="mx-auto">
            <h4 class="font-weight-bold text-left text-md-center ml-3 mr-3">あなたの投票で優勝が決まる！<br>プレゼントが当たる！<br>あなたが選ぶ○○川柳大賞！</h4>
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
                  <p class="text-left ml-3 mr-3">「コロナ禍で気づいたこと」をテーマに五・七・五の川柳を募集しました！改めて気づいた家族や大切な人との繋がり、実際に経験したことなど、素敵な作品がたくさん寄せられました！<br><br>あなたの気に入った川柳に、ぜひ投票してみてください！</p>
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
                  <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold mb-2">応募作品</h4>
                    <div class="contents-border short mt-1 mb-1"></div>
                  </div>
<?php foreach ($datas as $key => $data): ?>
                  <div class="kakejiku col-6 col-lg-4 col-xl-3 mt-4" data-type="content-block" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="text-center font-weight-bold mb-0"><span class="small">投票数</span><span class="vote_num text-cyan ml-2 mr-1"><?= $senryu[$key]['polla_votes']; ?></span><span class="small">票</span></h5>
                    <div class="kakejiku_outer m-0 mt-0 mb-3 mx-auto detail c-pointer" data-toggle="modal" data-target="#modal">
                      <div class="kakejiku_inner">
                        <?= str_replace('|', '<br>',$data['senryu']); ?>
                      </div>
                    </div>
                    <div class="kakejiku_episode d-none"><?= nl2br(esc_html($data['episode'])); ?></div>
                    <div class="kakejiku_name col-10 mx-auto mt-3 mb-2 text-white font-weight-bold d-none">
                      <?= $data['name'] . '(' . $data['personal'] . ')'; ?>
                    </div>
                    <div class="row kakejiku_button mx-auto text-center">
                      <div class="col-6 pl-1 pr-1">
                        <button class="detail mx-auto w-100 text-nowrap c-pointer" data-toggle="modal" data-target="#modal" ontouchstart="">詳細</button>
                      </div>
                      <div class="col-6 pl-1 pr-1">
                        <button class="vote mx-auto w-100 text-nowrap c-pointer" data-vote="<?= $senryu[$key]['polla_qid']; ?>" ontouchstart="">投票</button>
                      </div>
                    </div>
                  </div>
<?php endforeach; ?>
                  <div class="text-center col-12 mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div href="#" class="arrow down circle"></div>
                  </div>
                  <div class="text-center col-12" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-left mt-6">投票結果は8月9日に掲載されます。</p>
                  </div>
                </div>
              </div>
            </div>
<?php include 'parts/contest-prize.php'; ?>

<?php $viewSenryu = false; ?>
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
          <button class="vote mx-auto pl-4 pr-4 c-pointer" data-vote="" ontouchstart="">投票</button>
        </div>
      </div>
    </div>
    <div id="tohyo" class="d-none">
      <?php the_content(); ?>
    </div>
<?php get_footer(); ?>