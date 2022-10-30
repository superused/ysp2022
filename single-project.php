<?php
$postName = get_post_field('post_name', get_the_ID());
$datas = $util->getProjectDetail();
$data = $datas[$postName];
?>
<?php get_header(); ?>
    <div class="container-pc mb-5">
      <img src="<?= IMG_DIR; ?>/project/<?= $data->project_code; ?>/top.jpg" class="mx-auto w-100">
    </div>

    <div class="site-section site-section-sm">
      <div class="container p-md-0">
        <div class="title-icon normal mb-6">活動紹介</div>
        <div class="project-title">
          <div class="project-id">
            <div class="word">PROJECT</div>
            <div class="number"><?= substr('0' . $data->project_id, -2); ?></div>
          </div>
          <div class="title"><?= strtoupper($data->name); ?></div>
        </div>
        <div class="project container md">
          <p class="explain"><?= $data->text1; ?></p>
          <div class="profile">
            <div class="row">
              <div class="title"><span>団体名</span></div>
              <div class="text"><?= $data->name; ?></div>
            </div>
            <div class="row">
              <div class="title"><span>開催場所</span></div>
              <div class="text"><?= $data->place; ?></div>
            </div>
            <div class="row">
              <div class="title"><span>リンク</span></div>
              <div class="text"><?= $data->link; ?></div>
            </div>
            <div class="row">
              <div class="title"><span>問い合わせ</span></div>
              <div class="text"><?= nl2br($data->contact); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-lightgray my-6">
      <div class="circle-bg gray start"></div>
      <div class="circle-bg white start"></div>
      <div class="container">
        <div class="title-icon normal mb-5">活動の成果</div>
        <p class="font-weight-bold small"><?= $data->text2; ?></p>
      </div>
      <div class="circle-bg gray end"></div>
      <div class="circle-bg white end"></div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container p-md-0">
        <div class="title-icon normal mb-5">参加者の声</div>
<?php if ($data->voice1): ?>
<?php   foreach ($data->voice1 as $k1 => $v1): ?>
        <div class="project-voice <?= $k1 % 2 == 0 ? 'rb' : 'lt'; ?>">
          <div class="image">
            <img src="<?= IMG_DIR; ?>/voice_face/woman_3.png">
          </div>
          <div class="fukidashi">
            <div class="text">
              <div><?= $v1; ?></div>
            </div>
          </div>
        </div>
<?php   endforeach; ?>
<?php endif; ?>
<?php if ($data->voice2): ?>
        <div class="title-icon normal mb-5">地域の方の声</div>
<?php   foreach ($data->voice2 as $k2 => $v2): ?>
        <div class="project-voice <?= $k2 % 2 == 1 ? 'rb' : 'lt'; ?>">
          <div class="image">
<?php     if ($k2 % 2 == 0): ?>
            <img src="<?= IMG_DIR; ?>/voice_face/man_office.png">
<?php     else: ?>
            <img src="<?= IMG_DIR; ?>/voice_face/man_shop.png">
<?php     endif; ?>
          </div>
          <div class="fukidashi">
            <div class="text">
              <div><?= $v2; ?></div>
            </div>
          </div>
        </div>
<?php   endforeach; ?>
<?php endif; ?>
      </div>
    </div>

<?php if ($data->text3): ?>
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="title-icon normal mb-6">代表者メッセージ</div>
        <div class="row m-0">
          <div class="col-12 col-md-5 text-center">
            <img src="<?= IMG_DIR; ?>/project/<?= $data->project_code; ?>/leader.jpg" class="circle-img-icon md mb-2">
          </div>
          <div class="col-12 col-md-7">
            <p class="font-weight-bold small"><?= $data->text3; ?></p>
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>
<?php $images = $util->getProjectImages($data->project_code); ?>
<?php if (count($images)): ?>
    <div class="site-section site-section-sm">
      <div class="container">
        <div class="title-icon normal mb-6">Photo Gallery</div>
        <div class="row justify-content-center">
<?php   foreach ($images as $image): ?>
          <div class="thumbnail col-12 col-md-4 px-3 mb-4 text-center">
            <img src="<?= $image; ?>" class="w-100">
          </div>
<?php   endforeach; ?>
        </div>
      </div>
    </div>
<?php endif; ?>



<?php get_footer('nomargin'); ?>
