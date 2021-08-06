<?php get_header(); ?>
<?php
$field = get_post_field('post_name', get_the_ID());
$datas = $util->getLiveDetail();
$data = $datas[$field];
$liveId = get_the_ID();
?>
    <div></div>
    <div class="site-section py-0">
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
                <h1 class="font-weight-bold rem1-5"><?= $data->title; ?></h1>
                <p><?= strpos($field, 'sinergy') !== false ? 'S!NERGY CROSS' : ''; ?></p>
                <div class="contents-border my-4 text-left w-50 ml-0"></div>
              </div>
              <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div><?= $data->description; ?></div>
              </div>
<?php if ($data->sponsership && $data->sponsership_url): ?>
              <div class="container-fluid mt-3" data-aos="fade-up" data-aos-delay="100">
                <span>協力：&nbsp;</span><a href="<?= $data->sponsership_url; ?>" target="_blank"><?= $data->sponsership; ?></a>
              </div>
<?php endif; ?>
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
<?php if (isset($data->name1) && isset($data->description1)): ?>
            <div class="site-section w-border mx-auto pt-0">
              <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4" data-aos="fade-up" data-aos-delay="100">出演者</h4>
              <div class="container pt-4">
                <div class="row mb-4">
                  <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="performer mb-4">
                      <img src="<?= $util->viewImage('/images/live/' . $field . '/image1.jpg'); ?>" alt="Image" class="img-fluid w-100">
                    </div>
                  </div>
                  <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="font-weight-bold"><?= $data->name1; ?></h4>
                    <div class="description"><?= nl2br($data->description1); ?></div>
<?php     if (isset($data->sns)): ?>
                    <div class="mt-4 sns text-break">SNS: <a href="<?= $data->sns; ?>" target="_blank" ontouchstart=""><?= $data->sns; ?></a></div>
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
<?php if ($field == 'nazotoki' || $field == 'peacedesignertalk'): ?>
            <div class="col-12">
              <div class="site-section w-border mx-auto pt-0" data-aos="fade-up" data-aos-delay="100">
                <h4 class="font-weight-bold bg-cyan text-white p-3 mb-4">関連ページ</h4>
<?php if ($field == 'nazotoki'): ?>
                <div class="row">
                  <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member image col-12">
                      <a href="<?= PHOTO_CONTEST_URL;?>"><img src="<?= PHOTO_TITLE_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid"></a>
                    </div>
                    <div class="sidebar-title">PHOTOコンテスト</div>
                  </div>
                  <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member image col-12">
                      <a href="<?= SENRYU_CONTEST_URL;?>"><img src="<?= SENRYU_TITLE_IMG ?>" alt="川柳コンテスト" class="img-fluid"></a>
                    </div>
                    <div class="sidebar-title">川柳コンテスト</div>
                  </div>
                </div>
<?php elseif ($field == 'peacedesignertalk'): ?>
                <div class="row project-list">
<?php   $datas = $util->getProjectDetail(); ?>
<?php   foreach (['shiga', 'tamatokyo', 'ehime'] as $postName): ?>
<?php     $data = $datas[$postName]; ?>
<?php     include 'parts/project-frame.php'; ?>
<?php   endforeach; ?>
<?php   $datas = $util->getLiveDetail(); ?>
                </div>
<?php endif; ?>

              </div>
            </div>
<?php endif; ?>
          </div>
          <div class="col-12 col-md-4 pr-md-0">
            <div class="other-live site-section-heading project-frame w-border mx-auto pl-2 pb-2 pt-1 pr-0" data-aos="fade-up" data-aos-delay="100">
              <div>
                <div class="sidebar-title heading-bar color-cyan mb-2 pr-3"><span class="pr-3">その他LIVE</span></div>
              </div>
              <div class="other-live-container">
<?php foreach ($datas as $data): ?>
<?php   $postName = $data->post_name; ?>
<?php   if ($postName != get_post_field('post_name', get_the_ID())): ?>
                  <div class="row">
                    <div class="p-0 px-3 pr-xl-1 pr-xl-0 mx-0 mt-0 mb-2 col-12 col-xl-6">
                      <div class="team-member text-center image mx-1 mb-md-0 w-auto">
                        <a href="<?= esc_url(home_url('/live/' . $postName . '/')); ?>" ontouchstart="">
                            <img src="<?= $util->viewLiveTopImage($postName); ?>" alt="Image" class="img-fluid w-100">
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-xl-6 pl-0">
                      <div class="text-left mx-auto mb-3 pl-3 pr-1 px-xl-0">
                        <h6 class="font-weight-bold mb-1"><?= $datas[$postName]->title; ?></h6>
<?php     if ($datas[$postName]->subtitle): ?>
                        <div class="font-weight-bold mb-1 small"><?= $datas[$postName]->subtitle; ?></div>
<?php     endif; ?>
                        <div class="contents-border w-100 ml-0 my-1"></div>
                        <div class="small description"><?= $datas[$postName]->sentence; ?></div>
                      </div>
                    </div>
                  </div>
<?php   endif; ?>
<?php endforeach; ?>
              </div>
            </div>
            <div class="site-section sidebar pb-0">
              <div class="container">
                <div class="row">
                  <div class="site-section-heading w-border mx-auto col-12 px-md-0 px-lg-2 px-xl-3" data-aos="fade-up" data-aos-delay="100">
                    <div data-aos="fade-up" data-aos-delay="100">
                    <div class="sidebar-title heading-bar color-cyan"><span class="pr-3">LIVEプログラム&nbsp;<?= date('n/j', strtotime($datas[$field]->start_date)); ?></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="live-detail-timetable">
<?php if (!empty($datas[$field]->start_date)): ?>
<?php   $date = date('Ymd', strtotime($datas[$field]->start_date)); ?>
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
        </div>
      </div>
    </div>
<?php get_footer(); ?>
