<?php $newsDatas = $util->getNews(); ?>
    <div id="news" class="site-section block-13 pb-0">
      <div class="container p-0" data-aos="fade-up" data-aos-delay="100">
        <div class="news-area m-4">
          <h5 class="news-title">NEWS</h5>
          <div class="owl-carousel">
<?php foreach ($newsDatas as $newsData): ?>
            <div class="text-center bg-white news-thumbnail">
              <a href="<?= get_permalink($newsData->ID); ?>" ontouchstart=""><?= get_the_post_thumbnail($newsData->ID) ?: '<img src="' . NO_IMAGE_URL . '">'; ?></a>

            </div>
<?php endforeach; ?>
          </div>
          <button class="custom-btn prev" ontouchstart=""></button>
          <button class="custom-btn next" ontouchstart=""></button>
        </div>
      </div>
    </div>
