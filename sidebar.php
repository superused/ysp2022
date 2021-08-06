<?php
$postType = get_post_type();
$postName = $post->post_name;
?>
<div class="site-section sidebar">
  <div class="container">
    <div class="row">
      <div class="site-section-heading w-border mx-auto col-12 px-md-0 px-lg-2 px-xl-3" data-aos="fade-up" data-aos-delay="100">
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="sidebar-title heading-bar color-cyan mb-4"><span class="pr-3">その他コンテンツ</span></div>
        </div>
<?php if ($postType != 'live'): ?>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="team-member image col-12">
            <a href="<?= LIVE_URL; ?>"><img src="<?= LIVE_TITLE_IMG; ?>" alt="LIVE" class="img-fluid"></a>
          </div>
          <div class="sidebar-title">LIVE</div>
        </div>
<?php endif; ?>
<?php if ($postType != 'project'): ?>
        <div class="heading-bar color-gray mb-4" data-aos="fade-up" data-aos-delay="100"></div>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="team-member image col-12">
            <a href="<?= PROJECT_URL; ?>"><img src="<?= PROJECT_TITLE_IMG; ?>" alt="PROJECT" class="img-fluid"></a>
          </div>
          <div class="sidebar-title">PROJECT</div>
        </div>
<?php endif; ?>
<?php if (strpos($postName, 'movie-contest') === false): ?>
        <div class="heading-bar color-gray mb-4" data-aos="fade-up" data-aos-delay="100"></div>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="team-member image col-12">
            <a href="<?= MOVIE_CONTEST_URL;?>"><img src="<?= MOVIE_TITLE_IMG; ?>" alt="MOVIEコンテスト" class="img-fluid"></a>
          </div>
          <div class="sidebar-title">MOVIEコンテスト</div>
        </div>
<?php endif; ?>
<?php if (strpos($postName, 'photo-') === false): ?>
        <div class="heading-bar color-gray mb-4" data-aos="fade-up" data-aos-delay="100"></div>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="team-member image col-12">
            <a href="<?= PHOTO_CONTEST_URL;?>"><img src="<?= PHOTO_TITLE_IMG; ?>" alt="PHOTOコンテスト" class="img-fluid"></a>
          </div>
          <div class="sidebar-title">PHOTOコンテスト</div>
        </div>
<?php endif; ?>
<?php if (strpos($postName, 'senryu-') === false): ?>
        <div class="heading-bar color-gray mb-4" data-aos="fade-up" data-aos-delay="100"></div>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="team-member image col-12">
            <a href="<?= SENRYU_CONTEST_URL;?>"><img src="<?= SENRYU_TITLE_IMG ?>" alt="川柳コンテスト" class="img-fluid"></a>
          </div>
          <div class="sidebar-title">川柳コンテスト</div>
        </div>
<?php endif; ?>
      </div>
    </div>
  </div>
</div>
