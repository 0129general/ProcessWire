<section class="wpo-service-section-s12 section-padding">
    <div class="container-fluid p-0">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $page->svc_s12_title ?></h2>
            <h3 class="poort-text poort-in-right"><?= $page->svc_s12_subtitle ?></h3>
        </div>
        <div class="service-wrap">
            <div class="row">
                <?php foreach ($page->svc_s12_items as $item): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="service-card-s12">
                            <div class="top">
                                <div class="icon">
                                    <img src="<?= $item->svc_item_image->url ?>" alt="icon">
                                </div>
                                <h2>
                                    <a href="<?= $item->svc_item_link ?>">
                                        <?= $item->svc_item_title ?>
                                    </a>
                                </h2>
                                <p><?= $item->svc_item_desc ?></p>
                            </div>
                            <div class="buttom">
                                <a href="<?= $item->svc_item_link ?>">
                                    <?= $page->svc_s12_button_text ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>