<section class="wpo-project-section section-padding">
    <div class="container-fluid">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $page->projects_heading ?></h2>
        </div>
        <div class="project-wrap">
            <?php foreach ($page->project_items as $item): ?>
                <div class="project-card fade_bottom">
                    <img src="<?= $item->project_image->url ?>" width="<?= $item->project_width ?>" height="<?= $item->project_height ?>" alt="<?= $item->project_title ?>">
                    <img src="<?= $item->project_image->url ?>" width="<?= $item->project_width ?>" height="<?= $item->project_height ?>" alt="<?= $item->project_title ?>">
                    <div class="content">
                        <h2>
                            <a href="<?= $item->project_link->url ?? '#' ?>">
                                <?= $item->project_title ?>
                            </a>
                        </h2>
                        <span><?= $item->project_category ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="project-allBtn fade_bottom">
            <a href="<?= $page->projects_cta_link->url ?>" class="theme-btn">
                <span class="rolling-text"><?= $page->projects_cta_label ?></span>
                <img src="<?= $config->urls->templates ?>images/right-arrow-2.svg" alt="">
            </a>
        </div>
    </div>
</section>