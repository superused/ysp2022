<?php get_header(); ?>
    <div class="site-section site-section-sm w-100 pt-0">
      <img src="<?= IMG_DIR; ?>/YSP_support.jpg" class="mx-auto w-100">
    </div>

    <div id="ability" class="site-section site-section-sm">
      <div class="container p-md-0">
        <h4 class="text-center font-weight-bold mb-5">未来を”一緒に”彩る</h4>
        <div class="title-icon">皆様からの支援でできること</div>
        <div class="list row">
          <div class="item col-12 col-md-4">
            <img src="<?= IMG_DIR; ?>/support_1.png">
            <p class="title">地域を活性化するプロジェクト活動</p>
            <p class="text">全国各地の地域課題の解決に<br>取り組むプロジェクトの作成</p>
          </div>
          <div class="item col-12 col-md-4">
            <img src="<?= IMG_DIR; ?>/support_2.png" class="w-100">
            <p class="title">植林活動（海外支援）</p>
            <p class="text">未来の子供たちに美しい環境を残すための<br>植林プロジェクトを推進</p>
          </div>
          <div class="item col-12 col-md-4">
            <img src="<?= IMG_DIR; ?>/support_3.png" class="w-100">
            <p class="title">未来を担う若者の育成</p>
            <p class="text">社会の魅力や課題を発見し、<br>解決する若者を育む学習企画を推進</p>
          </div>
          <div class="item col-12 col-md-4">
            <img src="<?= IMG_DIR; ?>/support_4.png" class="w-100">
            <p class="title">社会に発信するイベントの運営</p>
            <p class="text">若者のアイデアを社会に発信するフェスや<br>プレゼンイベントを開催</p>
          </div>
          <div class="item col-12 col-md-4">
            <img src="<?= IMG_DIR; ?>/support_5.png" class="w-100">
            <p class="title">広報活動</p>
            <p class="text">社会に輝く若者の声を届けるマガジンや<br>ウェブコンテンツが充実</p>
          </div>
        </div>
      </div>
    </div>

    <div class="support site-section bg-lightgray py-6">
      <div class="container px-4 px-md-0">
        <div class="text-center">
          <p class="small">若者がプロジェクトを継続して、<br class="d-md-none">各地域に笑顔を届けられるように</p>
          <p class="h6 font-weight-bold mb-5">ご希望の支援方法をお選びください</p>
        </div>
        <div class="tabs">
          <a data-type="monthly" class="tab active" href="#">
            <p>社会を彩る</p>
            <b class="title">
              <img src="<?= IMG_DIR; ?>/check_1.png">
              <span>毎月の支援</span>
            </b>
          </a>
          <a data-type="once" class="tab" href="#">
            <p>今すぐ応援</p>
            <b class="title">
              <img src="<?= IMG_DIR; ?>/check_2.png">
              <span>今回の支援</span>
            </b>
          </a>
        </div>
        <div data-view="monthly" class="contents">
          <h4>社会を彩る<br class="d-md-none">「毎月のご支援」</h4>
          <div class="btn-cyan-round small-btn">YSPサポーター</div>
          <p class="pb-3">特に応援したいプロジェクトをお選びいただき、継続して支援していただくことができます。<br>毎月2,000円で継続的にご支援いただける「YSPサポーター」です。<br>また、植林事業のみ応援した方は毎月500円から継続的にご支援いただける「植林サポーター」も選択していただけます。</p>
          <p class="font-weight-bold">お支払い方法は下記からお選びいただけます</p>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="pay-type">クレジットカード</div>
              <div class="pay-type-comment">お使いいただけるカード</div>
              <div class="row cards">
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_visa.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_master.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_amex.png">
                </div>
              </div>
              <a href="#" class="btn btn-normal cyan">クレジットカードで申し込む</a>
            </div>
            <div class="col-12 col-md-6">
              <div class="pay-type">口座引き落とし</div>
              <div class="pay-type-comment">各種銀行口座</div>
              <div class="cards">※ご登録の住所に手続き用紙をお送りしますので、<br class="d-none d-md-block">記入・捺印のうえ10日以内にご返送をお願いします。</div>
              <a href="#" class="btn btn-normal cyan">口座引き落としで申し込む</a>
            </div>
          </div>
        </div>
        <div data-view="once" class="contents" style="display: none;">
          <h4>今すぐ応援<br class="d-md-none">「今回の支援」</h4>
          <p class="pb-3">ご都合の良い時に、ご自由な金額でご寄付いただけます。</p>
          <p class="font-weight-bold">お支払い方法は下記からお選びいただけます</p>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="pay-type">クレジットカード</div>
              <div class="pay-type-comment">お使いいただけるカード</div>
              <div class="row cards">
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_visa.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_master.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_amex.png">
                </div>
              </div>
              <a href="#" class="btn btn-normal cyan">クレジットカードで申し込む</a>
            </div>
            <div class="col-12 col-md-6">
              <div class="pay-type">口座振込</div>
              <div class="pay-type-comment">各種銀行口座</div>
              <div class="cards"></div>
              <a href="#" class="btn btn-normal cyan">口座振込で申し込む</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="thanks-message" class="site-section site-section-sm">
      <div class="container md p-md-0 text-center">
        <div class="title-icon mb-5">YSPメンバーからの感謝メッセージ</div>
        <div class="row mx-0 mb-3">
          <div class="col-12 col-md-4 text-center">
            <img src="<?= IMG_DIR; ?>/ysp_project.jpg" class="circle-img-icon mb-2">
            <p class="font-weight-bold">YSPプロジェクトコーディネーター<br>河野弘暉より</p>
          </div>
          <div class="col-12 col-md-8">
            <p class="balloon support line-wide">サポーターの皆さま、温かいご支援いただき、ありがとうございます。<br>私は2017年から、YSPでインドネシアの植林プロジェクトに力を注いでいます。現地で自然の尊さを体感し、植林した経験は私の生きがいになっています。また、毎年現地に行くたびに木々は成長しており、環境問題の解決の一助になっています。プロジェクトを続けていくことができるのも皆さまのおかげです。これからも地球環境を守るための活動を続けていきます。</p>
          </div>
        </div>
        <a href="#" class="btn btn-normal cyan">「毎月の支援」を申し込む</a>
      </div>
    </div>

    <div id="support-voice" class="site-section site-section-sm">
      <div class="container md p-md-0 text-center">
        <div class="title-icon mb-5">ご支援者の声</div>
        <div class="row mx-0">
          <div class="col-12 col-md-4 text-center">
            <img src="<?= IMG_DIR; ?>/voice_face/man.png" class="circle-img-icon top bg-cyan mb-2">
            <p class="font-weight-bold">20代男性</p>
          </div>
          <div class="col-12 col-md-8">
            <p class="balloon support line-wide">私は学生の頃、開発途上国や東北の被災地に行き、ボランティア活動をしていました。「当たり前」だと思っていたことが途上国や被災地では当たり前ではないことに、衝撃を受けました。社会人になってからは海外や被災地まで行くことはできませんが、少しでも貢献できたらと思い、YSP-Japanの活動を支援しています。<br>活動報告や広報冊子を通して各地の活動を見て、「自分も頑張ろう！」と、いつも元気をもらっています。YSPの各連合会で活動する若者にはいつも感謝しています。これからも有意義な活動を継続してほしいと思います。</p>
          </div>
        </div>
      </div>
    </div>

    <div id="supporter" class="site-section site-section-sm">
      <div class="container md p-md-0 text-center">
        <div class="title-icon mb-5">サポーターの方へ</div>
        <div class="row mx-0 mb-3 text-center">
          <div class="col-12 col-md-7 mb-4">
            <h6 class="font-weight-bold">≪&nbsp;定期的（隔月）&nbsp;≫</h6>
            <div class="line-1rem mb-4">全国の活動の近況を報告「YSP NEWS LETTER」をお届け</div>
            <img src="<?= IMG_DIR; ?>/NewsLetter_01c_ol-01.jpg">
          </div>
          <div class="col-12 col-md-5 mb-4">
            <h6 class="font-weight-bold">≪&nbsp;年2回&nbsp;≫</h6>
            <div class="line-1rem mb-2">未来を描くアイデアが詰まったライフスタイル誌<br>「Peace designerマガジン」をお届け</div>
            <img src="<?= IMG_DIR; ?>/peacedesigner.jpg">
          </div>
        </div>
        <a href="#" class="btn btn-normal cyan">「毎月の支援」を申し込む</a>
      </div>
    </div>

    <div id="faq" class="site-section site-section-sm">
      <div class="container md p-md-0">
        <div class="title-icon mb-5">よくある質問</div>
        <div class="d-flex">
          <div>
            <span class="circle-word bg-cyan">Q.1</span>
          </div>
          <div class="p-2">
            <div class="title">税制優遇は受けられますか？</div>
            <div>YSPは国連NGOではありますが、国内では任意団体であり、税制優遇対象外のため受けることができませんので、ご了承ください。</div>
          </div>
        </div>
        <div class="d-flex">
          <div>
            <span class="circle-word bg-cyan">Q.2</span>
          </div>
          <div class="p-2">
            <div class="title">領収書は頂けますか？</div>
            <div>はい。必要な方には、領収書を準備いたします。</div>
          </div>
        </div>
        <div class="d-flex">
          <div>
            <span class="circle-word bg-cyan">Q.3</span>
          </div>
          <div class="p-2">
            <div class="title">支払い方法の変更や連絡先を変更したい</div>
            <div>お問い合わせより、変更内容を記載してお送りください。</div>
          </div>
        </div>
      </div>
    </div>

    <div class="support site-section bg-lightgray py-6">
      <div class="container px-4 px-md-0">
        <div class="text-center">
          <p class="small">若者がプロジェクトを継続して、<br class="d-md-none">各地域に笑顔を届けられるように</p>
          <p class="h6 font-weight-bold mb-5">ご希望の支援方法をお選びください</p>
        </div>
        <div class="tabs">
          <a data-type="monthly" class="tab active" href="#">
            <p>社会を彩る</p>
            <b class="title">
              <img src="<?= IMG_DIR; ?>/check_1.png">
              <span>毎月の支援</span>
            </b>
          </a>
          <a data-type="once" class="tab" href="#">
            <p>今すぐ応援</p>
            <b class="title">
              <img src="<?= IMG_DIR; ?>/check_2.png">
              <span>今回の支援</span>
            </b>
          </a>
        </div>
        <div data-view="monthly" class="contents">
          <h4>社会を彩る<br class="d-md-none">「毎月のご支援」</h4>
          <div class="btn-cyan-round small-btn">YSPサポーター</div>
          <p class="pb-3">特に応援したいプロジェクトをお選びいただき、継続して支援していただくことができます。<br>毎月2,000円で継続的にご支援いただける「YSPサポーター」です。<br>また、植林事業のみ応援した方は毎月500円から継続的にご支援いただける「植林サポーター」も選択していただけます。</p>
          <p class="font-weight-bold">お支払い方法は下記からお選びいただけます</p>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="pay-type">クレジットカード</div>
              <div class="pay-type-comment">お使いいただけるカード</div>
              <div class="row cards">
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_visa.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_master.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_amex.png">
                </div>
              </div>
              <a href="#" class="btn btn-normal cyan">クレジットカードで申し込む</a>
            </div>
            <div class="col-12 col-md-6">
              <div class="pay-type">口座引き落とし</div>
              <div class="pay-type-comment">各種銀行口座</div>
              <div class="cards">※ご登録の住所に手続き用紙をお送りしますので、<br class="d-none d-md-block">記入・捺印のうえ10日以内にご返送をお願いします。</div>
              <a href="#" class="btn btn-normal cyan">口座引き落としで申し込む</a>
            </div>
          </div>
        </div>
        <div data-view="once" class="contents" style="display: none;">
          <h4>今すぐ応援<br class="d-md-none">「今回の支援」</h4>
          <p class="pb-3">ご都合の良い時に、ご自由な金額でご寄付いただけます。</p>
          <p class="font-weight-bold">お支払い方法は下記からお選びいただけます</p>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="pay-type">クレジットカード</div>
              <div class="pay-type-comment">お使いいただけるカード</div>
              <div class="row cards">
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_visa.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_master.png">
                </div>
                <div class="col-4">
                  <img src="<?= IMG_DIR; ?>/credit_amex.png">
                </div>
              </div>
              <a href="#" class="btn btn-normal cyan">クレジットカードで申し込む</a>
            </div>
            <div class="col-12 col-md-6">
              <div class="pay-type">口座振込</div>
              <div class="pay-type-comment">各種銀行口座</div>
              <div class="cards"></div>
              <a href="#" class="btn btn-normal cyan">口座振込で申し込む</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer('nomargin'); ?>
