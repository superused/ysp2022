<?php get_header(); ?>
<?php if (CONTEST_RESULT): ?>
<?php
$senryu = $util->getContestDatasSort('senryu');
$datas = array_map(function($s) { return $s['polla_datas']; }, $senryu);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= SENRYU_RESULT_IMG; ?>" alt="Image" class="img-fluid w-100 h-100">
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
                      <h4 class="font-weight-bold text-cyan text-center ml-3 mr-3">つながり川柳コンテスト！<br>みんなで選んだ大賞発表！</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left mx-3">「コロナ禍で気づいたこと」をテーマに五・七・五の川柳を7月4日まで募集しました！改めて気づいた家族や大切な人との繋がり、実際に経験したことなど、素敵な作品がたくさん寄せられました！<br>そして、皆さんの投票でつながり川柳大賞が決定しました！<br>それでは結果発表です！</p>
                </div>
              </div>
            </div>
<?php $count = 0; ?>
<?php foreach ($datas as $key => $data): ?>
<?php     $count++; ?>
<?php     if ($count == 1): ?>
            <div class="result-winner-image w-75 text-center mx-auto" data-aos="fade-up" data-aos-delay="100">
              <img src="<?= get_template_directory_uri(); ?>/images/result_winner.png" alt="Image" class="img-fluid">
            </div>
            <div class="site-section result-winner senryu p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">最優秀賞</h3>
                    <div class="result-comment">～賞品～<br>ギフトカード（１万円分）<br>地域の特産カタログギフト</div>
                  </div>
                  <div class="senryu-result text-left mx-auto box-body bg-white">
                    <h6 class="number-of-votes w-auto mt-2 font-family-none" data-aos="fade-up" data-aos-delay="100"><span class="font-weight-bold text-cyan bg-yellow py-1 px-2"><span class="font-weight-bold small">得票数 </span><span><?= $senryu[$key]['polla_votes']; ?></span><span class="font-weight-bold small">票</span></span></h6>
                    <div class="row">
                      <h3 class="top"><?= str_replace('|', '<br>', $data['senryu']); ?></h3>
                      <div class="image-box top p-0 mx-auto ml-md-auto mr-md-0">
                        <img src="<?= !empty($data['image']) ? $data['image'] : NO_IMAGE_URL; ?>" class="img-fluid">
                      </div>
                      <div class="kakejiku-episode w-100"><?= $data['episode']; ?></div>
                      <div class="kakejiku-name mt-2"><?= $data['name'] . " (" . $data['personal'] . ")"; ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     elseif ($count == 2): ?>
            <div class="site-section result-winner senryu p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">優秀賞</h3>
                    <div class="result-comment">～賞品～<br>ギフトカード（５千円分）<br>Peace designer オリジナルフェイスタオル</div>
                  </div>
                  <div class="senryu-result text-left mx-auto box-body bg-white">
                    <h6 class="number-of-votes w-auto mt-2 font-family-none" data-aos="fade-up" data-aos-delay="100"><span class="font-weight-bold text-cyan bg-yellow py-1 px-2"><span class="font-weight-bold small">得票数 </span><span><?= $senryu[$key]['polla_votes']; ?></span><span class="font-weight-bold small">票</span></span></h6>
                    <div class="row">
                      <h3><?= str_replace('|', '<br>', $data['senryu']); ?></h3>
                      <div class="image-box p-0 ml-auto mr-0">
                        <img src="<?= !empty($data['image']) ? str_replace('.jpg', '-150x150.jpg', $data['image']) : NO_IMAGE_URL; ?>" class="img-fluid">
                      </div>
                      <div class="kakejiku-episode w-100"><?= $data['episode']; ?></div>
                      <div class="kakejiku-name mt-2"><?= $data['name'] . " (" . $data['personal'] . ")"; ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php     else: ?>
<?php         if ($count == 3): ?>
            <div class="site-section result-winner senryu p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">佳作</h3>
                    <div class="result-comment">～賞品～<br>ギフトカード（500円分）</div>
                  </div>
                  <div class="senryu-result text-left mx-auto box-body bg-white p-3">
<?php         endif; ?>
                    <h6 class="number-of-votes w-auto mt-2 font-family-none" data-aos="fade-up" data-aos-delay="100"><span class="font-weight-bold text-cyan bg-yellow py-1 px-2"><span class="font-weight-bold small">得票数 </span><span><?= $senryu[$key]['polla_votes']; ?></span><span class="font-weight-bold small">票</span></span></h6>
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                      <h3><?= str_replace('|', '<br>',$data['senryu']); ?></h3>
                      <div class="image-box p-0 ml-auto mr-0">
                        <img src="<?= !empty($data['image']) ? str_replace('.jpg', '-150x150.jpg', $data['image']) : NO_IMAGE_URL; ?>" class="img-fluid">
                      </div>
                      <div class="kakejiku-episode w-100"><?= $data['episode']; ?></div>
                      <div class="kakejiku-name mt-2"><?= $data['name'] . " (" . $data['personal'] . ")"; ?></div>
                    </div>
<?php         if ($count != count($datas)): ?>
                    <div class="contents-border w-100 border-cyan my-3"></div>
<?php         else: ?>
                  </div>
                </div>
              </div>
            </div>
<?php         endif; ?>
<?php     endif; ?>
<?php endforeach; ?>

            <div class="site-section result-winner senryu p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold font-family-none">11位～100位</h3>
                  </div>
                  <div class="text-center w-100 mx-auto box-body bg-white p-3">
                    <div class="row px-3">
                      <div class="w-100">ご覧になりたい方はこちらから</div>
                    </div>
                    <div class="text-center mt-3">
                      <a href="<?= SENRYU_RESULT_LIST_URL ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">作品を見る</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php $viewSenryu = false; ?>
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
// $datas = [['senryu' => '', 'episode' => '', 'name' => '', 'personal' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('senryu'));
$senryu = $util->getContestDatas('senryu');
if (CONTEST_LAST) {
  $senryu = $util->staticVoteNumSenryu($senryu);
}
$datas = array_map(function($s) { return $s['polla_datas']; }, $senryu);
?>
    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <img src="<?= SENRYU_IMG; ?>" alt="川柳コンテスト" class="img-fluid w-100 h-100">
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
                      <h2 class="font-weight-bold text-left text-md-center small text-cyan mb-3">※投票は受付終了<br>結果は18時公開予定</h2>
<?php endif; ?>
                      <h1 class="font-weight-bold text-left text-md-center small">あなたの投票で優勝が決まる！<br>あなたが選ぶつながり川柳大賞！</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section py-5" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                  </div>
                  <p class="text-left mx-3">「コロナ禍で気づいたこと」をテーマに五・七・五の川柳を募集しました！改めて気づいた家族や大切な人との繋がり、実際に経験したことなど、素敵な作品が800も寄せられました！<br><br>あなたの気に入った川柳に、ぜひ投票してみてください！投票結果で順位が決まります！<br><br>（現在表示されている投票数は8月7日時点のものです。8月8日の投票数は表示されず、8月9日18時に最終結果を発表します。）</p>
                </div>
              </div>
            </div>

<?php include 'parts/contest-voting-method.php'; ?>

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
<?php if (CONTEST_ENDED): ?>
                        <button class="vote mx-auto w-100 text-nowrap c-pointer" disabled>投票</button>
<?php else: ?>
                        <button class="vote mx-auto w-100 text-nowrap c-pointer" data-vote="<?= $senryu[$key]['polla_qid']; ?>" ontouchstart="">投票</button>
<?php endif; ?>
                      </div>
                    </div>
                  </div>
<?php endforeach; ?>
                  <div class="text-center col-12 mt-5" data-aos="fade-up" data-aos-delay="100">
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

    <div id="fixed-menu-move"></div>
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
<?php if (CONTEST_ENDED): ?>
          <button class="vote mx-auto pl-4 pr-4 c-pointer" disabled>投票</button>
<?php else: ?>
          <button class="vote mx-auto pl-4 pr-4 c-pointer" data-vote="" ontouchstart="">投票</button>
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
