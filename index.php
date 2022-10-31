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
    videoId: '<?= YOUTUBE_INTRODUCE_ID; ?>',
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
<ul class="slider fadeup">
  <li><a href="<?= ABOUT_URL; ?>"><div><p class="font-weight-500">やりがい<br><span class="batsu"></span><br>地域活性化</p><button class="btn btn-normal btn-slider">1ページで分かるYSP</button><video src="<?= IMG_DIR; ?>/top.mp4" autoplay loop muted></video></div></a></li>
  <li><a href="<?= PROJECT_URL; ?>"><div><button class="btn btn-normal btn-slider cyan">プロジェクトを見る</button><img src="<?= IMG_DIR; ?>/first_view2_sp.png" class="d-md-none"><img src="<?= IMG_DIR; ?>/first_view2.png" class="d-none d-md-block"></div></a></li>
  <li><a href="<?= SUPPORT_URL; ?>"><div><button class="btn btn-normal btn-slider cyan">寄付する</button><img src="<?= IMG_DIR; ?>/YSP_support_sp.jpg" class="d-md-none"><img src="<?= IMG_DIR; ?>/YSP_support.jpg" class="d-none d-md-block"></div></a></li>
</ul>
    <div id="introduce" class="site-section fadeup">
      <div class="contents-box">
        <img src="<?= IMG_DIR; ?>/omoi_noword.png" class="mainimg d-none d-md-block fadeup">
        <img src="<?= IMG_DIR; ?>/omoi_noword_sp.png" class="mainimg d-md-none fadeup">
        <div class="contents">
          <div class="text">
            <h2 class="title underline-cyan fadeup">想いを紡ぎ、社会を彩る</h2>
            <p class="mb-5 fadeup">やりたいこと✕地域活性化を掛け合わせると、<br>どんな社会ができるだろう。<br>YSP-Japanはセミナーやプロジェクトを通して、<br>自分の可能性を発見し、<br>社会の魅力や課題を解決する若者を育み、<br>応援しています。</p>
            <div class="mb-5 fadeup"><img src="<?= IMG_DIR; ?>/peace_black.png" class="icon"></div>
            <a href="<?= ABOUT_URL; ?>" class="fadeup"><button class="btn btn-normal cyan mx-auto d-none d-md-block">1ページで分かるYSP-Japan</button></a>
          </div>
        </div>
        <div class="d-md-none text-center my-3 fadeup"><a href="<?= ABOUT_URL; ?>"><button class="btn btn-normal cyan">1ページで分かるYSP-Japan</button></a></div>
      </div>
    </div>

<?php include 'parts/activity-block.php'; ?>

    <div id="voice" class="site-section fadeup">
      <div class="container px-0">
        <div class="title-icon fadeup">メンバー／地域の声</div>
        <div class="title-second fadeup">Voice</div>
        <ul class="voice-slider py-3 fadeup">
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

    <div id="take-action" class="site-section fadeup">
      <div class="container px-0">
        <div class="title-icon fadeup">参加・支援する</div>
        <div class="title-second fadeup">Take action</div>
        <div class="row mx-0">
          <div class="col-md-6 link">
            <div class="box team-member overflow-auto fadeup">
              <a href="<?= PROJECT_URL; ?>" class="text-black">
                <div class="small text-cyan font-weight-bold">Let's join us</div>
                <div class="font-weight-bold pb-1 mb-4">一緒に活動しませんか？</div>
                <div class="image mb-1 thumbnail">
                  <img src="<?= IMG_DIR; ?>/YSP-Go.jpg" class="img-fluid">
                </div>
                <div class="m-4">
                  <div class="small font-weight-bold mb-4 lh-2">仲間と共にあなたの住む町をより良くしよう！</div>
                  <div class="check"><button class="btn btn-normal cyan small-btn">詳しく見る</button></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 link">
            <div class="box team-member overflow-auto fadeup">
              <a href="<?= SUPPORT_URL; ?>" class="text-black">
                <div class="small text-cyan font-weight-bold">Support us</div>
                <div class="font-weight-bold pb-1 mb-4">応援してください！</div>
                <div class="image mb-1 thumbnail">
                  <img src="<?= IMG_DIR; ?>/5-2.jpg" class="img-fluid">
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

    <div id="magazine" class="site-section bg-lightgray fadeup">
      <div class="circle-bg gray start"></div>
      <div class="circle-bg white start"></div>
      <div class="container">
        <div class="title-icon fadeup">Peace designer</div>
        <div class="title-second fadeup">Magazine</div>
        <p class="font-weight-bold text-center mb-5 fadeup">Peace designerのインタビューやライフスタイルを<br>お届けするWebマガジン</p>
        <div class="row justify-content-center my-4 px-3">
          <div class="col-md-6 activity-link first row main px-md-2 px-lg-3 mb-3 fadeup">
            <a href="<?= MAGAZINE_1; ?>" class="box team-member-small h-100" target="_blank">
              <div class="image thumbnail bg-peacedesigner">
                <img src="<?= IMG_DIR; ?>/note.jpg">
              </div>
              <div class="article">Article<br>vol.1</div>
              <div class="item">
                <div class="font-weight-bold my-3">Peace designerの公式noteはじめます！</div>
                <div class="small my-3">はじめまして！Peace designerのnote編集部、Kokiです。この度は読んでくれるみなさんの毎日を…</div>
                <div class="small magazine-border">Peace designer Magazine></div>
              </div>
            </a>
          </div>
          <div class="col-md-6 activity-link row mx-0 px-md-3 px-lg-2">
            <div class="slide-view col-md-6 px-2 pb-3 fadeup">
              <a href="<?= MAGAZINE_2; ?>" class="box team-member" target="_blank">
                <div class="image thumbnail overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/note/6-2.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.2</div>
                </div>
                <div class="item">
                  <div class="font-weight-bold my-3 small">【訪問医療・織田亮インタビュー】<br>「最後に先生に出会えてよかった」患者さんに最後まで寄り添う</div>
                </div>
              </a>
            </div>
            <div class="slide-view col-md-6 px-2 pb-3 fadeup">
              <a href="<?= MAGAZINE_3; ?>" class="box team-member" target="_blank">
                <div class="image thumbnail overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/note/6-3.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.3</div>
                </div>
                <div class="item">
                  <div class="font-weight-bold my-3 small">「誰かのため」の原点を探して</div>
                </div>
              </a>
            </div>
            <div class="slide-view col-md-6 px-2 pb-3 fadeup">
              <a href="<?= MAGAZINE_4; ?>" class="box team-member" target="_blank">
                <div class="image thumbnail overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/note/6-4.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.4</div>
                </div>
                <div class="item">
                  <div class="font-weight-bold my-3 small">誰かのためにカッコよく生きた偉人の名言</div>
                </div>
              </a>
            </div>
            <div class="slide-view col-md-6 px-2 pb-3 fadeup">
              <a href="<?= MAGAZINE_5; ?>" class="box team-member" target="_blank">
                <div class="image thumbnail overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/note/6-5.jpg" class="img-fluid">
                  <div class="article">Article<br>vol.5</div>
                </div>
                <div class="item">
                  <div class="font-weight-bold my-3 small">アメリカで感じた本当の“フレンドリー”の意味</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center fadeup"><a href="<?= MAGAZINE_URL; ?>"><button class="btn btn-normal cyan" target="_blank">もっと見る</button></a></div>
      <div class="circle-bg gray end"></div>
      <div class="circle-bg white end"></div>
    </div>

    <div id="news" class="site-section fadeup">
      <div class="container px-0">
        <div class="title-icon fadeup">YSPからのお知らせ</div>
        <div class="title-second fadeup">News</div>
        <div class="row mx-0 my-5">
<?php
$posts = get_posts([
  'posts_per_page' => 3,
  'offset' => 0,
  'orderby' => 'date',
  'order' => 'desc',
  'post_type' => 'report',
]);
foreach($posts as $post):
$terms = get_the_terms($post->ID, 'team_name');
$term_name = !empty($terms[0]) ? $terms[0]->name : '';
?>
          <div class="col-md-4 link fadeup">
            <div class="box team-member overflow-auto">
              <a href="<?= get_permalink($post->ID); ?>" class="text-black">
                <div class="image mb-4 overflow-hidden thumbnail">
                  <?= get_the_post_thumbnail($newsData->ID) ?: '<img src="' . NO_IMAGE_URL . '" class="img-fluid">'; ?>
                </div>
                <div class="px-4 pb-4 px-md-2 pb-md-2 px-lg-4 pb-lg-4">
                  <div class="font-weight-bold text-center mb-3"><?= $post->post_title; ?></div>
                  <div class="location">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="align-baseline mr-2"><?= date('Y.m.d', strtotime($post->post_date)); ?></span>
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="align-baseline font-weight-bold"><?= $term_name; ?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
<?php
endforeach;
?>
        </div>
      </div>
      <div class="text-center fadeup"><a href="<?= NEWS_URL; ?>"><button class="btn btn-normal cyan">詳しく見る</button></a></div>
    </div>

    <div id="movie" class="site-section position-relative fadeup">
      <div class="container px-md-0">
        <div class="movie-frame">
          <div class="small font-weight-bold fadeup">紹介動画</div>
          <div class="team-member float-none overflow-visible fadeup">
            <div class="youtube_area">
              <iframe id="ytPlayer" allowfullscreen="1" allow="autoplay; encrypted-media" src="<?= YOUTUBE_EMBED; ?>"></iframe>
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
          <div class="position-absolute vertical-rl small font-weight-bold fadeup">動画で分かるYSP-Japan</div>
        </div>
      </div>
    </div>
    <div class="site-section py-0 fadeup">
      <div class="container logo3">
        <img src="<?= IMG_DIR; ?>/peace_cyan.png">
        <img src="<?= IMG_DIR; ?>/peace_cyan.png">
        <img src="<?= IMG_DIR; ?>/peace_cyan.png">
      </div>
    </div>
    <div id="sns-plugin" class="site-section fadeup">
      <div class="container px-0">
        <div class="row justify-content-center mx-0">
<?php /*
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
 */ ?>
          <div class="col-12 col-md-4 px-md-2 text-center mb-5">
            <div class="d-flex justify-content-center align-items-center mb-2">
              <i class="colored fa-brands fa-line fa-2x"></i>
              <span class="h6 font-weight-bold m-2">LINE</span>
            </div>
            <div><img src="<?= IMG_DIR; ?>/lineqr/M_gainfriends_qr.png" class="w-50 mb-3"></div>
            <a href="<?= SNS_LINE_URL; ?>" target="_blank"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
          </div>
        </div>
      </div>
    </div>
<?php /*
<div id="fb-root"></div>
<script id="fbid" async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0&appId=581009629454542&autoLogAppEvents=1" nonce="a5H3pzKi"></script>
*/ ?>
<?php get_footer('nomargin'); ?>
