<?php
$slug = get_post(get_the_ID())->post_name;
$type = 'input';
if (strpos($slug, 'confirm') !== false) {
  $type = 'confirm';
} else if (strpos($slug, 'complete') !== false) {
  $type = 'complete';
}
?>
        <div class="application mb-5 fadeup">
          <div class="process<?= $type == 'input' ? ' active' : '' ?>">入力</div>
          <div class="process<?= $type == 'confirm' ? ' active' : '' ?>">確認</div>
          <div class="process<?= $type == 'complete' ? ' active' : '' ?>">完了</div>
        </div>
