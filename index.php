<?php get_header(); ?>
    <div id="top-image" class="site-blocks-cover overlay top top-main">
      <div class="site-blocks-cover overlay top bg"></div>
      <div class="site-blocks-cover overlay top white"></div>
      <div class="site-blocks-cover overlay top top2"></div>
      <div class="site-blocks-cover overlay top top3"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="logo_bg">
            <img src="<?= get_template_directory_uri(); ?>/images/logo/tsunagari2.png" class="logo-message-top" id="logo_1">
          </div>
          <div class="logo_bg">
            <img src="<?= get_template_directory_uri(); ?>/images/logo2.png" class="logo-center" id="logo_2">
          </div>
          <div class="logo_bg">
            <img src="<?= get_template_directory_uri(); ?>/images/logo/online.png" class="logo-message-bottom" id="logo_3">
            <img src="<?= get_template_directory_uri(); ?>/images/logo/online_pc.png" class="logo-message-bottom" id="logo_4">
          </div>
        </div>
      </div>
    </div>

<?php include 'parts/news-slider.php'; ?>

    <div id="peace-designer-fes" class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-2 w-border col-12 mx-auto w-100" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mb-4 top-subtitle">PEACE DESIGNER FES</h1>
            <p class="text-left text-md-center my-md-4 py-md-2">「つながりが描く私たちの未来」をテーマに、日本の魅力を楽しく再発見できるオンラインフェス！</p>
            <a href="<?= CONCEPT_URL; ?>"><button class="btn btn-show mx-auto" ontouchstart="">もっと詳しく</button></a>
          </div>
        </div>
      </div>
    </div>

    <div id="contents-list" class="site-section">
      <div class="container-fluid">
        <div class="row">
          <div class="site-section-heading text-center mb-3 w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
            <h2 class="top-subtitle">CONTENTS LIST</h2>
            <div class="contents-border mt-1 mt-md-3 mb-2"></div>
            <p class="text-center mt-md-4">気になるコンテンツをクリック！</p>
          </div>
          <div class="site-section-heading contents-list-img text-center mb-5 w-border overflow-hidden m-0 p-0 w-100 position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
              <img src="<?= get_template_directory_uri(); ?>/images/i_map_bg.png" alt="Image" class="w-100">
              <ul class="contents-list-link">
                <li><a href="<?= PROJECT_CONTENTS_URL; ?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/i_map_appeal.png" alt="活動紹介コーナー" class="img-fluid"></a></li>
                <li><a href="<?= LIVE_CONTENTS_URL; ?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/i_map_live.png" alt="LIVE配信" class="img-fluid"></a></li>
                <li><a href="<?= SENRYU_URL; ?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/i_map_senryu.png" alt="川柳コンテスト" class="img-fluid"></a></li>
                <li><a href="<?= MOVIE_URL; ?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/i_map_movie.png" alt="MOVIEコンテスト" class="img-fluid"></a></li>
                <li><a href="<?= PHOTO_URL; ?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/i_map_photo.png" alt="PHOTOコンテスト" class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="event" class="site-section events-section">
      <div class="container px-0 mx-0 mx-md-auto" data-aos="fade-up" data-aos-delay="100">
        <div class="mb-5"data-aos="fade-up event-bg" data-aos-delay="100">
          <div class="event-bg-left"></div>
          <div class="event-bg-right">
            <h2 class="event-bg-word-1">EVENT</h2>
            <h2 class="event-bg-word-2">イベント</h2>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div id="live" class="row events-row">
          <div class="col-md-6 col-lg-6 col-xl-6 col-xl-6 mb-lg-6 image">
            <div class="event">
              <img src="<?= LIVE_TITLE_IMG; ?>" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="site-section-heading nopadding w-border col-md-6 col-lg-6 col-lg-6 col-xl-6 mx-auto t" data-aos="fade-up" data-aos-delay="100">
            <div class="message-under-image">
              <h2 class="mb-3 largeh2">LIVE</h2>
              <span class="live-message-under">ライブ</span>
              <p>ウェビナーやクイズなどの生配信企画！地域活性化で活躍する若手リーダーが語ります！見るだけでも、チャットで質問してもOK！</p>
              <div class="text-center text-md-left">
                <a href="<?= LIVE_URL; ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">タイムテーブルを見る</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="site-section-heading nopadding w-border col-12 mx-auto t">
            <div class="message-under-image mt-md-4">
              <div class="text-center px-0 mx-0 mb-4">
<?php
//現在のページのカテゴリを取得
$the_query = new WP_Query([
  'post_type' => 'live',
  'posts_per_page' => -1,
  'orderby' => 'post__in',
]);
?>
<?php $datas = $util->getLiveDetail(); ?>
<?php if ($the_query->have_posts()): ?>
<?php   while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php     $postName = get_post_field('post_name', get_the_ID()); ?>
<?php     if (strpos($postName, 'sinergy') !== false): ?>
                <div class="live-list project-frame w-100 mb-5" data-aos="fade-up" data-aos-delay="100">
                  <h6 class="triangle"></h6>
                  <div class="row">
                    <div class="p-0 m-0 mb-md-3 col-12 col-md-6">
                      <div class="team-member text-center image mx-3 mb-3 mb-md-0 w-auto">
                        <a href="<?= get_permalink(); ?>" ontouchstart="">
                          <img src="<?= $util->viewLiveTopImage($postName); ?>" alt="Image" class="img-fluid">
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="ml-lg-3 ml-xl-3">
                        <div class="text-left mx-auto mb-3">
                          <h4 class="font-weight-bold pb-2 mt-md-2 mr-md-2"><?= $datas[$postName]->title; ?></h4>
                          <div class="description"><?= nl2br($datas[$postName]->sentence); ?></div>
                        </div>
                        <div class="text-center text-md-left mb-3">
                          <a href="<?= get_permalink(); ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">この配信を見る</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<?php     endif; ?>
<?php   endwhile; ?>
<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="project" class="row p-0 m-0">
            <div class="col-12 col-md-6 image" data-aos="fade-up" data-aos-delay="100">
              <div class="event">
                <img src="<?= PROJECT_TITLE_IMG; ?>" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="site-section-heading nopadding w-border col-12 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="message-under-image">
                <h2 class="mb-3 largeh2">PROJECT</h2>
                <span class="live-message-under">活動紹介コーナー</span>
                <p>全国で活躍しているピースデザイナーたちの活動を紹介します！あなたの地域のピースデザイナー達の活躍を覗いてみませんか？</p>
                <div class="text-center text-md-left">
                  <a href="<?= PROJECT_URL; ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="site-section-heading nopadding w-border col-12 mx-auto t">
            <div class="message-under-image mt-md-4">
              <div class="row mx-0">
<?php
//現在のページのカテゴリを取得
$the_query = new WP_Query([
  'post_type' => 'project',
  'posts_per_page' => 3,
  'orderby' => 'post__in',
]);
?>
<?php $datas = $util->getProjectDetail(); ?>
<?php if ($the_query->have_posts()): ?>
<?php   while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php $postName = get_post_field('post_name', get_the_ID()); ?>
                <div class="project-list project-frame w-100 mb-5" data-aos="fade-up" data-aos-delay="100">
                  <h6 class="triangle"></h6>
                  <div class="row">
                    <div class="p-0 mx-0 mt-0 mb-3 col-12 col-md-6">
                      <div class="team-member text-center image mx-3 w-auto">
                        <a href="<?= get_permalink(); ?>" ontouchstart=""><img src="<?= $util->viewProjectTopImage($postName); ?>" alt="Image" class="img-fluid w-100"></a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="text-left mx-auto">
                        <h4 class="font-weight-bold pb-2 mt-md-2 mr-md-2"><?= $datas[$postName]->title; ?></h4>
                        <h5 class="font-weight-bold p-0 m-0"><?= $datas[$postName]->union_name; ?></h5>
                        <div class="contents-border w-100 border-cyan mt-0 mb-2 pb-2"></div>
                        <div class="description"><?= nl2br($datas[$postName]->description); ?></div>
                      </div>
                      <div class="text-center text-md-left mt-3">
                        <a href="<?= get_permalink(); ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
                      </div>
                    </div>
                  </div>
                </div>
<?php   endwhile; ?>
<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div id="contest" class="row p-0 m-0">
            <div class="col-12 col-md-6 image">
              <div class="event">
                <img src="<?= CONTEST_TITLE_IMG; ?>" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="site-section-heading nopadding w-border col-md-6 col-lg-6 col-xl-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="message-under-image">
                <h2 class="mb-3 largeh2">CONTEST</h2>
                <span class="live-message-under">コンテスト</span>
                <p class="rem1-5 font-weight-bold mt-2">私たちの町の魅力を再発見！</p>
                <p>コロナでなかなか地元に戻れないそこのあなた！３つの企画の中から地元の"素敵"を再発見しませんか？</p>
              </div>
            </div>
          </div>
          <div class="site-section-heading nopadding mb-5 w-border col-12 mx-auto">
            <div class="message-under-image">
              <div id="movie" class="contest-contents text-center pb-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4">SHORT MOVIE</h2>
                <div class="text-left contest-values" data-aos="fade-up" data-aos-delay="100">
                  <span class="thema"></span>
                  <span class="title">my favorite town</span>
                  <div class="team-member text-center image float-none">
                    <a href="<?= MOVIE_CONTEST_URL ?>" ontouchstart=""><img src="<?= MOVIE_TITLE_IMG; ?>" alt="MOVIEコンテスト" class="img-fluid"></a>
                  </div>
                </div>
                <a href="<?= MOVIE_CONTEST_URL; ?>" ontouchstart="" data-aos="fade-up" data-aos-delay="100"><button class="btn btn-show mx-auto" ontouchstart="">ムービーを見る</button></a>
              </div>

              <div id="photo" class="contest-contents text-center pb-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4">PHOTO</h2>
                <div class="text-left contest-values" data-aos="fade-up" data-aos-delay="100">
                  <span class="thema"></span>
                  <span class="title">私の推し町</span>
                  <div class="team-member text-center image float-none">
                    <a href="<?= PHOTO_CONTEST_URL; ?>" ontouchstart=""><img src="<?= PHOTO_TITLE_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid"></a>
                  </div>
                </div>
                <a href="<?= PHOTO_CONTEST_URL; ?>" ontouchstart="" data-aos="fade-up" data-aos-delay="100"><button class="btn btn-show mx-auto" ontouchstart="">フォトを見る</button></a>
              </div>

              <div id="senryu" class="contest-contents text-center pb-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4">SENRYU</h2>
                <div class="text-left contest-values" data-aos="fade-up" data-aos-delay="100">
                  <span class="thema"></span>
                  <span class="title">つながり川柳</span>
                  <div class="team-member text-center image float-none">
                    <a href="<?= SENRYU_CONTEST_URL; ?>" ontouchstart=""><img src="<?= SENRYU_TITLE_IMG; ?>" alt="川柳コンテスト" class="img-fluid"></a>
                  </div>
                </div>
                <a href="<?= SENRYU_CONTEST_URL; ?>" ontouchstart="" data-aos="fade-up" data-aos-delay="100"><button class="btn btn-show mx-auto" ontouchstart="">川柳を見る</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section top-footer" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="site-section-heading mx-3">
            <div class="contest-contents border-0 my-0">
              <div class="team-member contest-values questionnaire" data-aos="fade-up" data-aos-delay="100">
                <a href="<?= QUESTIONNAIRE_URL; ?>"><img src="<?= get_template_directory_uri(); ?>/images/questionnaire_s.jpg" class="img-fluid"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section top-footer" data-aos="fade-up" data-aos-delay="100">
      <div class="container-fluid">
        <div class="row organizer contact-form">
          <div class="site-section-heading text-center my-5 w-border mx-auto w-100" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-3">
              <h2 class="font-weight-bold">CONTACT</h2>
              <div class="contents-border mt-1 mb-2"></div>
              <span class="organizer-text mt-4">Peace Designer Fes に関する<br>お問い合わせはこちら</span>
            </div>
            <a href="<?= CONTACT_URL; ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">お問い合わせ</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section top-footer" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row organizer">
          <div class="text-center w-border mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div>
              <span class="organizer-title">主催</span>
              <div class="contents-border short mt-2 mb-2"></div>
              <span class="organizer-text mt-4">Peace Designer Fes 実行委員会</span>
            </div>
            <div class="mt-5">
              <span class="organizer-title">協力</span>
              <div class="contents-border short mt-2 mb-2"></div>
              <span class="organizer-text mt-4">IAYSP-Japan</span>
            </div>
            <div class="mt-5">
              <span class="organizer-title">協賛</span>
              <div class="contents-border short mt-2 mb-2"></div>
              <span class="organizer-text mt-4">日本活魚株式会社<br>株式会社ハッピーワールド<br>株式会社コスモフーズ<br>十勝アルプス牧場</span> </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
