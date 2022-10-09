<?php get_header(); ?>
    <div id="contact" class="site-section site-section-sm">
      <div class="container md p-md-0">
        <div class="title-icon">問い合わせ</div>
        <div class="title-second">contact</div>
        <div class="font-weight-bold mb-5 text-center text-md-left">下記のフォームに入力いただき、<br class="d-md-none">お問い合わせください。</div>
        <div class="cyan-wrap py-4 p-md-4">
          <p class="font-weight-bold text-center text-md-left mb-md-1">※　お問い合わせにあたってのご案内　※</p>
          <p class="mb-md-1">・お問い合わせには迅速に対応いたしますが、団体内で検討が必要な項目である場合、返信に最大5営業日ほどかかる場合がございますので、ご了承ください。</p>
          <p class="mb-md-1">・セミナーの講師派遣も当フォームでお受けしております。日時や場所、内容などのご要望をご記入ください。多くのご依頼をいただいているため、場所や時期、講演者等によって、ご希望に添いかねる場合がございますので、予めご了承ください。</p>
          <p class="mb-0">・ご不明点などは、電話03-5379-0550（平日10時～17時）でのご相談も承っております。</p>
        </div>
        <form action="" method="post">
          <div class="contact-form-content bg-white py-4 mb-3">
            <div class="row">
              <div class="title">
                <span class="name">お名前</span>
                <span class="required">必須</span>
              </div>
              <div class="text">
                <span class="sei"><input type="text" placeholder="例）山田"></span><br class="d-md-none">
                <span class="mei"><input type="text" placeholder="例）太郎"></span>
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">会社名</span>
              </div>
              <div class="text">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">部署・役職名</span>
              </div>
              <div class="text">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">メールアドレス</span>
                <span class="required">必須</span>
              </div>
              <div class="text">
                <input type="text" placeholder="例）example@mail.com">
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
            <div class="row">
              <div class="title">
                <span class="name">タイトル</span>
                <span class="required">必須</span>
              </div>
              <div class="text">
                <input type="text" placeholder="例）プロジェクト参加について">
              </div>
            </div>
            <div class="row">
              <div class="title">
                <span class="name">お問い合わせ内容</span>
                <span class="required">必須</span>
              </div>
              <div class="text">
                <textarea></textarea>
              </div>
            </div>
          </div>
          <div>
            <p class="small mb-5">※ご登録いただいた個人情報は、当団体の個人情報保護方針にもとづいて適正に管理・取り扱いをさせていただきます。<br>活動の報告・案内のメールをお送りする場合もございますが、ご了承いただければ幸いです。</p>
          </div>
          <div class="text-center">
            <input type="submit" class="btn btn-normal mark-cyan" value="送信" onclick="return confirm('入力した内容でお問い合わせを送信してよろしいですか？')">
          </div>
        </form>
          <?php the_content(); ?>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
