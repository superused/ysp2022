<?php get_header(); ?>
    <div id="debit" class="site-section site-section-sm">
      <div class="container md p-md-0 text-center">
        <div class="title-icon">寄付・支援</div>
        <h5 class="font-weight-bold mb-6">銀行引き落としでの会費支払いの場合</h5>
        <div class="cyan-wrap py-4 mb-6">
          <p class="small mb-3">所定の入会申込書に必要事項をご入力いただき、YSP連合会事務局にご提出ください。</p>
          <p class="small">※入会申込書をお持ちでない場合は、以下のフォームよりお申し込みください。ご指定のご住所に申込書を郵送いたします。<br>ご記入・捺印のうえ10日以内にご返送をお願いします。</p>
        </div>
        <div class="application mb-5">
          <div class="process active">入力</div>
          <div class="process">確認</div>
          <div class="process">完了</div>
        </div>
        <div class="font-weight-bold h5 mb-5">入会申込書請求フォーム</div>
        <form action="" method="post">
          <div class="form-title">お名前・ご連絡先</div>
          <div class="contact-form-content">
            <div class="row">
              <div class="title">
                <span class="name">フリガナ<br>氏名</span>
                <span class="required">必須</span>
              </div>
              <div class="text vertical">
                <input type="text" placeholder="例）ヤマダ　タロウ">
                <input type="text" placeholder="例）山田　太郎">
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">ご住所</span>
                <span class="required">必須</span>
              </div>
              <div class="text vertical">
                <span class="postcode"><input type="text" name="postcode" placeholder="例）1600022" maxLength="7"></span>
                <div class="horizontal">
                  <span class="pref">
<?php include 'parts/select-pref.php'; ?>
                  </span>
                  <span class="address1"><input type="text" name="address1" placeholder="例）新宿区"></span>
                </div>
                <span class="address2"><input type="text" name="address2" placeholder="例）新宿5-13-2"></span>
                <span class="address3"><input type="text" name="address3" placeholder="例）成約ビル2F"></span>
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">メールアドレス</span>
                <span class="required">必須</span>
              </div>
              <div class="text vertical">
                <input type="text" placeholder="例）example@abc.com">
                <span class="mail_confirm"><input type="text" placeholder="例）example@abc.com"></span>
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">電話番号</span>
                <span class="required">必須</span>
              </div>
              <div class="text">
                <input type="text" placeholder="例）09012345678">
              </div>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" class="btn btn-normal mark-cyan" value="送信" onclick="return confirm('入力した内容でお問い合わせを送信してよろしいですか？')">
          </div>
        </form>
          <?php the_content(); ?>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
