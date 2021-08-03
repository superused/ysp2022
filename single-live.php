<?php get_header(); ?>
<?php
$field = get_post_field('post_name', get_the_ID());
$data = $util->getLiveDetail($field);
?>
    <div></div>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
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
<?php if (isset($data->start_date) && isset($data->end_date)): ?>
            <div class="site-section w-border mx-auto pt-0" data-aos="fade-up" data-aos-delay="100">
              <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4">開催概要</h4>
              <div class="container">
                <div>日時</div>
                <div class="contents-border short text-left mt-2 mb-2 ml-0"></div>
                <div><?= date('n月j日', strtotime($data->start_date)) . '（' . Util::getYoubi($data->start_date) . '）'; ?></div>
                <div><?= date('H:i', strtotime($data->start_date)) . '-' . date('H:i', strtotime($data->end_date)); ?></div>
              </div>
            </div>
<?php endif; ?>
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
<?php     if (isset($data->sns)): ?>
                    <div class="mt-4 sns">SNS: <a href="<?= $data->sns; ?>" target="_blank" ontouchstart=""><?= $data->sns; ?></a></div>
<?php     endif; ?>
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
          <div class="col-12 col-md-4 pr-0">
            <div class="other-live site-section-heading project-frame w-border mx-auto pl-2 pb-2 pt-1 pr-0" data-aos="fade-up" data-aos-delay="100">
              <div>
                <div class="sidebar-title heading-bar color-cyan mb-2 pr-3"><span class="pr-3">その他LIVE</span></div>
              </div>
              <div class="other-live-container">
<?php
//現在のページのカテゴリを取得
$categories = get_the_category($post->ID);
$the_query = new WP_Query([
  'post_type' => get_post_type(),
  'posts_per_page' => 100,
  'post__not_in' => [$post->ID],
  'orderby' => 'post__in',
]);
?>
<?php if ($the_query->have_posts()): ?>
<?php   while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <div class="row">
                    <div class="p-0 px-3 pr-xl-1 pr-xl-0 mx-0 mt-0 mb-2 col-12 col-xl-6">
                      <div class="team-member text-center image ml-1 mr-1 mb-4 mb-md-0 w-auto">
                        <a href="<?= get_permalink(); ?>" ontouchstart="">
                            <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?: NO_IMAGE_URL ?>" alt="Image" class="img-fluid w-100">
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 pl-0">
                      <div class="text-left mx-auto mb-2 pl-3 pr-1 px-xl-0">
                        <h6 class="font-weight-bold mb-1"><?php the_title(); ?></h6>
                        <div class="contents-border w-100 ml-0 my-1"></div>
                        <div class="small description"><?php the_excerpt(); ?></div>
                      </div>
                    </div>
                  </div>
<?php   endwhile; ?>
<?php endif; ?>
              </div>
            </div>
            <div class="site-section sidebar pb-0">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading w-border mx-auto col-12 px-md-0 px-lg-2 px-xl-3" data-aos="fade-up" data-aos-delay="100">
                    <div data-aos="fade-up" data-aos-delay="100">
                      <div class="sidebar-title heading-bar color-cyan"><span class="pr-3">LIVEプログラム</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="live-detail-timetable">
<?php if (!empty($data->start_date)): ?>
<?php   $date = date('Ymd', strtotime($data->start_date)); ?>
<?php   if ($date == '20210807'): ?>
<?php     include 'parts/timetable0807.php'; ?>
<?php   elseif ($date == '20210808'): ?>
<?php     include 'parts/timetable0808.php'; ?>
<?php   elseif ($date == '20210809'): ?>
<?php     include 'parts/timetable0809.php'; ?>
<?php   endif; ?>
<?php endif; ?>
            </div>
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
