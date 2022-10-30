    <div id="activity" class="site-section bg-lightgray my-6">
      <div class="circle-bg gray start"></div>
      <div class="circle-bg white start"></div>
      <div class="container">
        <div class="title-icon fadeup">活動紹介</div>
        <div class="title-second fadeup">What we do</div>
        <p class="font-weight-bold text-center mb-5 fadeup">YSPは一人一人の青年が持つ力や<br class="d-md-none">やりがいを大切にしながら<br>全国各地で地域に密着した<br class="d-md-none">プロジェクト活動を行っています。</p>
        <div class="row my-4 px-3">
<?php $datas = $util->getProjectDetail(); ?>
<?php $count = 0; ?>
<?php foreach ($datas as $data): ?>
<?php   include 'project-frame.php'; ?>
<?php   $count++; ?>
<?php   if ($count >= 4) break; ?>
<?php endforeach; ?>
        </div>
        <div class="text-center fadeup"><a href="<?= PROJECT_URL; ?>"><button class="btn btn-normal cyan">プロジェクトをもっと見る</button></a></div>
      </div>
      <div class="circle-bg gray end"></div>
      <div class="circle-bg white end"></div>
    </div>
