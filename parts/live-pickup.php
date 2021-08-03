<?php
//現在のページのカテゴリを取得
$the_query = new WP_Query([
  'post_type' => 'live',
  'posts_per_page' => 100,
  'orderby' => 'post__in',
]);
?>
<?php if ($the_query->have_posts()): ?>
<?php   while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php     if (strpos(get_post_field('post_name', get_the_ID()), 'sinergy') !== false): ?>
                <div class="project-frame row w-100 mx-auto mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="team-member col-12 p-0 mb-3">
                    <a href="<?= get_permalink(); ?>" ontouchstart="">
                      <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?: NO_IMAGE_URL ?>" alt="Image" class="img-fluid">
                    </a>
                  </div>
                  <div class="col-12 p-0">
                    <div class="site-section-heading w-border mx-auto col-12 p-0">
                      <h6 class="font-weight-bold mb-2"><?php the_title(); ?></h6>
                      <div class="contents-border mt-1 mb-1 text-left w-100 ml-0"></div>
                      <div class="small mb-2 description"><?php the_excerpt(); ?></div>
                      <div class="text-center">
                        <a href="<?= get_permalink(); ?>" class="w-100" ontouchstart=""><button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button></a>
                      </div>
                    </div>
                  </div>
                </div>
<?php     endif; ?>
<?php   endwhile; ?>
<?php endif; ?>
