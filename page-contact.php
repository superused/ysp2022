<?php get_header(); ?>
<div class="site-section pb-md-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0 contact-form">
        <div class="site-section py-0">
          <div class="site-section-heading w-border mx-auto col-12 pt-5 pb-5 pl-4 pr-4" data-aos="fade-up" data-aos-delay="100">
            <h1 class="top-subtitle mt-3">CONTACT</h1>
            <div class="contents-border m-0 mx-md-auto mt-md-3"></div>
            <p class="mt-4 mb-md-2 text-md-center">お問い合わせ内容につきましては、下記のフォームへご入力の上、送信してください。</p>
            <p class="text-danger mb-md-5 text-md-center">＊必須項目</p>
            <div class="contact-form-content bg-white p-4 mb-3">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 d-md-none">
        <?= get_sidebar();?>
      </div>
    </div>
  </div>
</div>
<?php get_footer('nomargin'); ?>
