    <div class="site-section pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-mg-8 col-lg-8 col-xl-8">
<?php
if (have_posts()):
    while (have_posts()): the_post();
        the_content();
    endwhile;
endif;
?>
          </div>
          <div class="col-12 col-sm-12 col-mg-4 col-lg-4 col-xl-4">
            <?= get_sidebar();?>
          </div>
        </div>
      </div>
    </div>
