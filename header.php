<?php require_once('functions.php'); ?>
<?php global $util; ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <title><?= $util->getSiteTitle(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= FAVICON_URL;?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,500,600,700,800,900|Oswald:400,500,600,700">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/aos.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <style>
.site-blocks-cover.overlay.top {
    background-image: url('<?= get_template_directory_uri(); ?>/images/peacedesigner_kameoka_sp1.jpg');
}
.site-blocks-cover.overlay.top.top2 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_top.png');
}
.site-blocks-cover.overlay.top.top3 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_bottom.png');
}
@media (min-width: 767.98px) {
  .site-blocks-cover.overlay.top {
    background-size: cover;
    background-position: 50%;
  }
  .site-blocks-cover.overlay.top.top2 {
    background-size: cover;
    background-position: 50%;
  }
  .site-blocks-cover.overlay.top.top3 {
    background-size: cover;
    background-position: 50%;
  }
}
.kakejiku_outer {
  background-image: url('<?= get_template_directory_uri(); ?>/images/washi_green.png');
}
.kakejiku_inner {
  background-image: url('<?= get_template_directory_uri(); ?>/images/washi_white.png');
}
    </style>
    <?php wp_head();?>
  </head>
  <body>
    <!-- ヘッダー共通処理 start -->
    <div class="site-wrap">
      <div class="site-navbar">
        <div class="container-fluid px-4 py-0">
          <div class="row align-items-center">
            <div class="col-8 col-lg-2">
              <div class="logo-header my-2">
                <a href="<?= home_url();?>">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo2.png" alt="PEACE DISIGNER FES" class="mx-auto">
                </a>
              </div>
            </div>
            <div class="col-4 col-lg-10 p-lg-0">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto p-0"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h2"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block text-nowrap">
                  <li>
                    <a href="<?= HOME_URL;?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_top.png">
                      <div>TOPページ</div>
                    </a>
                  </li>
                  <li class="has-children">
                    <a href="javascript:void(0);"><img src="<?= get_template_directory_uri(); ?>/images/icon_contents.png"><div>コンテンツ</div></a>
                    <ul class="dropdown">
                      <li>
                        <a href="<?= LIVE_CONTENTS_URL;?>" class="inpage-link">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_live.png">
                          <div>LIVE</div>
                        </a>
                      </li>
                      <li>
                        <a href="<?= PROJECT_URL;?>" class="inpage-link">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_project.png">
                          <div>プロジェクト</div>
                        </a>
                      </li>
                      <li>
                        <a href="<?= PHOTO_CONTEST_URL;?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_photo.png">
                          <div>フォトコンテスト</div>
                        </a>
                      </li>
                      <li>
                        <a href="<?= MOVIE_CONTEST_URL;?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_movie.png">
                          <div>ムービーコンテスト</div>
                        </a>
                      </li>
                      <li>
                        <a href="<?= SENRYU_CONTEST_URL;?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_senryu.png">
                          <div>川柳コンテスト</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?= QUESTIONNAIRE_URL;?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_present.png">
                      <div>アンケート＆プレゼント</div>
                    </a>
                  </li>
                  <li>
                    <a href="<?= NEWS_URL;?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_news.png">
                      <div>最新情報</div>
                    </a>
                  </li>
                  <li>
                    <a href="<?= CONCEPT_URL;?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_about.png">
                      <div>Peace designer Fes とは</div>
                    </a>
                  </li>
                  <li>
                    <a href="<?= CONTACT_URL;?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_contact.png">
                      <div>お問い合わせ</div>
                    </a>
                  </li>
                  <li>
                    <a href="<?= GOODS_SHOP_URL; ?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_goods.png">
                      <div>グッズショップ（外部リンク）</div>
                    </a>
                  </li>
                  <li class="d-lg-none">
                    <div class="site-mobile-menu-sns text-center font-weight-bold container-fluid">
                      <div class="row justify-content-center align-items-center text-nowrap flex-nowrap py-2">
                          <span class="m-3"><a href="<?= SNS_INSTAGRAM_URL; ?>"><img src="<?= get_template_directory_uri(); ?>/images/icon_instagram.png" alt="Image"></a></span>
                          <span class="m-3"><a href="<?= SNS_LINE_URL; ?>"><img src="<?= get_template_directory_uri(); ?>/images/icon_line.png" alt="Image"></a></span>
                          <span class="m-3"><a href="<?= SNS_YOUTUBE_URL; ?>"><img src="<?= get_template_directory_uri(); ?>/images/icon_youtube.png" alt="Image"></a></span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="container-fluid px-4 py-0">
          <div class="row align-items-center">
            <div class="col-8 col-lg-2">
              <div class="logo-header my-2">
                <a href="<?= home_url();?>">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo2.png" alt="PEACE DISIGNER FES" class="mx-auto">
                </a>
              </div>
            </div>
            <div class="col-4 col-lg-10 p-lg-0 site-mobile-menu-close text-right">
              <span class="icon-close2 js-menu-toggle text-cyan"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="site-mobile-menu-body">
      </div>
    </div> <!-- .site-mobile-menu -->

    <!-- ヘッダー共通処理 end -->
<?php if ($util->is_IE()): ?>
    <div class="ie_alert">
      <h2><b>ご利用の環境はサポートされておりません</b></h2>
      <p>PD-FESでは、あなたがご利用中のブラウザ<b>Internet Explorer</b>は、サポートされておりません。<br>お手数ですが以下のブラウザからアクセス頂きますよう、お願い致します。</p>
      <p><b>Google Chrome / Microsoft Edge</p>
      <a href="https://www.google.co.jp/chrome/index.html" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">Google Chromeをダウンロード</button></a>
      <a href="https://www.microsoft.com/ja-jp/edge" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">Microsoft Edgeをダウンロード</button></a>
    <div>
<?php endif; ?>
