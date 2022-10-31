<?php get_header(); ?>
    <div id="debit" class="site-section site-section-sm fadeup">
      <div class="container md p-md-0 text-center">
        <div class="title-icon fadeup">寄付・支援</div>
        <h5 class="font-weight-bold mb-6 fadeup">銀行引き落としでの会費支払いの場合</h5>
        <div class="cyan-wrap py-4 mb-6 fadeup">
          <p class="small mb-3">所定の入会申込書に必要事項をご入力いただき、YSP連合会事務局にご提出ください。</p>
          <p class="small">※入会申込書をお持ちでない場合は、以下のフォームよりお申し込みください。ご指定のご住所に申込書を郵送いたします。<br>ご記入・捺印のうえ10日以内にご返送をお願いします。</p>
        </div>
<?php include 'parts/input-bar.php'; ?>
        <div class="font-weight-bold h5 mb-5 fadeup">入会申込書請求フォーム</div>
        <?php the_content(); ?>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
