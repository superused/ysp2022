<?php get_header(); ?>
    <div id="transfer" class="site-section site-section-sm fadeup">
      <div class="container md p-md-0 text-center">
        <div class="title-icon fadeup">寄付・支援</div>
        <h5 class="font-weight-bold mb-6 fadeup">口座振込</h5>
        <div class="cyan-wrap py-4 mb-6 fadeup">
          <p class="small">本フォームに必要事項をご記入いただき、<br class="d-md-none">「送信」を押してください。<br>お申し込みいただいた方に、メールにて、振込先の口座をご案内いたします。<br>※大変恐れ入りますが、振り込み手数料はご負担をお願いしております。</p>
        </div>
<?php include 'parts/input-bar.php'; ?>
        <div class="font-weight-bold h5 mb-5 fadeup">口座振込フォーム</div>
        <?php the_content(); ?>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
