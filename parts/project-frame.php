          <div class="col-md-6 activity-link px-md-4">
            <div class="box team-member">
              <a href="">
                <div class="image">
                  <img src="<?= IMG_DIR; ?>/project_<?= $data->project_code; ?>.jpg" class="img-fluid">
                  <div class="overlap">
<?php if ($data->project_name == 'tamatokyo'): ?>
                    <img src="<?= IMG_DIR; ?>/activity-study-support.png">
                    <div class="activity-title">Study-support</div>
<?php elseif ($data->project_name == 'miyagi'): ?>
                    <img src="<?= IMG_DIR; ?>/activity-special-skill.png">
                    <div class="activity-title">Special Skill</div>
<?php elseif ($data->project_name == 'ehime'): ?>
                    <img src="<?= IMG_DIR; ?>/activity-activation.png">
                    <div class="activity-title">activation</div>
<?php elseif ($data->project_name == 'nishisaitama'): ?>
                    <img src="<?= IMG_DIR; ?>/activity-cleaning-activity.png">
                    <div class="activity-title">Cleaning Activity</div>
<?php elseif ($data->project_name == 'gunma'): ?>
                    <img src="<?= IMG_DIR; ?>/activity-cleaning-activity.png">
                    <div class="activity-title">Cleaning Activity</div>
<?php endif; ?>
                  </div>
                </div>
                <div class="contents">
                  <div class="location mt-4 mb-3"><i class="fa-solid fa-location-dot"></i><span><?= $data->region; ?></span></div>
                  <div class="catch"><?=$data->catch; ?></div>
                  <div class="name"><?=$data->name; ?></div>
                  <div class="check"><button class="btn btn-normal cyan a-small-btn">チェック</button></div>
                </div>
              </a>
            </div>
          </div>
