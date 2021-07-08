<?php get_header(); ?>
    <div class="site-blocks-cover overlay top">
      <div class="site-blocks-cover overlay top top2"></div>
      <div class="site-blocks-cover overlay top top3"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="logo_bg">
            <img src="<?= get_template_directory_uri(); ?>/images/tsunagari.png" class="logo-message-top" id="logo_1">
          </div>
          <div class="logo_bg">
            <img src="<?= get_template_directory_uri(); ?>/images/logo2.png" class="logo-center" id="logo_2">
          </div>
          <div class="logo_bg">
            <img src="<?= get_template_directory_uri(); ?>/images/online.png" class="logo-message-bottom" id="logo_3">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-top bg-light block-13 mt-5">
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="news-area m-4">
          <h4 class="news-title">NEWS</h4>
          <div class="owl-carousel">
            <div class="text-center p-3 p-md-5 bg-white">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/PHOTO_CONTEST.png" alt="Image" class="mx-auto img-fluid"></a>
            </div>
            <div class="text-center p-3 p-md-5 bg-white">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/PHOTO_CONTEST.png" alt="Image" class="mx-auto img-fluid"></a>
            </div>
            <div class="text-center p-3 p-md-5 bg-white">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/PHOTO_CONTEST.png" alt="Image" class="mx-auto img-fluid"></a>
            </div>
            <div class="text-center p-3 p-md-5 bg-white">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/PHOTO_CONTEST.png" alt="Image" class="mx-auto img-fluid"></a>
            </div>
            <div class="text-center p-3 p-md-5 bg-white">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/PHOTO_CONTEST.png" alt="Image" class="mx-auto img-fluid"></a>
            </div>
            <div class="text-center p-3 p-md-5 bg-white">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/PHOTO_CONTEST.png" alt="Image" class="mx-auto img-fluid"></a>
            </div>
          </div>
          <button class="custom-btn prev" ontouchstart=""></button>
          <button class="custom-btn next" ontouchstart=""></button>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-2 w-border col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-4">PEACE DESIGNER FES</h2>
            <p class="text-left">「つながりが描く私たちの未来」をテーマに、日本の魅力を楽しく再発見できるオンラインフェス！</p>
            <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">もっと詳しく</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container-fluid">
        <div class="row">
          <div class="site-section-heading text-center mb-3 w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
            <h2>CONTENTS LIST</h2>
            <div class="contents-border mt-1 mb-2"></div>
            <p class="text-center">楽しむコンテンツをクリック！</p>
          </div>
          <div class="site-section-heading text-center mb-5 w-border overflow-hidden m-0 p-0 w-100" data-aos="fade-up" data-aos-delay="100">
            <div class="contents-list-img text-center">
              <img src="<?= get_template_directory_uri(); ?>/images/contents_list.png" alt="Image" class="w-100">
              <ul class="contents-list-link">
                <li><a href="<?= esc_url(home_url('/peace-project/'));?>"><img src="<?= get_template_directory_uri(); ?>/images/contents_list-peace_project.png" alt="Image" class="img-fluid"></a></li>
                <li><a href="<?= esc_url(home_url('/senryu/'));?>"><img src="<?= get_template_directory_uri(); ?>/images/contents_list-tsunagari_senryu.png" alt="Image" class="img-fluid"></a></li>
                <li><a href="<?= esc_url(home_url('/live/'));?>"><img src="<?= get_template_directory_uri(); ?>/images/contents_list-live.png" alt="Image" class="img-fluid"></a></li>
                <li><a href="<?= esc_url(home_url('/short-movie/'));?>"><img src="<?= get_template_directory_uri(); ?>/images/contents_list-short_movie.png" alt="Image" class="img-fluid"></a></li>
                <li><a href="<?= esc_url(home_url('/photo-contest/'));?>"><img src="<?= get_template_directory_uri(); ?>/images/contents_list-photo_contest.png" alt="Image" class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section events-section">
      <div data-aos="fade-up event-bg" data-aos-delay="100">
        <div class="event-bg-left"></div>
        <div class="event-bg-right">
          <h2 class="event-bg-word-1">EVENT</h2>
          <h2 class="event-bg-word-2">イベント</h2>
        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row events-row">
          <div class="col-md-6 col-lg-6 col-xl-6 col-xl-6 mb-lg-6 image">
            <div class="team-member event">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/event1.jpg" alt="Image" class="img-fluid"></a>
            </div>
          </div>
          <div class="site-section-heading nopadding w-border col-md-6 col-lg-6 col-lg-6 col-xl-6 mx-auto t" data-aos="fade-up" data-aos-delay="100">
            <div class="message-under-image">
              <h2 class="mb-3 largeh2">LIVE</h2>
              <span class="live-message-under">ライブ</span>
              <p>ウェビナーやクイズなどの生配信企画！地域活性化で活躍する若手リーダーが語ります！見るだけでも、チャットで質問してもOK！</p>
              <div class="text-center">
                <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">タイムテーブルを見る</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="site-section-heading nopadding mb-5 w-border col-12 mx-auto t">
            <div class="message-under-image">
              <div class="pickup-contents text-center px-0 mx-0 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div>
                  <h2 class="">PICK UP</h2>
                </div>
                <div class="pickup-list px-3 pb-3">
                  <div class="row w-100 p-0 m-0">
                    <div class="team-member text-center image mb-4">
                      <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/video1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                  </div>
                  <div class="text-left mx-auto mb-3">
                    <h4 class="font-weight-bold pb-2">タイトル</h4>
                    <div>
                      リード文入ります。リード文入ります。リード文入ります。リード文入ります。リード文入ります。リード文入ります。
                    </div>
                  </div>
                  <div class="text-center mb-3">
                    <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">タイムテーブルを見る</button></a>
                  </div>
                  <div class="contents-border w-100 border-pickup my-2 pb-2"></div>
                </div>
                <div class="pickup-list px-3 pb-3">
                  <div class="row w-100 p-0 m-0">
                    <div class="team-member text-center image mb-4">
                      <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/video1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                  </div>
                  <div class="text-left mx-auto mb-3">
                    <h4 class="font-weight-bold pb-2">タイトル</h4>
                    <div>
                      リード文入ります。リード文入ります。リード文入ります。リード文入ります。リード文入ります。リード文入ります。
                    </div>
                  </div>
                  <div class="text-center mb-3">
                    <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">タイムテーブルを見る</button></a>
                  </div>
                  <div class="contents-border w-100 border-pickup my-2 pb-2"></div>
                </div>
                <div class="pickup-list px-3 pb-3">
                  <div class="row w-100 p-0 m-0">
                    <div class="team-member text-center image mb-4">
                      <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/video1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                  </div>
                  <div class="text-left mx-auto mb-3">
                    <h4 class="font-weight-bold pb-2">タイトル</h4>
                    <div>
                      リード文入ります。リード文入ります。リード文入ります。リード文入ります。リード文入ります。リード文入ります。
                    </div>
                  </div>
                  <div class="text-center mb-3">
                    <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">タイムテーブルを見る</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 mb-lg-6 image">
            <div class="team-member event">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/event1.jpg" alt="Image" class="img-fluid"></a>
            </div>
          </div>
          <div class="site-section-heading nopadding mb-5 w-border col-md-6 col-lg-6 col-xl-6 mx-auto t">
            <div class="message-under-image">
              <h2 class="mb-3 largeh2">UNION</h2>
              <span class="live-message-under">連合会</span>
              <p>全国で活躍しているピースデザイナーたちの活動を紹介します！あなたの地域のピースデザイナー達の活躍を覗いてみませんか？</p>
              <div class="text-center">
                <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-6 mb-lg-6 image">
            <div class="team-member event">
              <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/event1.jpg" alt="Image" class="img-fluid"></a>
            </div>
          </div>
          <div class="site-section-heading nopadding w-border col-md-6 col-lg-6 col-xl-6 mx-auto t">
            <div class="message-under-image">
              <h2 class="mb-3 largeh2">CONTEST</h2>
              <span class="live-message-under">コンテスト</span>
              <p>私たちの町の魅力を再発見！</p>
              <p>コロナでなかなか地元に戻れないそこのあなた！３つの企画の中から地元の"素敵"を再発見できませんか？</p>
            </div>
          </div>
          <div class="site-section-heading nopadding mb-5 w-border col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mx-auto t">
            <div class="message-under-image">
              <div class="contest-contents text-center pb-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4">SHORT MOVIE</h2>
                <div class="text-left contest-values">
                  <span class="thema">テーマ</span>
                  <span class="title">my favorite town</span>
                  <div class="team-member text-center image">
                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/movie2.png" alt="Image" class="img-fluid"></a>
                  </div>
                </div>
                <a href="#"><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
              </div>

              <div class="contest-contents text-center pb-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4">PHOTO</h2>
                <div class="text-left contest-values">
                  <span class="thema">テーマ</span>
                  <span class="title">私の推し町</span>
                  <div class="team-member text-center image">
                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid"></a>
                  </div>
                </div>
                <a href="photo_contest.html"><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
              </div>

              <div class="contest-contents text-center pb-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-4">SENRYU</h2>
                <div class="text-left contest-values">
                  <span class="thema">テーマ</span>
                  <span class="title">つながり川柳</span>
                  <div class="team-member text-center image">
                    <a href="#"><img src="<?= get_template_directory_uri(); ?>/images/senryu3.png" alt="Image" class="img-fluid"></a>
                  </div>
                </div>
                <a href="senryu.html"><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section fixed-menu zindex-tooltip m-0 p-0">
      <div class="container-fluid m-0 p-0">
        <div class="fixed-button">
          <div class="fixed-button-content">
            <a href="#">
              <div class="contents">
                <img src="<?= get_template_directory_uri(); ?>/images/fixed_live_button.png" alt="Image" class="img-fluid">
              </div>
            </a>
          </div>
          <div class="fixed-button-content">
            <a href="#">
              <div class="contents">
                <img src="<?= get_template_directory_uri(); ?>/images/fixed_union_button.png" alt="Image" class="img-fluid">
              </div>
            </a>
          </div>
          <div class="fixed-button-content">
            <a href="#">
              <div class="contents">
                <img src="<?= get_template_directory_uri(); ?>/images/fixed_contest_button.png" alt="Image" class="img-fluid">
              </div>
            </a>
          </div>
        </div>
        <div class="fixed-button-present">
          <div class="fixed-button-content">
            <a href="#" class="mr-3">
              <img src="<?= get_template_directory_uri(); ?>/images/fixed_present.png" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section top-footer" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row questionnaire">
          <div class="text-center mt-2 mb-2 w-border col-md-6 mx-auto">
            <div><img src="<?= get_template_directory_uri(); ?>/images/questionnaire.png" style="width:200px"></div>
            <p class="text-center font-weight-bold">アンケート募集中</p>
            <div class="term">実施期間：<span class="font-weight-bold">8</span>月<span class="font-weight-bold">7</span>日(土)～<span class="font-weight-bold">8</span>月<span class="font-weight-bold">9</span>日(月)</div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section top-footer" data-aos="fade-up" data-aos-delay="100">
      <div class="container-fluid">
        <div class="row organizer contact-form">
          <div class="text-center my-4 w-border mx-auto w-100" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-3">
              <span class="organizer-title font-weight-bold">CONTACT</span>
              <div class="contents-border short mt-2 mb-2"></div>
              <span class="organizer-text mt-4">Peace Designer Fes に関する<br>お問い合わせはこちら</span>
            </div>
            <a href="<?= esc_url(home_url('/contact-form/'));?>"><button class="btn btn-show mx-auto" ontouchstart="">お問い合わせ</button></a>
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
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
