    <footer class="site-footer">
      <div class="container pt-5">
        <div class="row">
          <div class="text-center mb-5 col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"><img src="<?= get_template_directory_uri(); ?>/images/logo1.png" width="150"></div>
          <div class="footer-link-box mb-4 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <ul class="border-box">
              <li><a href="<?= esc_url(home_url('/'));?>" class="link text-center py-4 mx-auto">TOP</a></li><!--
              --><li><a href="<?= esc_url(home_url('/live/'));?>" class="link text-center py-4 mx-auto">LIVE</a></li><!--
              --><li><a href="<?= esc_url(home_url('/photo-contest/'));?>" class="link text-center py-4 mx-auto">コンテスト</a></li><!--
              --><li><a href="<?= esc_url(home_url('/union/'));?>" class="link text-center py-4 mx-auto">連合会</a></li><!--
              --><li><a href="<?= esc_url(home_url('/'));?>" class="link text-center py-4 mx-auto">その他</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
        </div>
        <div class="text-center credit mx-auto mb-4">
          <span>©Peace Designer FES</span>
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
