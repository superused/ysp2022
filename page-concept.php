<?php get_header(); ?>

    <div class=""></div>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="site-margin-top-section col-12 col-md-8 bg-concept text-white pb-5">
            <div class="site-section pb-0">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading text-center w-border mx-auto col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="mx-auto">
                      <h2 class="text-white text-center mx-3">CONCEPT</h2>
                      <p class="mb-5">Peace Designer Fes 開催の目的・想い</p>
                      <div>
                        <div class="font-weight-bold mb-1">つながりが描く私たちの未来</div>
                        <p>「自分の住んでいる町を元気にしたい！」<br>「希望にあふれた日本をつくりたい！」<br>ステキな夢を持っている青年が、<br>日本には沢山います。<br>青年たちの"夢"を育み、<br>日本の"未来"をみんなで考えるのが<br>「Peace designer」フェスです。<br>いっしょに平和な未来描きませんか？</p>
                        <div class="font-weight-bold pb-1">Peace designer って？</div>
                        <p>「Peace」は、みんなで思い描く幸せの<br>"青写真"。<br><br>みんなが少しずつデザインした<br>「Peace」を持ち寄り、つなぎ合わせることで<br>平和というパズルは完成します。<br><br>「Peace designer」は、<br>身近な人の幸せを想い描いて行動する人々の<br>シンボルマークです。</p>
                      </div>
                      <div class="concept-img">
                        <img src="<?= get_template_directory_uri(); ?>/images/logo3.png" class="w-100">
                      </div>
                      <a href="<?= CONTENTS_LIST_URL; ?>" ontouchstart=""><button class="btn btn-show type2 mx-auto" ontouchstart="">コンテンツを見る</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
