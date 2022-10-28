    <footer class="site-footer<?= !empty($noMargin) ? ' mt-0' : ''; ?>" data-aos="fade-up" data-aos-delay="100">
      <div class="bg-cyan py-4">
        <div class="container">
        <a href="<?= HOME_URL; ?>" class="font-weight-bold text-white">TOP</a>
        </div>
      </div>
      <div class="footer-menu bg-lightgray py-4">
        <div class="container p-0 mb-4 footer-line-bottom">
          <div class="font-weight-bold px-3 text-black d-none d-md-block">Menu</div>
          <div class="row">
            <ul class="menu-left col-md-8 mb-3 mb-md-5 px-0 px-md-3">
              <li>
              <div class="footer-link-circle d-md-table">
                <div class="d-md-table-cell"><a href="<?= ABOUT_URL; ?>">YSPとは<span class="small font-weight-bold ml-1">- 1ページで分かるYSP -</span></a></div>
                <div class="d-md-table-cell"><a href="<?= OUTLINE_URL; ?>" class="pankuzu-next">団体概要</a></div>
                <div class="d-md-table-cell"><a href="<?= MESSAGE_URL; ?>" class="pankuzu-next">会長挨拶</a></div>
              </div>
              </li>
              <li>
              <div class="footer-link-circle">
                <div><a href="<?= SEMINAR_URL; ?>">セミナー・イベント</a></div>
              </div>
              </li>
              <li>
              <div class="footer-link-circle">
                <div><a href="<?= PROJECT_URL; ?>">プロジェクト</a></div>
              </div>
              </li>
              <li class="footer-link-circle blank">
              </li>
            </ul>
            <ul class="menu-right col-md-4 footer-line-left text-left text-md-center font-weight-bold mb-3 mb-md-5">
              <li class="footer-link-circle right shop">
                <a href="<?= SHOP_URL; ?>" target="_blank">
                  <span>Shop</span>
                </a>
              </li>
              <li class="footer-link-circle right movie">
                <a href="<?= INTRODUCE_MOVIE; ?>">
                  <span>Movie YSP紹介動画</span>
                </a>
              </li>
              <li class="footer-link-circle right magazine">
                <a href="<?= MAGAZINE_URL; ?>" class="d-table d-md-block">
                  <div class="d-table-cell d-md-block pr-2 pr-md-0">Webマガジン</div>
                  <div class="small font-weight-bold d-table-cell d-md-block">Peace designer Magazine</div>
                </a>
              </li>
            </ul>
          </div>
          <div class="donate container p-0">
            <div class="row">
              <ul class="col-md-8 mb-3 mb-md-5">
                <li class="footer-link-circle bg-white rounded d-lg-table">
                  <div class="d-lg-table-cell"><a href="<?= SUPPORT_URL; ?>">ご寄付・ご支援TOP</a></div>
                  <div class="d-lg-table-cell"><a href="<?= DEBIT_URL; ?>" class="pankuzu-next">社会を彩る「毎月の支援」</a></div>
                  <div class="d-lg-table-cell"><a href="<?= TRANSFER_URL; ?>" class="pankuzu-next">今すぐ応援「今回の支援」</a></div>
                </li>
              </ul>
              <ul class="menu-right col-md-4 mb-5">
                <li class="footer-link-normal">
                  <a href="<?= POLICY_URL; ?>">サイトポリシー</a>
                </li>
                <li class="footer-link-normal">
                  <a href="<?= PRIVACY_URL; ?>">個人情報保護方針</a>
                </li>
                <li class="footer-link-normal">
                  <a href="<?= LAW_URL; ?>">特定商取引法に基づく表示</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container p-0">
           <div class="row text-center align-items-center mx-0 mb-5 mb-md-4">
             <div class="footer-image col-md-3 p-0 pb-2 pb-md-0 text-md-left mx-auto mx-md-0">
               <a href="<?= HOME_URL; ?>"><img src="<?= IMG_DIR; ?>/logo_footer.png" class="footer-logo w-100"></a>
             </div>
             <div class="footer-sns text-md-left col-md-6">
               <ul class="h-100 m-0 p-0">
                 <li class="d-inline h-100 mx-3 mx-md-2"><a href="<?= SNS_FACEBOOK_URL; ?>" class="d-inline-flex align-items-center h-100"><i class="fa-brands fa-facebook fa-2x"></i><span class="small font-weight-bold d-none d-md-block mx-2">Facebook</span></a></li>
                 <li class="d-inline h-100 mx-3 mx-md-2"><a href="<?= SNS_INSTAGRAM_URL; ?>" class="d-inline-flex align-items-center h-100"><i class="fa-brands fa-square-instagram fa-2x"></i><span class="small font-weight-bold d-none d-md-block mx-2">Instagram</span></a></li>
                 <li class="d-inline h-100 mx-3 mx-md-2"><a href="<?= SNS_LINE_URL; ?>" class="d-inline-flex align-items-center h-100"><i class="fa-brands fa-line fa-2x"></i><span class="small font-weight-bold d-none d-md-block mx-2">LINE</span></a></li>
               </ul>
             </div>
             <div class="footer-contact col-md-3 p-0 pb-2 pb-md-0">
               <a href="<?= CONTACT_URL; ?>" class="btn btn-normal mark-cyan rounded">お問い合わせ</a>
             </div>
           </div>
           <div class="w-100 text-center pt-3">
             <span>Copyright © YSP-Japan All Rights Reserved</span>
           </div>
        </div>
      </div>
    </footer>
    <a class="page_top" href="#" ontouchstart=""><span></span></a>

    <script src="<?= get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/progressbar.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/aos.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/app.js"></script>
<script>
$(function(){
});
</script>
    <?php wp_footer();?>
  </body>
</html>
