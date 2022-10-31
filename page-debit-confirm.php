<?php get_header(); ?>
    <div id="debit-confirm" class="site-section site-section-sm fadeup">
      <div class="container md p-md-0 text-center">
        <div class="title-icon fadeup">寄付・支援</div>
        <h5 class="font-weight-bold mb-6 fadeup">銀行引き落としでの会費支払いの場合</h5>
<?php include 'parts/input-bar.php'; ?>
        <div class="font-weight-bold h5 mb-5 fadeup">以下の内容で送信してよろしいでしょうか？</div>
        <?php the_content(); ?>
      </div>
    </div>
<?php get_footer('nomargin'); ?>
