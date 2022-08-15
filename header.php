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
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/images/ogp.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
<?php   endif; ?>
<?php else: //ホーム・カテゴリーページなど ?>
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/images/ogp.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
<?php endif; ?>

    <link rel="shortcut icon" href="<?= FAVICON_URL;?>" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/fonts/icomoon/style.css">
    <link href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/aos.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css?20210809">
    <style>
.site-blocks-cover.overlay.top {
    background-image: url('<?= get_template_directory_uri(); ?>/images/logo/bg/dummy.png');
}
.site-blocks-cover.overlay.top.top2 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/logo/moyou_top.png');
}
.site-blocks-cover.overlay.top.top3 {
    background-image: url('<?= get_template_directory_uri(); ?>/images/logo/moyou_bottom.png');
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
        <div class="container px-3 py-0">
          <div class="row align-items-center">
            <div class="col-2 px-0">
              <div class="logo-header">
                <a href="<?= home_url();?>">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo.jpg" alt="YSP-Japan" class="mx-auto">
                </a>
              </div>
            </div>
            <div class="col-10 px-0">
              <nav class="site-navigation text-right text-md-right" role="navigation">
                <ul class="top-upper-menu">
                  <li><a class="sns-link" href=""><i class="fa-brands fa-square-instagram fa-2x"></i></a></li>
                  <li><a class="sns-link" href=""><i class="fa-brands fa-facebook fa-2x"></i></a></li>
                  <li><a class="sns-link" href=""><i class="fa-brands fa-line fa-2x"></i></a></li>
                  <li>
                    <form class="search-box">
                      <input type="text" placeholder="サイト内検索">
                      <button type="submit">
                        <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                      </button>
                    </form>
                  </li>
                  <li>
                    <a href=""><button class="shop-button"><div class="d-flex align-items-center px-4"><i class="fa-solid fa-cart-shopping fa-lg mx-1"></i><span class="mx-1">Shop</span></div></button></a>
                  </li>
                </ul>
                <ul class="top-lower-menu">
                  <li class="site-menu">
                    <div class="title">YSPとは</div>
                    <div class="title-en">About us</div>
                  </li>
                  <li class="site-menu">
                    <div class="title">セミナー・イベント</div>
                    <div class="title-en">Workshop/Event</div>
                  </li>
                  <li class="site-menu">
                    <div class="title">プロジェクト</div>
                    <div class="title-en">Project</div>
                  </li>
                  <li class="site-menu">
                    <div class="title">お問い合わせ</div>
                    <div class="title-en">Contact us</div>
                  </li>
                  <li>
                    <a href=""><button class="donation-button">寄付・支援</button></a>
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
        <div class="container-fluid px-3 py-0">
          <div class="row align-items-center">
            <div class="col-8 col-md-2">
              <div class="logo-header my-2">
                <a href="<?= home_url();?>">
                  <img src="<?= get_template_directory_uri(); ?>/images/logo2.png" alt="PEACE DISIGNER FES" class="mx-auto">
                </a>
              </div>
            </div>
            <div class="col-4 col-md-10 p-md-0 site-mobile-menu-close text-right">
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
