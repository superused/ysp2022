<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PEACE DESIGNER FES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= esc_url(home_url('favicon.ico'));?>" />
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
  background-image: url('<?= get_template_directory_uri(); ?>/images/washi_outer_s.jpg');
}
.kakejiku_inner {
  background-image: url('<?= get_template_directory_uri(); ?>/images/washi_inner_s.jpg');
}
.top-full-image.photo_contest {
  background-image: url('<?= get_template_directory_uri(); ?>/images/photo_contest_full.jpg');
}
@media (min-width: 767.98px) {
  .top-full-image.photo_contest {
    background-image: url('<?= get_template_directory_uri(); ?>/images/photo_contest_full_pc.jpg');
  }
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
            <div class="col-8 col-md-8 col-lg-2 col-xl-2">
              <h1 class="logo-header mb-0">
                <a href="<?= home_url();?>" class="text-white h2 mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo1.png" alt="Image" class="mx-auto">
                </a>
              </h1>
            </div>
            <div class="col-4 col-md-4 col-lg-10 col-xl-10">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h2"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block text-nowrap">
                  <li class="has-children">
                    <a href="javascript:void(0);"><img src="<?= get_template_directory_uri(); ?>/images/icon_contents.png"><span>コンテンツ</span></a>
                    <ul class="dropdown">
                      <li>
                        <a href="<?= esc_url(home_url('/live2/'));?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_live.png">
                          <span>LIVE</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?= esc_url(home_url('/union/'));?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_project.png">
                          <span>プロジェクト</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?= esc_url(home_url('/photo-contest/'));?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_photo.png">
                          <span>フォトコンテスト</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?= esc_url(home_url('/movie-contest/'));?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_movie.png">
                          <span>ムービーコンテスト</span>
                        </a>
                      </li>
                      <li>
                        <a href="<?= esc_url(home_url('/senryu/'));?>">
                          <img src="<?= get_template_directory_uri(); ?>/images/icon_senryu.png">
                          <span>川柳コンテスト</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?= esc_url(home_url('/union2/'));?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_present.png">
                      <span>プレゼントアンケート</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= esc_url(home_url('/video-contest/'));?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_news.png">
                      <span>NEWS</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= esc_url(home_url('/photo-contest/'));?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_about.png">
                      <span>aboutフェス</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= esc_url(home_url('/'));?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_top.png">
                      <span>TOPページ</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= esc_url(home_url('/contact/'));?>">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_contact.png">
                      <span>CONTACT</span>
                    </a>
                  </li>
                  <li>
                    <a href="https://peace-designer.stores.jp/">
                      <img src="<?= get_template_directory_uri(); ?>/images/icon_goods.png">
                      <span>グッズショップ（外部リンク）</span>
                    </a>
                  </li>
                  <li>
                    <div class="site-mobile-menu-sns text-center font-weight-bold container-fluid">
                      <div class="row justify-content-center align-items-center text-nowrap flex-nowrap">
                          <span class="m-4">OFFICIAL SNS</span>
                          <span class="m-2"><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon_instagram.png" alt="Image"></a></span>
                          <span class="m-2"><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon_line.png" alt="Image"></a></span>
                          <span class="m-2"><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/icon_youtube.png" alt="Image"></a></span>
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
        <div class="container-fluid px-4 py-1">
          <div class="row align-items-center">
            <div class="col-8">
              <h1 class="logo-header mb-0">
                <a href="<?= home_url();?>" class="text-white h2 mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo1.png" alt="Image" class="mx-auto">
                </a>
              </h1>
            </div>
            <div class="col-4 site-mobile-menu-close text-right">
              <span class="icon-close2 js-menu-toggle text-cyan"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="site-mobile-menu-body">
      </div>
    </div> <!-- .site-mobile-menu -->

    <!-- ヘッダー共通処理 end -->
