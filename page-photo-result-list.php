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
      <div class="container px-0">
        <div class="row">
          <div class="col-12 col-md-8 px-0">
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
            <div class="site-section py-5 mx-3" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <p class="text-left ml-3 mr-3">「地域の魅力」を感じるひとコマをテーマに何月何日まで募集をしました。応募された作品のなかから選抜されたものを掲載しています。素晴らしい作品をぜひ御覧ください。サムネイルをクリックすると作品の情報をご覧いただけます。（エピソードはクリックして確認）<br>それでは11位～100位、一気に見ていきましょう！</p>
                </div>
              </div>
            </div>
            <div class="site-section beige py-3" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12">
                    <div class="rem1-3 font-weight-bold mt-3">その他作品</div>
                    <div class="contents-border short mb-2"></div>
                  </div>
                </div>
                <div class="p-3">
                  <div class="row">
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="m-1 team-member p-0 w-auto">
                        <img src="/wordpress/wp-content/uploads/2021/07/SETOUCHIはいいぞ-150x150.jpg" class="w-100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="px-3 mx-3">
<?php $viewPhoto = false; ?>
<?php include 'parts/other-contest.php'; ?>
            </div>
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
<?php get_footer(); ?>
