<?php get_header(); ?>
<?php
// $datas = [['senryu' => '', 'episode' => '', 'name' => '', 'age' => '', 'gender' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('senryu'));
$senryu = $util->getContestDatas('senryu');
$datas = array_map(function($s) { return $s['polla_datas']; }, $senryu);
?>
<?php include 'parts/senryu-result.php'; ?>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8">
<?php include 'parts/senryu-result-title.php'; ?>
            <div class="site-section p-0" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center mb-3 w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold">その他作品</h4>
                    <div class="contents-border mt-1 mb-2"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row result-list">
<?php for ($i = 11; $i <= 100; $i++): ?>
                  <div class="col-12 result-winner row justify-content-center mx-0 my-3 p-0">
                    <div class="col-12 text-left box-title pt-2 pb-1">
                      <h3 class="text-cyan font-weight-bold"><span class="small text-body font-weight-bold mr-1">第</span><?=$i ?><span class="small text-body font-weight-bold ml-1">位</span></h3>
                    </div>
                    <div class="col-12 box-body bg-white w-100 p-3">
                      <div class="row px-0 mx-auto">
                        <p class="text-center font-weight-bold m-0 p-0">あいうえお　かきくけこさし　たちつてと</p>
                        <div class="text-right p-0 ml-auto">
                          <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                        </div>
                      </div>
                    </div>
                  </div>
<?php endfor; ?>
                </div>
              </div>
            </div>

            <div class="site-section result-winner p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">第11位～第100位</h3>
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
          </div>
          <div class="col-12 col-sm-12 col-mg-4 col-lg-4 col-xl-4">
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
