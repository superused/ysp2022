<?php get_header(); ?>
    <div class="w-100 mb-6">
      <img src="<?= IMG_DIR; ?>/first_view2.png" class="mx-auto w-100">
    </div>

    <div class="site-section site-section-sm">
      <div class="container p-md-0">
        <div class="title-second">Make Smiles<br>一緒に作る、笑顔あふれる社会！</div>
        <div class="text-center font-weight-bold">YSP-Japanは、<br>地域の方々と若者が共に支え合いながら<br>地域課題の解決に向けた<br>プロジェクトに取り組んでいます。</div>
      </div>
    </div>

    <div id="activity" class="site-section bg-lightgray my-6">
      <div class="circle-bg gray start"></div>
      <div class="circle-bg white start"></div>
      <div class="container">
        <div class="title-icon">注目のプロジェクトを探す</div>
        <div class="title-second">Project</div>
        <div class="row my-4 px-3">
<?php $datas = $util->getProjectDetail(); ?>
<?php foreach ($datas as $data): ?>
<?php   include 'parts/project-frame.php'; ?>
<?php endforeach; ?>
        </div>
      </div>
      <div class="circle-bg gray end"></div>
      <div class="circle-bg white end"></div>
    </div>

    <div id="search" class="site-section site-section-sm">
      <div class="container md p-md-0">
        <div class="search-title">活動場所で探す</div>
        <div class="search-contents">
          <div class="row">
            <div class="region">東日本</div>
            <div class="contents">
              <a href="#" class="btn search-btn">宮城</a>
            </div>
          </div>
          <div class="row">
            <div class="region">関東</div>
            <div class="contents">
              <a href="#" class="btn search-btn">群馬</a>
              <a href="#" class="btn search-btn">西埼玉</a>
              <a href="#" class="btn search-btn">多摩東京</a>
              <a href="#" class="btn search-btn">神奈川</a>
            </div>
          </div>
          <div class="row">
            <div class="region">中日本</div>
            <div class="contents">
              <a href="#" class="btn search-btn">岐阜</a>
              <a href="#" class="btn search-btn">南愛知</a>
            </div>
          </div>
          <div class="row">
            <div class="region">西日本</div>
            <div class="contents">
              <a href="#" class="btn search-btn">滋賀</a>
              <a href="#" class="btn search-btn">北大阪</a>
              <a href="#" class="btn search-btn">南大阪</a>
              <a href="#" class="btn search-btn">鳥取</a>
              <a href="#" class="btn search-btn">西広島</a>
              <a href="#" class="btn search-btn">岩国</a>
              <a href="#" class="btn search-btn">愛媛</a>
            </div>
          </div>
          <div class="row">
            <div class="region">九州</div>
            <div class="contents">
              <a href="#" class="btn search-btn">宮崎</a>
              <a href="#" class="btn search-btn">長崎</a>
            </div>
          </div>
          <div class="row">
            <div class="region">海外</div>
            <div class="contents">
              <a href="#" class="btn search-btn long">インドネシア</a>
              <a href="#" class="btn search-btn long">カンボジア</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container md p-md-0">
        <div class="voice-box">
          <div class="content type1">
            <div class="image">
              <img src="<?= IMG_DIR; ?>/voice_face/man_1.png">
            </div>
            <div class="fukidashi">
              <div class="text">
                <div>活動を始める前は、あまり地域のことを知らなかったですが、傘踊りを練習することで郷土愛が深まりました！</div>
                <div class="small">(鳥取しゃんしゃん祭り(YSP鳥取)/男性))</div>
              </div>
            </div>
          </div>
          <div class="content type2">
            <div class="image">
              <img src="<?= IMG_DIR; ?>/voice_face/woman_1.png">
            </div>
            <div class="fukidashi">
              <div class="text">
                <div>私たち若者がいい街づくりに貢献できると実感！何よりも地域の方との交流の輪が広がりました！</div>
                <div class="small">(花壇プロジェクト(YSP西広島)/女性))</div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-icon">参加者の声</div>
        <div class="title-second">Voice</div>
        <div class="voice-box">
          <div class="content type1">
            <div class="image">
              <img src="<?= IMG_DIR; ?>/voice_face/woman_2.png">
            </div>
            <div class="fukidashi">
              <div class="text">
                <div>たくさんの人の「ありがとう」がやりがいです。あと、メンバーともより仲良くなれて活動が楽しい！</div>
                <div class="small">(One Heartクリーンアッププロジェクト(西埼玉)/女性))</div>
              </div>
            </div>
          </div>
          <div class="content type2">
            <div class="image">
              <img src="<?= IMG_DIR; ?>/voice_face/man_2.png">
            </div>
            <div class="fukidashi">
              <div class="text">
                <div>活動を続けることで、自分の人生の中でも、新しいことにもどんどんチャレンジいく自信になりました。</div>
                <div class="small">(大和川清掃プロジェクト(YSP南大阪)/男性))</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="recent-report" class="site-section site-section-sm bg-lightgray">
      <div class="container">
        <div class="title-icon normal">最新の活動リポート</div>
        <div class="row">
          <div class="col-12 col-md-2_4 mb-4">
            <div class="team-member overflow-auto bg-white">
              <a href="" class="text-black">
                <div class="overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
                </div>
                <div class="piece_bw"></div>
                <div class="p-4 mt-3 text-center">
                  <div class="small">YSP西埼玉</div>
                  <div class="font-weight-bold">One Heart<br>クリーンアッププロジェクト</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-2_4 mb-4">
            <div class="team-member overflow-auto bg-white">
              <a href="" class="text-black">
                <div class="overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
                </div>
                <div class="piece_bw"></div>
                <div class="p-4 mt-3 text-center">
                  <div class="small">YSP西埼玉</div>
                  <div class="font-weight-bold">One Heart<br>クリーンアッププロジェクト</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-2_4 mb-4">
            <div class="team-member overflow-auto bg-white">
              <a href="" class="text-black">
                <div class="overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
                </div>
                <div class="piece_bw"></div>
                <div class="p-4 mt-3 text-center">
                  <div class="small">YSP西埼玉</div>
                  <div class="font-weight-bold">One Heart<br>クリーンアッププロジェクト</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-2_4 mb-4">
            <div class="team-member overflow-auto bg-white">
              <a href="" class="text-black">
                <div class="overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
                </div>
                <div class="piece_bw"></div>
                <div class="p-4 mt-3 text-center">
                  <div class="small">YSP西埼玉</div>
                  <div class="font-weight-bold">One Heart<br>クリーンアッププロジェクト</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-2_4 mb-4">
            <div class="team-member overflow-auto bg-white">
              <a href="" class="text-black">
                <div class="overflow-hidden">
                  <img src="<?= IMG_DIR; ?>/3-1.jpg" class="img-fluid">
                </div>
                <div class="piece_bw"></div>
                <div class="p-4 mt-3 text-center">
                  <div class="small">YSP西埼玉</div>
                  <div class="font-weight-bold">One Heart<br>クリーンアッププロジェクト</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php get_footer('nomargin'); ?>
