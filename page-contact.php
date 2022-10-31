<?php get_header(); ?>
    <div id="contact" class="site-section site-section-sm fadeup">
      <div class="container md p-md-0">
        <div class="title-icon fadeup">問い合わせ</div>
        <div class="title-second fadeup">contact</div>
        <div class="font-weight-bold mb-5 text-center text-md-left fadeup">下記のフォームに入力いただき、<br class="d-md-none">お問い合わせください。</div>
        <div class="cyan-wrap py-4 p-md-4 fadeup">
          <p class="font-weight-bold text-center text-md-left mb-md-1">※　お問い合わせにあたってのご案内　※</p>
          <p class="mb-md-1">・お問い合わせには迅速に対応いたしますが、団体内で検討が必要な項目である場合、返信に最大5営業日ほどかかる場合がございますので、ご了承ください。</p>
          <p class="mb-md-1">・セミナーの講師派遣も当フォームでお受けしております。日時や場所、内容などのご要望をご記入ください。多くのご依頼をいただいているため、場所や時期、講演者等によって、ご希望に添いかねる場合がございますので、予めご了承ください。</p>
          <p class="mb-0">・ご不明点などは、電話03-5379-0550（平日10時～17時）でのご相談も承っております。</p>
        </div>
        <?php the_content(); ?>
      </div>
    </div>
<script>
document.addEventListener('wpcf7mailsent', () => {
  location.href = '<?= CONTACT_COMPLETE_URL; ?>';
}, false);
</script>
<?php get_footer('nomargin'); ?>
