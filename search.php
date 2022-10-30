<?php get_header(); ?>
    <div class="site-section site-section-sm mt-0 pb-0 text-center">
      <div class="title-icon">&nbsp;</div>
      <h1 class="h4 font-weight-bold mb-0">
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
  } else {
    echo '「'.htmlspecialchars($_GET['s'], ENT_QUOTES, 'utf-8') .'」の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
  }
?>
      </h1>
    </div>
    <div class="site-section site-section-sm mt-0 pb-0">
      <div class="container px-0">
<?php if (get_search_query() !== ''): ?>
<?php   if (have_posts()): ?>
        <div class="search-result">
<?php     while(have_posts()):
            the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="box team-member overflow-bg-white mb-4">
              <div class="title"><?php the_title(); ?></div>
<?php
  $description = get_the_content();
  $description = apply_filters( 'the_content', $description );
  $description = str_replace( ']]>', ']]>', $description );
  $description = wp_trim_words( $description , 120 );
  echo $description;
?>
            </div>
          </a>
<?php     endwhile; ?>
        </div>
<?php   else: ?>
        <div class="text-center my-6">検索されたキーワードにマッチする記事はありませんでした</div>
<?php   endif; ?>
<?php else: ?>
        <div class="text-center my-6">検索キーワードを入力してください</div>
<?php endif; ?>
      </div>
    </div>
    <div class="pager">
<?php
  $args = array(
      'mid_size' => 1,
      'prev_text' => '&lt;&lt;前へ',
      'next_text' => '次へ&gt;&gt;',
      'screen_reader_text' => ' ',
  );
  the_posts_pagination($args);
?>
    </div>
<?php get_footer('nomargin'); ?>
