<?php get_header(); ?>
<?php
// $datas = [['photo' => '', 'episode' => '', 'name' => '', 'age' => '', 'gender' => '']];
// アンケートの終了フラグを確認
// var_dump($util->isContestOpen('photo'));
$photo = $util->getContestDatas('photo');
$datas = array_map(function($s) { return $s['polla_datas']; }, $photo);
?>
    <div class="site-section top-image full pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="top-full-image photo_contest"></div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center w-border mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-delay="100">
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
          <div class="col-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8">
            <div class="site-section" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left ml-3 mr-3">「地域の魅力」を感じるひとコマをテーマに何月何日まで募集をしました。応募された作品のなかから選抜されたものを掲載しています。素晴らしい作品をぜひ御覧ください。サムネイルをクリックすると作品の情報をご覧いただけます。（エピソードはクリックして確認）<br>あなたが素敵だと思う作品に投票してみてください。投票期間は○月○日までです。</p>
                </div>
              </div>
            </div>

            <div class="site-section beige pt-4 pb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h5 class="font-weight-bold mb-2">投票期間</h5>
                    <div class="contents-border short mt-1 mb-1"></div>
                    <p>2021年8月8日まで</p>
                    <h5 class="font-weight-bold mb-2">結果発表</h5>
                    <div class="contents-border short mt-1 mb-1"></div>
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
                  <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-2" data-type="content-block" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-frame square w-100 p-0 mb-2 mr-2">
                      <div class="team-member m-0">
                        <a href="#" data-toggle="modal" data-target="#modal" ontouchstart=""><img src="<?= $data['photo'];?>" class="photo_image w-100"></a>
                      </div>
                      <div class="row p-2">
                        <div class="col-6 pr-0">
                        <h6 class="photo_name"><?=$data['name']; ?> さん</h6>
                          <p class="photo_address text-secondary mb-1"><?=$data['address']; ?>在住</p>
                        </div>
                        <div class="photo_button col-6 row w-100 p-0">
                          <div class="row w-100 m-0">
                            <div class="col-6 p-0">
                              <div class="mr-1">
                                <button class="detail mx-auto m-1 w-100 text-nowrap" data-toggle="modal" data-target="#modal" ontouchstart="">詳細</button>
                              </div>
                            </div>
                            <div class="col-6 p-0">
                              <div class="ml-1">
                                <button class="vote mx-auto m-1 w-100 text-nowrap" ontouchstart="" data-vote="<?= $photo[$key]['polla_qid']; ?>">投票</button>
                                <p class="vote_num text-danger text-center font-weight-bold mb-0"><span><?= $photo[$key]['polla_votes']; ?></span>票</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="photo_episode small pl-2 pr-2 pb-2"><?= nl2br(esc_html($data['episode'])); ?></div>
                      <div class="photo_title d-none"><?= esc_html($data['title']); ?></div>
                      <div class="photo_region d-none"><?= esc_html($data['location']); ?></div>
                      <div class="photo_comment d-none"><?= esc_html($data['comment']); ?></div>
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

            <div class="site-section pt-3 pb-3">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold mb-2">賞品</h4>
                    <div class="contents-border short mt-1 mb-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section beige" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-4 text-center mt-2">
                    <div class="double-circle l mx-auto">
                      <div class="circle-inner">
                        <div class="title">最優秀賞</div>
                        <div class="sub">1名様</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-8 mt-2">
                    <div class="text">
                      ・ギフトカード（1万円分）<br>
                      ・地域の特産品
                    </div>
                    <div class="image">
                      <img class="prize col-6" src="<?= get_template_directory_uri(); ?>/images/photo5.png"><img class="prize col-6" src="<?= get_template_directory_uri(); ?>/images/photo5.png">
                    </div>
                  </div>
                  <div class="col-4 text-center mt-2">
                    <div class="double-circle m mx-auto">
                      <div class="circle-inner">
                        <div class="title">優秀賞</div>
                        <div class="sub">1名様</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-8 mt-2">
                    <div class="text">
                      ・ギフトカード（5千円分）<br>
                      ・Pdフェスオリジナルフェイスタオル
                    </div>
                    <div class="image">
                      <img class="prize col-6" src="<?= get_template_directory_uri(); ?>/images/photo5.png"><img class="prize col-6" src="<?= get_template_directory_uri(); ?>/images/photo5.png">
                    </div>
                  </div>
                  <div class="col-4 text-center mt-2">
                    <div class="double-circle s mx-auto">
                      <div class="circle-inner">
                        <div class="title">佳作</div>
                        <div class="sub">8名様</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-8 mt-2">
                    <div class="text">
                      ・ギフトカード（500円分）
                    </div>
                    <div class="image">
                      <img class="prize col-6" src="<?= get_template_directory_uri(); ?>/images/photo5.png"><img class="prize col-6" src="<?= get_template_directory_uri(); ?>/images/photo5.png">
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
      <div class="modal-dialog text-white text-center" role="document">
        <h4 class="photo_title font-weight-bold mb-2"></h4>
        <h6 class="photo_name mb-4"></h6>
        <div class="m-0 mb-4">
          <img src="" class="photo_image w-100">
        </div>
        <div class="text-left mb-1"><span class="mr-3">タイトル</span><span class="photo_title"></span></div>
        <div class="text-left mb-1"><span class="mr-3">撮影場所</span><span class="photo_region"></span></div>
        <div class="photo_comment text-left mb-3"></div>
        <div class="col-12 modal-content bg-transparent border-0">
          <button class="vote mx-auto m-1 pt-2 pb-2 pl-4 pr-4 text-nowrap" data-vote="" ontouchstart="">投票</button>
        </div>
      </div>
    </div>
    <div id="tohyo" class="d-none">
      <?php the_content(); ?>
    </div>
<?php get_footer(); ?>
