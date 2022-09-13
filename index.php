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
      'onReady': () => {
        document.querySelector('.chart-line').addEventListener('click', playStart);
        document.querySelector('.transition_scale').addEventListener('click', playStart);
      }
    }
  });
}
function playStart() {
  player.playVideo();
  document.querySelector('.poster_list').remove();
  document.querySelector('.chart-line').remove();
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
        <img src="<?= get_template_directory_uri(); ?>/images/ysp/omoi_noword.jpg" class="mainimg d-none d-md-block">
        <img src="<?= get_template_directory_uri(); ?>/images/ysp/omoi_noword_sp.jpg" class="mainimg d-md-none">
        <div class="contents">
          <div class="text">
            <h2 class="title underline-cyan">想いを紡ぎ、社会を彩る</h2>
            <p>やりたいこと×地域活性化を掛け合わせると、<br>どんな社会ができるだろう。<br>YSP-Japanはセミナーやプロジェクトを通して、<br>自分の可能性を発見し、<br>社会の魅力や課題を解決する若者を育み、<br>応援しています。</p>
            <div class="mb-3"><img src="<?= get_template_directory_uri(); ?>/images/ysp/icon.jpg" class="icon"></div>
            <button class="btn btn-normal cyan mx-auto d-none d-md-block">1ページで分かるYSP-Japan</button>
          </div>
        </div>
        <div class="d-md-none text-center"><button class="btn btn-normal cyan">1ページで分かるYSP-Japan</button></div>
      </div>
    </div>

    <div id="activity" class="site-section bg-lightgray">
      <div class="circle-bg gray"></div>
      <div class="circle-bg white"></div>
      <div class="container">
        <div class="title-icon">活動紹介</div>
        <div class="title-second">What we do</div>
        <p class="text-center mb-5">YSPは一人一人の青年が持つ力や<br class="d-md-none">やりがいを大切にしながら<br>全国各地で地域に密着した<br class="d-md-none">プロジェクト活動を行っています。</p>
        <div class="row my-4 px-3">
          <div class="col-md-6 activity-link px-md-4">
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
          <div class="col-md-6 activity-link px-md-4">
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
          <div class="col-md-6 activity-link px-md-4">
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
          <div class="col-md-6 activity-link px-md-4">
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
                <div>
                <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
                </div>
                <div class="d-lg-inline-flex">
                <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">地域の方の声1</div>
                <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                </div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
                <div>
                <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
                </div>
                <div class="d-lg-inline-flex">
                <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">地域の方の声2</div>
                <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                </div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
                <div>
                <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
                </div>
                <div class="d-lg-inline-flex">
                <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">地域の方の声3</div>
                <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                </div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
                <div>
                <img src="<?= get_template_directory_uri(); ?>/images/ysp/person1.png">
                </div>
                <div class="d-lg-inline-flex">
                <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">地域の方の声4</div>
                <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                </div>
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
                <div class="small text-cyan font-weight-bold">Let's join us</div>
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
                <div class="small text-cyan font-weight-bold">Let's join us</div>
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

    <div id="magazine" class="site-section bg-lightgray">
      <div class="circle-bg gray"></div>
      <div class="circle-bg white"></div>
      <div class="container">
        <div class="title-icon">Peace designer</div>
        <div class="title-second">Magazine</div>
        <p class="text-center mb-5">Peace designerのインタビューやライフスタイルを<br>お届けするWebマガジン</p>
        <div class="row my-4 px-3">
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
      <div class="container px-md-0">
        <div class="movie-frame">
          <div class="small font-weight-bold">紹介動画</div>
          <div class="team-member float-none overflow-visible">
            <div class="youtube_area">
              <iframe id="ytPlayer" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" src="https://www.youtube.com/embed/Be6eiPIHcjI?enablejsapi=1&origin=http%3A%2F%2Flocalhost"></iframe>
              <ul class="poster_list">
                <li class="current">
                  <img src="<?= get_template_directory_uri(); ?>/images/ysp/3-1.jpg" class="transition_scale" oncontextmenu="return false">
                  <span class="playicon"></span>
                </li>
              </ul>
            </div>
            <div class="chart-line"><p>Play Movie</p></div>
          </div>
          <div class="position-absolute vertical-rl small font-weight-bold">動画で分かるYSP-Japan</div>
          <div class="movie-article"></div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container logo3">
        <img src="<?= get_template_directory_uri(); ?>/images/ysp/logo_title.png">
        <img src="<?= get_template_directory_uri(); ?>/images/ysp/logo_title.png">
        <img src="<?= get_template_directory_uri(); ?>/images/ysp/logo_title.png">
      </div>
    </div>

    <div class="site-section top-footer">
      <div class="bg-cyan py-4">
        <div class="container">
          <a href="" class="font-weight-bold text-white">TOP</a>
        </div>
      </div>
      <div class="bg-lightgray py-4">
        <div class="container p-0 mb-4 footer-line-bottom">
          <a href="" class="font-weight-bold px-3 text-black d-none d-md-block">Menu</a>
          <div class="row">
            <ul class="menu-left col-md-8 mb-3 mb-md-5 px-0 px-md-3">
              <li>
              <div class="footer-link-circle d-md-table">
                <div class="d-md-table-cell"><a href="">YSPとは<span class="small font-weight-bold ml-1">- 1ページで分かるYSP -</span></a></div>
                <div class="d-md-table-cell"><a href="" class="pankuzu-next">団体概要</a></div>
                <div class="d-md-table-cell"><a href="" class="pankuzu-next">会長挨拶</a></div>
              </div>
              </li>
              <li>
              <div class="footer-link-circle">
                <div><a href="">セミナー・イベント</a></div>
              </div>
              </li>
              <li>
              <div class="footer-link-circle">
                <div><a href="">プロジェクト</a></div>
              </div>
              </li>
              <li class="footer-link-circle blank">
              </li>
            </ul>
            <ul class="menu-right col-md-4 footer-line-left text-left text-md-center font-weight-bold mb-3 mb-md-5">
              <li class="footer-link-circle right shop">
                <a href="">
                  <span>Shop</span>
                </a>
              </li>
              <li class="footer-link-circle right movie">
                <a href="">
                  <span>Movie YSP紹介動画</span>
                </a>
              </li>
              <li class="footer-link-circle right magazine">
                <a href="" class="d-table d-md-block">
                  <div class="d-table-cell d-md-block pr-2 pr-md-0">Webマガジン</div>
                  <div class="small font-weight-bold d-table-cell d-md-block">Peace designer Magazine</div>
                </a>
              </li>
            </ul>
          </div>
          <div class="donate container p-0">
            <div class="row">
              <ul class="col-md-8 mb-3 mb-md-5">
                <li class="footer-link-circle bg-white rounded d-lg-table">
                  <div class="d-lg-table-cell"><a href="">ご寄付・ご支援TOP</a></div>
                  <div class="d-lg-table-cell"><a href="" class="pankuzu-next">社会を彩る「毎月の支援」</a></div>
                  <div class="d-lg-table-cell"><a href="" class="pankuzu-next">今すぐ応援「今回の支援」</a></div>
                </li>
              </ul>
              <ul class="menu-right col-md-4 mb-5">
                <li class="footer-link-normal">
                  <a href="">サイトポリシー</a>
                </li>
                <li class="footer-link-normal">
                  <a href="">個人情報保護方針</a>
                </li>
                <li class="footer-link-normal">
                  <a href="">特定商取引法に基づく表示</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container p-0">
           <div class="row text-center align-items-center mx-0 mb-5 mb-md-4">
             <div class="footer-image col-md-3 p-0 pb-2 pb-md-0 text-md-left mx-auto mx-md-0">
               <a href="/"><img src="<?= get_template_directory_uri(); ?>/images/ysp/logo_footer.png" class="footer-logo w-100"></a>
             </div>
             <div class="footer-sns text-md-left col-md-6">
               <ul class="h-100 m-0 p-0">
                 <li class="d-inline h-100 mx-3 mx-md-2"><a href="" class="d-inline-flex align-items-center h-100"><i class="fa-brands fa-facebook fa-2x"></i><span class="small font-weight-bold d-none d-md-block mx-2">Facebook</span></a></li>
                 <li class="d-inline h-100 mx-3 mx-md-2"><a href="" class="d-inline-flex align-items-center h-100"><i class="fa-brands fa-square-instagram fa-2x"></i><span class="small font-weight-bold d-none d-md-block mx-2">Instagram</span></a></li>
                 <li class="d-inline h-100 mx-3 mx-md-2"><a href="" class="d-inline-flex align-items-center h-100"><i class="fa-brands fa-line fa-2x"></i><span class="small font-weight-bold d-none d-md-block mx-2">LINE</span></a></li>
               </ul>
             </div>
             <div class="footer-contact col-md-3 p-0 pb-2 pb-md-0">
               <button class="btn btn-normal mark-cyan rounded">お問い合わせ</button>
             </div>
           </div>
           <div class="w-100 text-center pt-3">
             <span>Copyright © YSP-Japan All Rights Reserved</span>
           </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
