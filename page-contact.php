<?php get_header(); ?>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8 p-0">
        <div class="site-section-heading contact-form mb-3 w-border mx-auto col-12 pt-5 pb-5 pl-4 pr-4" data-aos="fade-up" data-aos-delay="100">
          <h2><?php the_title(); ?></h2>
          <div class="contents-border m-0"></div>
          <p class="mt-4">お問い合わせ内容につきましては、下記のフォームへご入力の上、送信してください。</p>
          <p class="text-danger">＊必須項目</p>
          <div class="bg-white p-4">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-mg-4 col-lg-4 col-xl-4">
        <?= get_sidebar();?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
