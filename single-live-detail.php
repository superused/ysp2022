<?php get_header(); ?>
<?php
$field = get_post_field('post_name', get_the_ID());
$data = $util->getLiveDetail($field);
?>
    <div></div>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-9">
            <div class="site-section live-detail top-image pb-0" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="youtube">
                    <iframe src="https://www.youtube.com/embed/<?= $data->youtube_id; ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div id="adjust-live-detail"></div>
            <div class="site-section w-border mx-auto">
              <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="font-weight-bold">Peace Designer FES 2021</div>
                <h4 class="font-weight-bold"><?php the_title(); ?></h4>
                <p><?= strpos($field, 'sinergy') !== false ? 'S!NERGY CROSS' : ''; ?></p>
                <div class="contents-border mt-5 mb-5 text-left w-50 ml-0"></div>
              </div>
              <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div><?php the_content(); ?></div>
              </div>
            </div>
            <div class="site-section w-border mx-auto pt-0" data-aos="fade-up" data-aos-delay="100">
              <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4">開催概要</h4>
              <div class="container">
                <div>日時</div>
                <div class="contents-border short text-left mt-2 mb-2 ml-0"></div>
                <div><?= date('n月j日', strtotime($data->start_date)) . '（' . Util::getYoubi($data->start_date) . '）'; ?></div>
                <div><?= date('H:i', strtotime($data->start_date)) . '-' . date('H:i', strtotime($data->end_date)); ?></div>
              </div>
            </div>
<?php if (isset($data->name1) && isset($data->description1) && isset($data->image1)): ?>
            <div class="site-section w-border mx-auto pt-0">
              <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4" data-aos="fade-up" data-aos-delay="100">出演者</h4>
              <div class="container pt-4">
                <div class="row mb-4">
                  <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="performer mb-4">
                      <img src="<?= $data->image1; ?>" alt="Image" class="img-fluid w-100">
                    </div>
                  </div>
                  <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold"><?= $data->name1; ?></h4>
                    <div class="description"><?= $data->description1; ?></div>
                  </div>
                </div>
              </div>
            </div>
<?php endif; ?>
            <div class="site-section w-border mx-auto pt-0" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4">ご視聴にあたっての注意事項</h4>
                <div>・配信時刻は場合により多少前後する可能性がございます</div>
                <div>・配信内容の録画や再配信などの行為は禁止といたします</div>
                <div>・Youtubeチャット欄へのコメント・Twitterでの実況　歓迎！</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <?= get_sidebar();?>
          </div>
          <div class="col-12">
            <div class="site-section w-border mx-auto pt-0" data-aos="fade-up" data-aos-delay="100">
              <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4">関連ページ</h4>
              <div class="w-50 mx-auto m-5">
                <img src="<?= get_template_directory_uri(); ?>/images/photo5.png" alt="Image" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
