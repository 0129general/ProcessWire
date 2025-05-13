<section class="wpo-project-section-s8 section-padding pt-0">
    <div class="container-fluid">
        <div class="title">
            <span class="poort-text poort-in-right"><?= $page->fp_tagline ?></span>
            <h2 class="poort-text poort-in-right"><?= $page->fp_heading ?></h2>
        </div>
        <div class="sortable-gallery">
            <div class="gallery-filters"></div>
            <div class="row gallery-container">
                <?php foreach ($page->fp_projects as $item): ?>
                    <div class="col col-lg-6 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                        <div class="project-card-s7">
                            <div class="image">
                                <?php if ($item->fp_image): ?>
                                    <img src="<?= $item->fp_image->url ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <h2>
                                    <a href="<?= $item->fp_link ?>">
                                        <?= $item->fp_title ?>
                                    </a>
                                </h2>
                                <span><?= $item->fp_category ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>