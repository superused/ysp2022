    <footer class="site-footer<?= !empty($noMargin) ? ' mt-0' : ''; ?>" data-aos="fade-up" data-aos-delay="100">
      <div class="container pt-5">
        <div class="row">
          <div class="text-center mb-5 col-12 d-md-none">
            <a href="<?= HOME_URL;?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/logo1.png" width="150"></a>
          </div>
          <div class="footer-link-box mb-4 col-12 text-center">
            <div class="footer-link-upper">
              <a class="footer-link-img d-none d-md-block" href="<?= HOME_URL;?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/logo2.png" width="200"></a>
              <div class="footer-link-value"><a href="<?= GOODS_SHOP_URL; ?>" class="link text-center mx-auto" ontouchstart="" target="_blank">グッズショップ（外部サイト）</a></div>
              <div class="footer-link-value"><a href="<?= CONTACT_URL; ?>" class="link text-center mx-auto" ontouchstart="">お問い合わせ</a></div>
            </div>
            <div class="row justify-content-center align-items-center sns-icon mt-3">
              <span class="m-2"><a href="<?= SNS_INSTAGRAM_URL; ?>" ontouchstart="" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icon_instagram.png" alt="Image"></a></span>
              <span class="m-2"><a href="<?= SNS_LINE_URL; ?>" ontouchstart="" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icon_line.png" alt="Image"></a></span>
              <span class="m-2"><a href="<?= SNS_YOUTUBE_URL; ?>" ontouchstart="" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icon_youtube.png" alt="Image"></a></span>
            </div>
          </div>
        </div>
        <div class="text-center credit mx-auto mb-4">
          <span class="rem0-9">©Peace designer Fes</span>
        </div>
      </div>
    </footer>

    <script src="<?= get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/aos.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/app.min.js?20210807"></script>
    <?php wp_footer();?>
  </body>
</html>
