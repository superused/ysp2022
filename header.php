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
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_pc_top.png');
  }
  .site-blocks-cover.overlay.top.top3 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/moyou_pc_bottom.png');
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
    </style>
    <?php wp_head();?>
  </head>
  <body>
    <!-- ヘッダー共通処理 start -->
    <div class="site-wrap">
      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4 col-xl-4">
              <h1 class="logo-header mb-0">
                <a href="index.php" class="text-white h2 mb-0">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo1.png" alt="Image" class="mx-auto">
                </a>
              </h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8 col-xl-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h2"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.html">Home</a>
                  </li>
                  <li><a href="dj.html">DJs</a></li>
                  <li class="has-children">
                    <a href="shows.html">Shows</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Top 20 of The Week</a></li>
                      <li><a href="#">Featured Artist</a></li>
                      <li><a href="#">Interviews</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
