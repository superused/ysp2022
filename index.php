<?php get_header(); ?>
<script>
var tag = document.createElement('script');
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('ytPlayer', {
    height: '390',
    width: '640',
    videoId: 'Be6eiPIHcjI',
    events: {
      'onReady': onPlayerReady,
      // 'onStateChange': onPlayerStateChange,
      // 'onError': onPlayerError
    }
  });
}
// function onPlayerReady(event) {
//   console.log('ready')
//   // console.log(event);
//   // let playButton = document.getElementById("play");
//   // console.log(playButton);
//   // let el = document.getElementsByClassName("videoWrapper");
//   // playButton.addEventListener("click", function () {
//   //   console.log('click')
//   //   player.playVideo();
//   //   playButton.style.display ="none";
//   //   el[0].classList.add("pv");
//   // });
// }

// プレイヤが準備できたら呼び出される
function onPlayerReady(event) {
  console.log('start');

  document.querySelector('.transition_scale').addEventListener('click', event => {
  console.log('click')
    console.log(player)
    player.playVideo();
    document.querySelector('.poster_list').remove()
  })
}

</script>
<ul class="slider">
  <li><a href="#"><div><p class="font-weight-bold">やりがい<br><span class="batsu"></span><br>地域活性化</p><button class="btn btn-normal btn-slider">1ページで分かるYSP</button><img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg"></div></a></li>
  <li><a href="#"><div><button class="btn btn-normal btn-slider cyan">プロジェクトを見る</button><video src="<?= get_template_directory_uri(); ?>/images/ysp/top.mp4" autoplay loop muted></video></div></a></li>
  <li><a href="#"><video src="<?= get_template_directory_uri(); ?>/images/ysp/katariba.mp4" autoplay loop muted></a></li>
  <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/ysp/3-2.jpg"></a></li>
  <li><a href="#"><video src="<?= get_template_directory_uri(); ?>/images/ysp/sample.mp4" autoplay loop muted></a></li>
  <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/images/ysp/3-3.jpg"></a></li>
</ul>
    <div id="introduce" class="site-section">
      <div class="contents-box">
        <img src="<?= get_template_directory_uri(); ?>/images/ysp/omoi_noword.jpg" class="mainimg">
        <div class="contents">
          <div class="text">
            <h2 class="title underline-cyan">想いを紡ぎ、社会を彩る</h2>
            <p>やりたいこと×地域活性化を掛け合わせると、<br>どんな社会ができるだろう。<br>YSP-Japanはセミナーやプロジェクトを通して、<br>自分の可能性を発見し、<br>社会の魅力や課題を解決する若者を育み、<br>応援しています。</p>
            <div class="mb-3"><img src="<?= get_template_directory_uri(); ?>/images/ysp/icon.jpg" class="icon"></div>
            <button class="btn btn-normal cyan">1ページで分かるYSP-Japan</button>
          </div>
        </div>
      </div>
    </div>

    <div id="activity" class="site-section">
      <div class="circle-bg gray"></div>
      <div class="circle-bg white"></div>
      <div class="container">
        <div class="title-icon">活動紹介</div>
        <div class="title-second">What we do</div>
        <p class="text-center mb-5">YSPは一人一人の青年が持つ力ややりがいを大切にしながら<br>全国各地で地域に密着したプロジェクト活動を行っています。</p>
        <div class="row my-4">
          <div class="col-md-6 activity-link">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/smile-jyuku.png" class="overlap">
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                  <div class="catch">塾に行けない子たちのために</div>
                  <div class="name">スマイル塾</div>
                  <div class="check"><button class="btn btn-normal cyan small">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 activity-link">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/smile-jyuku.png" class="overlap">
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                  <div class="catch">塾に行けない子たちのために</div>
                  <div class="name">スマイル塾</div>
                  <div class="check"><button class="btn btn-normal cyan small">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 activity-link">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/smile-jyuku.png" class="overlap">
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                  <div class="catch">塾に行けない子たちのために</div>
                  <div class="name">スマイル塾</div>
                  <div class="check"><button class="btn btn-normal cyan small">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 activity-link">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/smile-jyuku.png" class="overlap">
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                  <div class="catch">塾に行けない子たちのために</div>
                  <div class="name">スマイル塾</div>
                  <div class="check"><button class="btn btn-normal cyan small">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="text-center"><a href=""><button class="btn btn-normal cyan">プロジェクトをもっと見る</button></a></div>
      </div>
      <div class="circle-bg gray bottom"></div>
      <div class="circle-bg white bottom"></div>
    </div>

    <div id="voice" class="site-section">
      <div class="container px-0">
        <div class="title-icon">メンバー／地域の声</div>
        <div class="title-second">Voice</div>
        <ul class="voice-slider py-3">
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
              <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
              <div class="mark-cyan px-2 mx-2 rounded">地域の方の声1</div>
              <div class="location"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
              <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
              <div class="mark-cyan px-2 mx-2 rounded">地域の方の声2</div>
              <div class="location"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
              <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
              <div class="mark-cyan px-2 mx-2 rounded">地域の方の声3</div>
              <div class="location"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
              <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
              <div class="mark-cyan px-2 mx-2 rounded">地域の方の声4</div>
              <div class="location"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div id="take-action" class="site-section">
      <div class="container px-0">
        <div class="title-icon">参加・支援する</div>
        <div class="title-second">Take action</div>
        <div class="row mx-0">
          <div class="col-md-6 link">
            <div class="box team-member overflow-auto">
              <a href="" class="text-black">
                <div class="small text-cyan font-weight-bold">let's join us</div>
                <div class="font-weight-bold pb-1 mb-4">一緒に活動しませんか？</div>
                <div class="image mb-4">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                </div>
                <div class="small font-weight-bold mb-4">仲間と共にあなたの住む町をより良くしよう！</div>
                <div class="check"><button class="btn btn-normal cyan">詳しく見る</button></div>
              </a>
            </div>
          </div>
          <div class="col-md-6 link">
            <div class="box team-member overflow-auto">
              <a href="" class="text-black">
                <div class="small text-cyan font-weight-bold">let's join us</div>
                <div class="font-weight-bold pb-1 mb-4">一緒に活動しませんか？</div>
                <div class="image mb-4">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                </div>
                <div class="small font-weight-bold mb-4">仲間と共にあなたの住む町をより良くしよう！</div>
                <div class="check"><button class="btn btn-normal cyan">詳しく見る</button></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="magazine" class="site-section">
      <div class="circle-bg gray"></div>
      <div class="circle-bg white"></div>
      <div class="container">
        <div class="title-icon">Peace designer</div>
        <div class="title-second">Magazine</div>
        <p class="text-center mb-5">Peace designerのインタビューやライフスタイルを<br>お届けするWebマガジン</p>
        <div class="row my-4">
          <div class="col-md-6 activity-link px-md-2 px-lg-3 mb-2">
            <a href="" class="box team-member-small h-100">
              <div class="image bg-peacedesigner">
                <img src="<?= get_template_directory_uri(); ?>/images/ysp/note.jpg">
              </div>
                <div class="article">Article<br>vol.1</div>
              <div class="text-black p-4">
                <div class="font-weight-bold my-3">Peace designerの公式noteはじめます！</div>
                <div class="small my-3">はじめまして！Peace designerのnote編集部、Kokiです。この度は読んでくれるみなさんの毎日を…</div>
                <div class="small">Peace designer Magazine></div>
              </div>
            </a>
          </div>
          <div class="col-md-6 activity-link row mx-auto px-md-0 px-lg-3">
            <div class="col-md-6 px-2 pb-2">
              <a href="" class="box team-member">
                <div class="image overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.1</div>
                </div>
                <div class="text-black p-2">
                  <div class="font-weight-bold my-3 my-md-2 my-lg-3 small">【訪問医療・織田亮インタビュー】<br>「最後に先生に出会えてよかった」患者さんに最後まで寄り添う</div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-2 pb-2">
              <a href="" class="box team-member">
                <div class="image overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.1</div>
                </div>
                <div class="text-black p-2">
                  <div class="font-weight-bold my-3 my-md-2 my-lg-3 small">【訪問医療・織田亮インタビュー】<br>「最後に先生に出会えてよかった」患者さんに最後まで寄り添う</div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-2 pb-2">
              <a href="" class="box team-member">
                <div class="image overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.1</div>
                </div>
                <div class="text-black p-2">
                  <div class="font-weight-bold my-3 my-md-2 my-lg-3 small">【訪問医療・織田亮インタビュー】<br>「最後に先生に出会えてよかった」患者さんに最後まで寄り添う</div>
                </div>
              </a>
            </div>
            <div class="col-md-6 px-2 pb-2">
              <a href="" class="box team-member">
                <div class="image overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.1</div>
                </div>
                <div class="text-black p-2">
                  <div class="font-weight-bold my-3 my-md-2 mb-lg-3 small">【訪問医療・織田亮インタビュー】<br>「最後に先生に出会えてよかった」患者さんに最後まで寄り添う</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center"><a href=""><button class="btn btn-normal cyan">もっと見る</button></a></div>
      <div class="circle-bg gray bottom"></div>
      <div class="circle-bg white bottom"></div>
    </div>

    <div id="news" class="site-section">
      <div class="container px-0">
        <div class="title-icon">YSPからのお知らせ</div>
        <div class="title-second">News</div>
        <div class="row mx-0 my-5">
          <div class="col-md-4 link">
            <div class="box team-member overflow-auto">
              <a href="" class="text-black">
                <div class="image mb-4 overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                </div>
                <div class="px-4 pb-4 px-md-2 pb-md-2 px-lg-4 pb-lg-4">
                  <div class="font-weight-bold text-center mb-3">【東濃】クリーンウォーキング</div>
                  <div class="location">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="align-baseline mr-2">2021.05.08</span>
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="align-baseline font-weight-bold">YSP多摩東京</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 link">
            <div class="box team-member overflow-auto">
              <a href="" class="text-black">
                <div class="image mb-4 overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                </div>
                <div class="px-4 pb-4 px-md-2 pb-md-2 px-lg-4 pb-lg-4">
                  <div class="font-weight-bold text-center mb-3">【東濃】クリーンウォーキング</div>
                  <div class="location">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="align-baseline mr-2">2021.05.08</span>
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="align-baseline font-weight-bold">YSP多摩東京</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 link">
            <div class="box team-member overflow-auto">
              <a href="" class="text-black">
                <div class="image mb-4 overflow-hidden">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="img-fluid">
                </div>
                <div class="px-4 pb-4 px-md-2 pb-md-2 px-lg-4 pb-lg-4">
                  <div class="font-weight-bold text-center mb-3">【東濃】クリーンウォーキング</div>
                  <div class="location">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="align-baseline mr-2">2021.05.08</span>
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="align-baseline font-weight-bold">YSP多摩東京</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center"><a href=""><button class="btn btn-normal cyan">詳しく見る</button></a></div>
    </div>

    <div id="movie" class="site-section position-relative">
      <div class="container px-0">
        <div class="movie-frame">
          <div class="small font-weight-bold">紹介動画</div>

<div class="youtube_area">
  <iframe id="ytPlayer" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/Be6eiPIHcjI?enablejsapi=1&origin=http%3A%2F%2Flocalhost" width="640" height="390" frameborder="0"></iframe>
  <ul class="poster_list">
    <li class="current">
     <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="transition_scale" oncontextmenu="return false">
     <span class="playicon"></span>
    </li>
    <li class="chart-line">abbbb</li>
  </ul>
</div>
          <div class="position-absolute vertical-rl small font-weight-bold">動画で分かるYSP-Japan</div>
          <div class="movie-article"></div>
        </div>
      </div>
    </div>

    <div id="peace-designer-fes" class="site-section">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-2 w-border col-12 mx-auto w-100" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mb-4 top-subtitle">PEACE DESIGNER !!!!!!!!</h1>
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
            <div class="team-member event">
              <a href="<?= LIVE_URL; ?>" ontouchstart=""><img src="<?= LIVE_TITLE_IMG; ?>" alt="Image" class="img-fluid"></a>
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
              <div class="team-member event">
                <a href="<?= PROJECT_URL; ?>" ontouchstart=""><img src="<?= PROJECT_TITLE_IMG; ?>" alt="Image" class="img-fluid"></a>
              </div>
            </div>
            <div class="site-section-heading nopadding w-border col-12 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="message-under-image">
                <h2 class="mb-3 largeh2">PROJECT</h2>
                <span class="live-message-under">活動紹介コーナー</span>
                <p>全国で活躍しているピースデザイナーたちの活動を紹介します！あなたの地域のピースデザイナー達の活躍を覗いてみませんか？</p>
                <div class="text-center text-md-left">
                  <a href="<?= PROJECT_URL; ?>" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">一覧を見る</button></a>
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
