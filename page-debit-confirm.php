<?php get_header(); ?>
    <div id="debit-confirm" class="site-section site-section-sm">
      <div class="container md p-md-0 text-center">
        <div class="title-icon">寄付・支援</div>
        <h5 class="font-weight-bold mb-6">銀行引き落としでの会費支払いの場合</h5>
<?php include 'parts/input-bar.php'; ?>
        <div class="font-weight-bold h5 mb-5">以下の内容で送信してよろしいでしょうか？</div>
        <form action="" method="post">
          <div class="form-title">お名前・ご連絡先</div>
          <div class="contact-form-content">
            <div class="row">
              <div class="col-4">
                <div>フリガナ</div>
                <div>氏名</div>
              </div>
              <div class="col-8">
                <div>ヤマダ　タロウ</div>
                <div>山田　太郎</div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">ご住所</div>
              <div class="col-8">
                <div >〒160-0022</div>
                <div>東京都新宿区新宿5-13-2成約ビル2F</div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">メールアドレス</div>
              <div class="col-8">example@abc.com</div>
            </div>
            <div class="row">
              <div class="col-4">電話番号</div>
              <div class="col-8">09012345678</div>
            </div>
          </div>
          <div class="text-center">
            <input type="submit" class="btn btn-normal mark-cyan" value="送信" onclick="return confirm('入力した内容でお問い合わせを送信してよろしいですか？')">
          </div>
        </form>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
