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
        <?php the_content(); ?>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
