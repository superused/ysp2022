<?php get_header(); ?>
    <div class="site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="site-margin-top-section col-12 col-md-8 bg-beige p-3">
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
          <div class="col-12 col-md-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
