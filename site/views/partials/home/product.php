<section class="wpo-product-section section-padding pt-0">
    <div class="container-fluid">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $page->places_heading ?></h2>
            <p class="poort-text poort-in-right"><?= $page->places_subheading ?></p>
        </div>

        <div class="row">
            <?php foreach ($page->places_list as $place): ?>
                <div class="col col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="shop-card">
                        <div class="image">
                            <img src="<?= $place->place_image->url ?>" alt="<?= $place->place_title ?>">
                        </div>
                        <div class="content">
                            <h2>
                                <a href="<?= $place->place_link ?: '#' ?>">
                                    <?= $place->place_title ?>
                                </a>
                            </h2>
                            <span><?= $place->place_time ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="project-allBtn fade_bottom">
            <a href="<?= $page->places_cta_link->url ?? '#' ?>" class="theme-btn">
                <span class="rolling-text"><?= $page->places_cta_label ?></span>
                <img src="<?= $config->urls->templates ?>images/right-arrow-2.svg" alt="">
            </a>
        </div>
    </div>
</section>