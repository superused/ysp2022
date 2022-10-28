<?php get_header(); ?>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
     <h1><?php the_title(); ?></h1>
     <section>
       <?php the_content(); ?>
     </section>
<?php
    endwhile;
endif;
?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
