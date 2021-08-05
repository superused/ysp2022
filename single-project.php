<?php
$postName = get_post_field('post_name', get_the_ID());
$images = $util->getProjectImages($postName);
$datas = $util->getProjectDetail();
$data = $datas[$postName];
?>
<?php get_header(); ?>
    <div></div>
    <div class="site-section" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row mx-auto text-center">
          <h4 class="col-12 font-weight-bold"><?php the_title(); ?></h4>
          <div class="contents-border mt-3 mb-3"></div>
        </div>
      </div>
    </div>

    <div class="site-section top-image pb-0" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row px-3 justify-content-center">
           <div class="youtube">
             <iframe src="https://www.youtube.com/embed/<?= $data->youtube_id; ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
           </div>
        </div>
      </div>
    </div>

    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="site-section w-border mx-auto">
              <div class="container">
              <div data-aos="fade-up" data-aos-delay="100"><?= nl2br($data->description); ?></div>
                <div class="row mt-4">
<?php foreach ($images as $image): ?>
                  <div class="col-6 p-0" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?= get_template_directory_uri(); ?>/images/project/<?= $postName; ?>/<?= $image; ?>" alt="Image" class="img-fluid p-2">
                  </div>
<?php endforeach; ?>
                </div>
              </div>
            </div>
<?php if ($data->sns_json || $data->frequency || $data->place): ?>
            <div class="site-section w-border beige mx-auto text-break p-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container p-0">
<?php   foreach ($data->sns_json as $type => $url): ?>
<?php     if (strtolower($type) !== 'mail'): ?>
                  <div class="mt-2"><?= $type; ?></div>
                  <div class="contents-border text-left short m-0 mb-2"></div>
                  <p><a href="<?= $url; ?>" target="_blank"><?= $url; ?></a></p>
<?php     endif; ?>
<?php   endforeach; ?>
<?php   if ($data->frequency): ?>
                  <div class="mt-2">活動頻度</div>
                  <div class="contents-border text-left short m-0 mb-2"></div>
                  <p><?= $data->frequency; ?></p>
<?php   endif; ?>
<?php   if ($data->place): ?>
                  <div class="mt-2">活動場所</div>
                  <div class="contents-border text-left short m-0 mb-2"></div>
                  <p><img src="<?= get_template_directory_uri(); ?>/images/icon_location.png" alt="Image" class="img-fluid location-icon mb-1"><?= $data->place; ?></p>
<?php   endif; ?>
<?php   if (isset($data->sns_json['Mail'])): ?>
                  <div class="mt-2">Mail</div>
                  <div class="contents-border text-left short m-0 mb-2"></div>
                  <p><?= $data->sns_json['Mail']; ?></p>
<?php   endif; ?>
              </div>
            </div>
<?php endif; ?>
            <div class="site-section w-border mx-auto pb-0 mt-4">
              <div class="container">
                <h4 class="heading-bar color-cyan font-weight-bold pb-3" data-aos="fade-up" data-aos-delay="100"><span class="pr-3">活動紹介コーナー</span></h4>
                <div class="row project-list">
<?php
$the_query = new WP_Query([
  'post_type' => get_post_type(),
  'posts_per_page' => 4,
  'post__not_in' => [$post->ID],
  'orderby' => 'rand',
]);
?>
<?php if ($the_query->have_posts()): ?>
<?php   while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php     include 'parts/project-frame.php'; ?>
<?php   endwhile; ?>
<?php endif; ?>
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
