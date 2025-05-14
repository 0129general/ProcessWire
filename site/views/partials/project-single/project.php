<section class="project-single-page">
    <div class="container-fluid">
        <div class="project-image scroll-text-animation" data-animation="fade_from_bottom">
            <?php if ($page->single_project_image): ?>
                <img src="<?= $page->single_project_image->url ?>" alt="<?= $page->single_project_title ?>">
            <?php endif; ?>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <div class="content">
                    <h2 class="poort-text poort-in-right"><?= $page->single_project_title ?></h2>
                    <p><span>M</span><?= $page->single_project_description_1 ?></p>
                    <p><?= $page->single_project_description_2 ?></p>
                </div>
            </div>

            <div class="col-lg-4 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                <div class="description">
                    <h3><?= $page->single_project_info_title ?></h3>
                    <ul>
                        <?php foreach ($page->single_project_info_items as $item): ?>
                            <li>
                                <span><?= $item->single_info_label ?> :</span>
                                <span><?= $item->single_info_value ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>