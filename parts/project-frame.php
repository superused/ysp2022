<?php $postName = $data->post_name; ?>
                  <div class="col-12 col-md-6 w-100 mb-4">
                    <div class="project-frame mx-auto" data-aos="fade-up" data-aos-delay="100">
                      <div class="team-member col-12 p-0 mb-3">
                        <a href="<?= esc_url(home_url('/project/' . $postName . '/')); ?>" ontouchstart="">
                          <img src="<?= $util->viewProjectTopImage($postName); ?>" alt="Image" class="img-fluid">
                        </a>
                      </div>
                      <div class="col-12 p-0">
                        <div class="site-section-heading w-border mx-auto col-12 p-0">
                        <h5 class="font-weight-bold mb-2"><?= $data->title; ?></h5>
                          <h6 class="font-weight-bold mb-2"><?= $data->union_name;?></h6>
                          <div class="contents-border mt-1 mb-1 text-left w-100 ml-0"></div>
                          <div class="description small mb-3"><?= nl2br($data->description); ?></div>
                          <div class="union-box text-center">
                            <a href="<?= esc_url(home_url('/project/' . $postName . '/')); ?>" ontouchstart="">
                              <button class="btn btn-show mx-auto" ontouchstart="">詳しく見る</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
