<?php
$urls = [
  'about' => ABOUT_URL,
  'outline' => OUTLINE_URL,
  'message' => MESSAGE_URL,
];
$slug = get_post(get_the_ID())->post_name;
if (isset($urls[$slug])) unset($urls[$slug]);
?>
<?php foreach ($urls as $key => $url): ?>
<?php $flg = $key === array_key_last($urls); ?>
    <div class="site-section site-section-sm<?= $flg ? ' mb-6' : '' ?>">
      <div class="container p-md-0">
        <div class="row m-0">
          <div class="col-12 col-md-9 p-0 team-member<?= $flg ? ' ml-auto' : '' ?>">
            <a href="<?= $url; ?>"><img src="<?= IMG_DIR; ?>/banner_<?= $key ;?>.jpg" class="w-100 mx-auto"></a>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>
