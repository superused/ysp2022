<?php get_header(); ?>
<?php
// $datas = [['senryu' => '', 'episode' => '', 'name' => '', 'age' => '', 'gender' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('senryu'));
$senryu = $util->getContestDatas('senryu');
$datas = array_map(function($s) { return $s['polla_datas']; }, $senryu);
?>
<?php include 'parts/photo-result-head.php'; ?>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8">
<?php include 'parts/photo-result-content-title.php'; ?>

            <div class="result-winner-image w-75 text-center mx-auto" data-aos="fade-up" data-aos-delay="100">
              <img src="<?= get_template_directory_uri(); ?>/images/result_winner.png" alt="Image" class="img-fluid">
            </div>
            <div class="site-section result-winner p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">最優秀賞</h3>
                    <div class="font-weight-bold">～賞品～<br>ギフトカード（１万円分）<br>地域の特産品</div>
                  </div>
                  <div class="text-left mx-auto box-body bg-white p-3">
                    <div class="row px-3">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section result-winner p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">優秀賞</h3>
                    <div class="font-weight-bold">～賞品～<br>ギフトカード（５千円分）<br>Pdフェスオリジナルフェイスタオル</div>
                  </div>
                  <div class="text-left mx-auto box-body bg-white p-3">
                    <div class="row px-3">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="site-section result-winner p-0 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-center box-title pt-2 pb-1">
                    <h3 class="text-cyan font-weight-bold">入選</h3>
                    <div class="font-weight-bold">～賞品～<br>ギフトカード（500円分）</div>
                  </div>
                  <div class="text-left mx-auto box-body bg-white p-3">
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                    <div class="contents-border w-100 border-cyan my-3"></div>
                    <div class="row px-3" data-aos="fade-up" data-aos-delay="100">
                      <h5 class="col-6 font-weight-bold px-0 pb-2">あいうえお<br>かきくけこさし<br>たちつてと</h5>
                      <div class="col-6 text-right p-0 ml-auto">
                        <h6 class="w-auto mt-2"><span class="font-weight-bold text-cyan bg-yellow p-2"><span class="font-weight-bold small">得票数 </span><span>123票</span></span></h6>
                        <div class="pl-3 py-3">
                          <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" class="img-fluid">
                        </div>
                      </div>
                      <div class="kakejiku-episode">テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。テキスト入ります。</div>
                      <div class="kakejiku-name mt-2">山田 花子 (30代 女性)</div>
                    </div>
                  </div>
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
