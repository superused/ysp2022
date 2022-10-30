<?php get_header(); ?>
    <div class="report site-section site-section-sm">
      <div class="container">
        <h1 class="title-icon normal mb-6">活動レポート</h1>
          <div class="box team-member overflow-bg-white">
            <div class="title"><?php the_title(); ?></div>
            <div class="subtitle">
              <div class="tags">
                <span class="title">タグ　　：</span>
<?php
$terms = get_the_terms(get_the_id(), 'report_tags');
foreach ($terms as $term):
?>
                <span class="tag"><?= $term->name; ?></span>
<?php
endforeach;
?>
              </div>
              <div class="date"><?php the_time('Y年m月d日'); ?></div>
            </div>
            <div class="image">
              <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?: NO_IMAGE_URL ?>" class="img-fluid">
            </div>
            <div class="content">
              <?php the_content(); ?>
            </div>
          </div>
            <div class="site-section p-0 my-4" data-aos="fade-up" data-aos-delay="100">
              <div class="container p-0 text-center">
<?php if (get_previous_post()): ?>
                 <span><?php previous_post_link('%link', '&lt; Prev'); ?></span>
<?php else: ?>
                 <span>&lt; Prev</span>
<?php endif;?>
<?php if (get_next_post()): ?>
                 <span><?php next_post_link('%link', 'Next &gt;');?></span>
<?php else: ?>
                 <span>Next &gt;</span>
<?php endif;?>
              </div>
            </div>
      </div>
    </div>

    <div class="recent-report site-section site-section-sm">
      <div class="container">
        <div class="title">最新の活動レポート</div>
        <div class="items">
<?php
//現在のページのカテゴリを取得
$categories = get_the_category($post->ID);
$the_query = new WP_Query([
  'post_type' => get_post_type(),
  'posts_per_page' => 7,
  'post__not_in' => [$post->ID],
]);
if ($the_query->have_posts()) :
  while ($the_query->have_posts()) : $the_query->the_post();
?>
          <div class="item"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></div>
<?php
  endwhile;
endif; ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
