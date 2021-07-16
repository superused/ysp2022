    <footer class="site-footer">
      <div class="container pt-5">
        <div class="row">
          <div class="text-center mb-5 col-12 col-md-3" data-aos="fade-up" data-aos-delay="100">
            <a href="<?= HOME_URL;?>" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/logo1.png" width="150"></a>
          </div>
          <div class="footer-link-box mb-4 col-12 col-md-6 text-center">
            <div data-aos="fade-up" data-aos-delay="100">
              <div><a href="<?= GOODS_SHOP_URL; ?>" class="link text-center mx-auto" ontouchstart="">グッズショップ（外部サイト）</a></div>
              <div><a href="<?= esc_url(home_url('/contact'));?>" class="link text-center mx-auto" ontouchstart="">お問い合わせ</a></div>
            </div>
            <div class="row justify-content-center align-items-center sns-icon mt-3" data-aos="fade-up" data-aos-delay="100">
              <span class="m-2"><a href="#" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/icon_instagram.png" alt="Image"></a></span>
              <span class="m-2"><a href="#" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/icon_line.png" alt="Image"></a></span>
              <span class="m-2"><a href="#" ontouchstart=""><img src="<?= get_template_directory_uri(); ?>/images/icon_youtube.png" alt="Image"></a></span>
            </div>
          </div>
          <div class="col-12 col-md-3"></div>
        </div>
        <div class="text-center credit mx-auto mb-4" data-aos="fade-up" data-aos-delay="100">
          <span class="font-weight-bold">©Peace Designer FES</span>
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
    <script src="<?= get_template_directory_uri(); ?>/js/app.js"></script>
    <?php wp_footer();?>
  </body>
</html>
