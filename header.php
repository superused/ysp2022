<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PEACE DESIGNER FES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    background-image: url('<?= get_template_directory_uri(); ?>/images/peacedesigner_kameoka_tb1.jpg');
  }
  .site-blocks-cover.overlay.top.top2 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_top.png');
  }
  .site-blocks-cover.overlay.top.top3 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_bottom.png');
  }
}
@media (min-width: 1199.98px) {
  .site-blocks-cover.overlay.top {
    background-image: url('<?= get_template_directory_uri(); ?>/images/peacedesigner_kameoka_pc1.jpg');
    background-size: cover;
    background-position: 50%;
  }
  .site-blocks-cover.overlay.top.top2 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_pc_top.png');
    background-size: cover;
    background-position: 50%;
  }
  .site-blocks-cover.overlay.top.top3 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_pc_bottom.png');
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
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-3 col-xl-3">
              <h1 class="logo-header mb-0">
              <a href="<?= home_url();?>" class="text-white h2 mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo1.png" alt="Image" class="mx-auto">
                </a>
              </h1>
            </div>
            <div class="col-4 col-md-4 col-lg-9 col-xl-9">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h2"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="">Home</a>
                  </li>
                  <li class="has-children">
                    <a href="<?= esc_url(home_url('/live/'));?>">LIVE</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="<?= esc_url(home_url('/live2/'));?>">LIVE2</a></li>
                      <li><a href="#">LIVE2</a></li>
                      <li><a href="#">LIVE3</a></li>
                      <li class="has-children">
                        <a href="#">サブメニュー</a>
                        <ul class="dropdown">
                          <li><a href="#">サブ1</a></li>
                          <li><a href="#">サブ2</a></li>
                          <li><a href="#">サブ3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="<?= esc_url(home_url('/union/'));?>">連合会一覧</a></li>
                  <li><a href="<?= esc_url(home_url('/video-contest/'));?>">ビデオコンテスト</a></li>
                  <li><a href="<?= esc_url(home_url('/photo-contest/'));?>">フォトコンテスト</a></li>
                  <li><a href="<?= esc_url(home_url('/senryu/'));?>">川柳</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <!-- ヘッダー共通処理 end -->
