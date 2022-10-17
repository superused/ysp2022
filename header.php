<?php require_once('functions.php'); ?>
<?php global $util; ?>
<!DOCTYPE html>
<html lang="ja">
<?php if (is_single()): ?>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/website#">
<?php else: ?>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php endif; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $util->getSiteTitle(); ?></title>
    <meta property="og:locale" content="ja_JP" />

<?php if (is_single() || is_page()): //投稿記事か固定ページ ?>
<?php   if (has_post_thumbnail()): //アイキャッチがある場合 ?>
<?php
$image_id = get_post_thumbnail_id();
$image = wp_get_attachment_image_src($image_id, 'full');
?>
    <meta property="og:image" content="<?= $image[0]; ?>">
<?php   elseif (preg_match( '/<img.*?src=(["\'])(.+?)\1.*?>/i', $post->post_content, $imgurl ) && !is_archive()): //アイキャッチ以外の画像がある場合 ?>
    <meta property="og:image" content="<?= $imgurl[2]; ?>">
<?php   else: //画像が1つも無い場合 ?>
    <meta property="og:image" content="<?= IMG_DIR; ?>/ogp.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
<?php   endif; ?>
<?php else: //ホーム・カテゴリーページなど ?>
    <meta property="og:image" content="<?= IMG_DIR; ?>/ogp.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
<?php endif; ?>
    <link rel="shortcut icon" href="<?= FAVICON_URL;?>" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/fonts/icomoon/style.css">
    <link href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" rel="stylesheet">
    <link rel="preload" as="font" href="<?= get_template_directory_uri(); ?>/fonts/futura/Futura Book font.ttf" crossorigin />
    <link rel="preload" as="font" href="<?= get_template_directory_uri(); ?>/fonts/futura/Futura Medium font.ttf" crossorigin />
    <link rel="preload" as="font" href="<?= get_template_directory_uri(); ?>/fonts/futura/Futura Bold.ttf" crossorigin />
    <link rel="preload" as="font" href="<?= get_template_directory_uri(); ?>/fonts/futura/Futura Extra Black font.ttf" crossorigin />
    <link rel="preload" as="font" href="<?= get_template_directory_uri(); ?>/fonts/HuiFont29.ttf" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/aos.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css?20210809">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css2/app.css">
    <?php wp_head();?>
  </head>
  <body>
    <!-- ヘッダー共通処理 start -->
    <div class="site-wrap">
      <div class="site-navbar<?php if(is_front_page()): ?> top<?php endif; ?>">
        <div class="container px-3 py-0">
          <div class="row align-items-center flex-nowrap">
            <div class="col-md-1 col-lg-2 px-0">
              <div class="logo-header">
                <a href="<?= home_url();?>">
                  <img src="<?= IMG_DIR; ?>/logo.jpg" alt="YSP-Japan" class="mx-auto d-none d-md-block">
                  <img src="<?= IMG_DIR; ?>/logo_sp.jpg" alt="YSP-Japan" class="mx-auto d-md-none">
                </a>
              </div>
            </div>
            <div class="d-none d-md-block col-md-11 col-lg-10 px-0">
              <nav class="site-navigation text-right text-md-right" role="navigation">
                <ul class="top-upper-menu">
                  <li><a class="sns-link" href="<?= SNS_INSTAGRAM_URL; ?>"><i class="colored fa-brands fa-square-instagram fa-2x"></i></a></li>
                  <li><a class="sns-link" href="<?= SNS_FACEBOOK_URL; ?>"><i class="colored fa-brands fa-facebook fa-2x"></i></a></li>
                  <li><a class="sns-link" href="<?= SNS_LINE_URL; ?>"><i class="colored fa-brands fa-line fa-2x"></i></a></li>
                  <li>
                    <form class="search-box">
                      <input type="text" placeholder="サイト内検索">
                      <button type="submit">
                        <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                      </button>
                    </form>
                  </li>
                  <li>
                    <a href="<?= SHOP_URL; ?>"><button class="shop-button"><div class="d-flex align-items-center px-4"><i class="fa-solid fa-cart-shopping fa-lg mx-1"></i><span class="mx-1">Shop</span></div></button></a>
                  </li>
                </ul>
                <ul class="top-lower-menu">
                  <li class="site-menu pb-3">
                    <a href="<?= ABOUT_URL; ?>">
                      <p class="title">YSPとは</p>
                      <p class="title-en">About us</p>
                    </a>
                  </li>
                  <li class="site-menu mb-3">
                    <a href="<?= SEMINAR_URL; ?>">
                      <p class="title">セミナー・イベント</p>
                      <p class="title-en">Workshop/Event</p>
                    </a>
                  </li>
                  <li class="site-menu mb-3">
                    <a href="<?= PROJECT_URL; ?>">
                      <p class="title">プロジェクト</p>
                      <p class="title-en">Project</p>
                    </a>
                  </li>
                  <li class="site-menu mb-3">
                    <a href="<?= CONTACT_URL; ?>">
                      <p class="title">お問い合わせ</p>
                      <p class="title-en">Contact us</p>
                    </a>
                  </li>
                  <li class="pb-3">
                    <a href="<?= SUPPORT_URL; ?>"><button class="donation-button">寄付・支援</button></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="menu-detail">
          <div class="container position-relative px-3 py-0 h-100">
            <div class="row h-100 align-items-center">
              <div class="col-4 site-cover-menu">
                <div class="left-menu">
                  <a href="<?= ABOUT_URL; ?>">1ページで分かるYSP</a>
                </div>
              </div>
              <div class="col-8 row site-cover-menu">
                <div class="col-4 right-menu">
                  <a href="<?= OUTLINE_URL; ?>">団体概要</a>
                </div>
                <div class="col-4 right-menu">
                  <a href="<?= MESSAGE_URL; ?>">会長挨拶</a>
                </div>
                <div class="col-4 right-menu">
                  <a href="<?= NEWS_URL; ?>">News Letter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php if(is_front_page()): ?>
        <div class="circle-bg header"></div>
        <div class="circle-bg header-bottom"></div>
<?php endif; ?>
      </div>
    </div>

    <div class="site-mobile-menu bg-cyan">
      <div class="site-mobile-menu-header">
        <div class="container-fluid p-0">
          <div class="row align-items-center justify-content-between m-3">
            <div>
                <span class="text-white mx-3">MENU</span>
            </div>
            <div>
              <ul class="d-flex text-right m-0">
                <li><a class="text-white mx-3" href="<?= SNS_FACEBOOK_URL; ?>"><i class="fa-brands fa-square-facebook fa-2x"></i></a></li>
                <li><a class="text-white mx-3" href="<?= SNS_INSTAGRAM_URL; ?>"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
                <li><a class="text-white mx-3" href="<?= SNS_LINE_URL; ?>"><i class="fa-brands fa-line fa-2x"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="site-mobile-menu-body bg-lightgray">
      </div>
    </div> <!-- .site-mobile-menu -->
<?php if(is_front_page()): ?>
    <div id="loading">
      <div class="site-section vh-center">
        <div class="container">
          <img src="<?= IMG_DIR; ?>/loading.gif" alt="loading" class="mx-auto w-100">
          <div id="loading_text"></div>
        </div>
      </div>
    </div>
<?php endif; ?>
    <div class="navbar-space<?php if(is_front_page()): ?> top<?php endif; ?>"></div>

    <!-- ヘッダー共通処理 end -->
<?php if ($util->is_IE()): ?>
    <div class="ie_alert">
      <h2><b>ご利用の環境はサポートされておりません</b></h2>
      <p>YSP-Japanでは、あなたがご利用中のブラウザ<b>Internet Explorer</b>は、サポートされておりません。<br>お手数ですが以下のブラウザからアクセス頂きますよう、お願い致します。</p>
      <p><b>Google Chrome / Microsoft Edge</p>
      <a href="https://www.google.co.jp/chrome/index.html" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">Google Chromeをダウンロード</button></a>
      <a href="https://www.microsoft.com/ja-jp/edge" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">Microsoft Edgeをダウンロード</button></a>
    <div>
<?php endif; ?>
