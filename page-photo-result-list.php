<?php get_header(); ?>
<?php
$datas = [
  11 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '11エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  12 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '12エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  13 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '13エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  14 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '14エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  15 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '15エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  16 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '16エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  17 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '17エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  18 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '18エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  19 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '19エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  20 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '20エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  21 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '21エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  22 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '22エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  23 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '23エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  24 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '24エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  25 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '25エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  26 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '26エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  27 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '27エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  28 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '28エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  29 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '29エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  30 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '30エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  31 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '31エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  32 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '32エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  33 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '33エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  34 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '34エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  35 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '35エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  36 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '36エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  37 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '37エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  38 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '38エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  39 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '39エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  40 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '40エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  41 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '41エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  42 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '42エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  43 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '43エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  44 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '44エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  45 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '45エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  46 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '46エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  47 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '47エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  48 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '48エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  49 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '49エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  50 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '50エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  51 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '51エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  52 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '52エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  53 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '53エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  54 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '54エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  55 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '55エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  56 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '56エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  57 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '57エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  58 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '58エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  59 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '59エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  60 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '60エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  61 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '61エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  62 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '62エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  63 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '63エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  64 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '64エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  65 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '65エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  66 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '66エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  67 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '67エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  68 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '68エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  69 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '69エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
  70 => ['/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg', 'タイトル', '山田 花子', '70エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。エピソード入ります。'],
];
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
                  <p class="text-left ml-3 mr-3">「地域の魅力」を感じるひとコマをテーマに何月何日まで募集をしました。応募された作品のなかから選抜されたものを掲載しています。素晴らしい作品をぜひ御覧ください。サムネイルをクリックすると作品の情報をご覧いただけます。（エピソードはクリックして確認）<br>それでは11位～70位、一気に見ていきましょう！</p>
                </div>
              </div>
            </div>
            <div class="site-section beige py-3 project-frame" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12">
                    <div class="rem1-3 font-weight-bold mt-3">その他作品</div>
                    <div class="contents-border short mb-2"></div>
                  </div>
                </div>
                <div class="p-3">
                  <div class="row photo-gallary">
                    <div class="photo-100-data photo_button col-4 p-0 d-none" data-type="content-block">
                      <div class="team-member photo-result-list">
                        <a href="#" data-toggle="modal" data-target="#modal" ontouchstart=""><img src="/wp-content/uploads/2021/07/SETOUCHIはいいぞ.jpg" class="photo_image w-100"></a>
                      </div>
                      <div class="d-none">
                        <div class="ranking"></div>
                        <div class="photo_title"></div>
                        <div class="photo_name"></div>
                        <div class="photo_episode"></div>
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
    <div class="json-data d-none"><?=json_encode($datas); ?></div>
<?php get_footer(); ?>
