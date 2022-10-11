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
  console.log('playstart')
  player.playVideo();
  document.querySelector('.poster_list').remove();
  document.querySelector('.chart-line').remove();
  document.querySelector('.movie-logo').remove();
}
</script>
<ul class="slider">
  <li><a href="<?= ABOUT_URL; ?>"><div><p class="font-weight-bold">やりがい<br><span class="batsu"></span><br>地域活性化</p><button class="btn btn-normal btn-slider">1ページで分かるYSP</button><img src="<?= IMG_DIR; ?>/3-1.jpg"></div></a></li>
  <li><a href="#"><div><button class="btn btn-normal btn-slider cyan">プロジェクトを見る</button><video src="<?= IMG_DIR; ?>/top.mp4" autoplay loop muted></video></div></a></li>
  <li><a href="#"><video src="<?= IMG_DIR; ?>/katariba.mp4" autoplay loop muted></a></li>
  <li><a href="#"><img src="<?= IMG_DIR; ?>/3-2.jpg"></a></li>
  <li><a href="#"><video src="<?= IMG_DIR; ?>/sample.mp4" autoplay loop muted></a></li>
  <li><a href="#"><img src="<?= IMG_DIR; ?>/3-3.jpg"></a></li>
</ul>
    <div id="introduce" class="site-section">
      <div class="contents-box">
        <img src="<?= IMG_DIR; ?>/omoi_noword.png" class="mainimg d-none d-md-block">
        <img src="<?= IMG_DIR; ?>/omoi_noword_sp.png" class="mainimg d-md-none">
        <div class="contents">
          <div class="text">
            <h2 class="title underline-cyan">想いを紡ぎ、社会を彩る</h2>
            <p class="mb-5">やりたいこと✕地域活性化を掛け合わせると、<br>どんな社会ができるだろう。<br>YSP-Japanはセミナーやプロジェクトを通して、<br>自分の可能性を発見し、<br>社会の魅力や課題を解決する若者を育み、<br>応援しています。</p>
            <div class="mb-5"><img src="<?= IMG_DIR; ?>/peace_black.png" class="icon"></div>
            <a href="<?= ABOUT_URL; ?>"><button class="btn btn-normal cyan mx-auto d-none d-md-block">1ページで分かるYSP-Japan</button></a>
          </div>
        </div>
        <div class="d-md-none text-center my-3"><a href="<?= ABOUT_URL; ?>"><button class="btn btn-normal cyan">1ページで分かるYSP-Japan</button></a></div>
      </div>
    </div>

    <div id="activity" class="site-section bg-lightgray my-6">
      <div class="circle-bg gray start"></div>
      <div class="circle-bg white start"></div>
      <div class="container">
        <div class="title-icon">活動紹介</div>
        <div class="title-second">What we do</div>
        <p class="font-weight-bold text-center mb-5">YSPは一人一人の青年が持つ力や<br class="d-md-none">やりがいを大切にしながら<br>全国各地で地域に密着した<br class="d-md-none">プロジェクト活動を行っています。</p>
        <div class="row my-4 px-3">
          <div class="col-md-6 activity-link px-md-4">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= IMG_DIR; ?>/project_tamatokyo.jpg" class="img-fluid">
                  <div class="overlap">
                    <img src="<?= IMG_DIR; ?>/activity-study-support.png">
                    <div class="activity-title">Study-support</div>
                  </div>
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP多摩東京</span></div>
                  <div class="catch">塾に行けない子たちのために</div>
                  <div class="name">スマイル塾</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 activity-link px-md-4">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= IMG_DIR; ?>/project_miyagi.jpg" class="img-fluid">
                  <div class="overlap">
                    <img src="<?= IMG_DIR; ?>/activity-special-skill.png">
                    <div class="activity-title">Special Skill</div>
                  </div>
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>宮城</span></div>
                  <div class="catch">得意な写真を活かして地域を盛り上げる</div>
                  <div class="name">nono style</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 activity-link px-md-4">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= IMG_DIR; ?>/project_ehime.jpg" class="img-fluid">
                  <div class="overlap">
                    <img src="<?= IMG_DIR; ?>/activity-activation.png">
                    <div class="activity-title">activation</div>
                  </div>
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP愛媛</span></div>
                  <div class="catch">少子高齢化の進む町を元気に</div>
                  <div class="name">二神島活性化プロジェクト</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 activity-link px-md-4">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= IMG_DIR; ?>/project_nishisaitama.jpg" class="img-fluid">
                  <div class="overlap">
                    <img src="<?= IMG_DIR; ?>/activity-cleaning-activity.png">
                    <div class="activity-title">Cleaning Activity</div>
                  </div>
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span>YSP西埼玉</span></div>
                  <div class="catch">私たちの住む町を綺麗な場所に</div>
                  <div class="name">One Heartクリーンアッププロジェクト</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="text-center"><a href=""><button class="btn btn-normal cyan">プロジェクトをもっと見る</button></a></div>
      </div>
      <div class="circle-bg gray end"></div>
      <div class="circle-bg white end"></div>
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
                  <img src="<?= IMG_DIR; ?>/voice_face/man_1.png">
                </div>
                <div class="d-lg-inline-flex">
                  <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">地域の方の声</div>
                  <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>山口県</span></div>
                </div>
              </div>
              <p class="m-0">YSPの活動をきっかけに、子供たちや地域の方々との様々な関わりの場を持つことができています。楽しい時間をありがとうございます。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
                <div>
                  <img src="<?= IMG_DIR; ?>/voice_face/man_2.png">
                </div>
                <div class="d-lg-inline-flex">
                  <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">活動メンバーの声</div>
                  <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>千葉県</span></div>
                </div>
              </div>
              <p class="m-0">活動を続けていると、ゴミを捨てる人が減って街がきれいになっていることを感じます。近所のかたにも「ご苦労様。ありがとう」と声をかけていただき、やりがいになっています。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
                <div>
                  <img src="<?= IMG_DIR; ?>/voice_face/woman_1.png">
                </div>
                <div class="d-lg-inline-flex">
                  <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">地域の方の声</div>
                  <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>宮城県</span></div>
                </div>
              </div>
              <p class="m-0">学生たちが商店街の活性化のために、得意なカメラで商品の撮影やモデルとなってお店を紹介してくれたことがとても嬉しかったです。</p>
            </div>
          </li>
          <li>
            <div class="box project-frame">
              <div class="row m-0 pb-3 align-items-center">
                <div>
                  <img src="<?= IMG_DIR; ?>/voice_face/woman_2.png">
                </div>
                <div class="d-lg-inline-flex">
                  <div class="mark-cyan px-2 mx-2 mb-2 mb-lg-0 rounded">活動メンバーの声</div>
                  <div class="location px-2 px-lg-0"><i class="fa-solid fa-location-dot"></i><span>愛媛県</span></div>
                </div>
              </div>
              <p class="m-0">農家の方々のお手伝いで、ミカンの収穫をしました！普段自分達が食べている作物も、一つ一つ大切に育てられているんだと食べ物の大切さを実感しました。</p>
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
                <div class="image mb-1">
                  <img src="<?= IMG_DIR; ?>/YSPへGo.png" class="img-fluid">
                </div>
                <div class="m-4">
                  <div class="small font-weight-bold mb-4 lh-2">仲間と共にあなたの住む町をより良くしよう！</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">詳しく見る</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 link">
            <div class="box team-member overflow-auto">
              <a href="" class="text-black">
                <div class="small text-cyan font-weight-bold">Support us</div>
                <div class="font-weight-bold pb-1 mb-4">応援してください！</div>
                <div class="image mb-1">
                  <img src="<?= IMG_DIR; ?>/YSPへGo.png" class="img-fluid">
                </div>
                <div class="m-4">
                  <div class="small font-weight-bold mb-4 lh-1">ご支援を通して、各地の活動を共に<br>作ることができます。応援をよろしくお願いします。</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">詳しく見る</button></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="magazine" class="site-section bg-lightgray">
      <div class="circle-bg gray start"></div>
      <div class="circle-bg white start"></div>
      <div class="container">
        <div class="title-icon">Peace designer</div>
        <div class="title-second">Magazine</div>
        <p class="font-weight-bold text-center mb-5">Peace designerのインタビューやライフスタイルを<br>お届けするWebマガジン</p>
        <div class="row my-4 px-3">
          <div class="col-md-6 activity-link px-md-2 px-lg-3 mb-2">
            <a href="" class="box team-member-small h-100">
              <div class="image bg-peacedesigner">
                <img src="<?= IMG_DIR; ?>/note.jpg">
              </div>
                <div class="article">Article<br>vol.1</div>
              <div class="text-black p-4">
                <div class="font-weight-bold my-3">Peace designerの公式noteはじめます！</div>
                <div class="small my-3">はじめまして！Peace designerのnote編集部、Kokiです。この度は読んでくれるみなさんの毎日を…</div>
                <div class="small magazine-border">Peace designer Magazine></div>
              </div>
            </a>
          </div>
          <div class="col-md-6 activity-link row mx-auto px-md-0 px-lg-3">
            <div class="col-md-6 px-2 pb-2">
              <a href="" class="box team-member">
                <div class="image overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
      <div class="circle-bg gray end"></div>
      <div class="circle-bg white end"></div>
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
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
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="transition_scale" oncontextmenu="return false">
                  <span class="playicon"></span>
                </li>
              </ul>
            </div>
            <div class="chart-line"><p>Play Movie</p></div>
            <div class="movie-logo">
            </div>
          </div>
          <div class="position-absolute vertical-rl small font-weight-bold">動画で分かるYSP-Japan</div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container logo3">
        <img src="<?= IMG_DIR; ?>/peace_cyan.png">
        <img src="<?= IMG_DIR; ?>/peace_cyan.png">
        <img src="<?= IMG_DIR; ?>/peace_cyan.png">
      </div>
    </div>
    <div id="sns-plugin" class="site-section">
      <div class="container px-0">
        <div class="row mx-0">
          <div class="col-12 col-md-4 px-md-2 text-center mb-5">
            <div class="w-100"></div>
            <div class="d-flex justify-content-center align-items-center mb-2">
              <i class="colored fa-brands fa-facebook fa-2x"></i>
              <span class="h6 font-weight-bold m-2">Facebook</span>
            </div>
            <iframe id="facebook-plugin" src="" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=500&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=581009629454542" width="500" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          </div>
          <div class="col-12 col-md-4 px-md-2 text-center mb-5">
            <div class="d-flex justify-content-center align-items-center mb-2">
              <i class="colored fa-brands fa-square-instagram fa-2x"></i>
              <span class="h6 font-weight-bold m-2">Instagram</span>
            </div>
          </div>
          <div class="col-12 col-md-4 px-md-2 text-center mb-5">
            <div class="d-flex justify-content-center align-items-center mb-2">
              <i class="colored fa-brands fa-line fa-2x"></i>
              <span class="h6 font-weight-bold m-2">LINE</span>
            </div>
            <div>
            <img src="<?= IMG_DIR; ?>/lineqr/M_gainfriends_qr.png" class="w-50 mb-3">
            </div>
            <a href="https://lin.ee/L06C7bH" target="_blank"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
          </div>
        </div>
      </div>
    </div>
<div id="fb-root"></div>
<script id="fbid" async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0&appId=581009629454542&autoLogAppEvents=1" nonce="a5H3pzKi"></script>
<?php get_footer(); ?>
