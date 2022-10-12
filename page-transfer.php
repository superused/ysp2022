<?php get_header(); ?>
    <div id="transfer" class="site-section site-section-sm">
      <div class="container md p-md-0 text-center">
        <div class="title-icon">寄付・支援</div>
        <h5 class="font-weight-bold mb-6">口座振込</h5>
        <div class="cyan-wrap py-4 mb-6">
          <p class="small">本フォームに必要事項をご記入いただき、<br class="d-md-none">「送信」を押してください。<br>お申し込みいただいた方に、メールにて、振込先の口座をご案内いたします。<br>※大変恐れ入りますが、振り込み手数料はご負担をお願いしております。</p>
        </div>
        <div class="application mb-5">
          <div class="process active">入力</div>
          <div class="process">確認</div>
          <div class="process">完了</div>
        </div>
        <div class="font-weight-bold h5 mb-5">口座振込フォーム</div>
        <form action="" method="post">
          <div class="form-title">ご支援内容</div>
          <div class="contact-form-content support-detail">
            <div class="row">
              <div class="title">
                <span class="name">ご支援の内容</span>
                <span class="required">必須</span>
              </div>
              <div class="text vertical">
                <label for="5000yen"><input type="radio" name="support" value="5000" id="5000yen"><span>5,000円</span></label>
                <label for="10000yen"><input type="radio" name="support" value="10000" id="10000yen"><span>10,000円</span></label>
                <label for="30000yen"><input type="radio" name="support" value="30000" id="30000yen"><span>30,000円</span></label>
                <label for="100000yen"><input type="radio" name="support" value="100000" id="100000yen"><span>100,000円</span></label>
                <div class="horizontal justify-content-start">
                  <label for="other" class="other"><input type="radio" name="support" value="other" id="other"><span>その他</span></label>
                  <span><input type="text" name="support_other"></span>
                  <span class="mx-2">円</span>
                </div>
              </div>
            </div>
            <div class="row receipt">
              <div class="title">
                <span class="name">寄附金受領証明書<br>(領収書)のご希望</span>
                <span class="required">必須</span>
              </div>
              <div class="text">
                <label for="yes"><input type="radio" name="receipt" value="1" id="yes"><span>必要</span></label>
                <label for="no"><input type="radio" name="receipt" value="0" id="no"><span>不要</span></label>
              </div>
            </div>
          </div>
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
