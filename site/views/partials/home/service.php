<section class="wpo-service-section">
    <div class="container-fluid p-0">
        <div class="service-top">
            <div class="image">
                <?php if ($page->services_image): ?>
                    <img src="<?= $page->services_image->url ?>" alt="service-bg">
                <?php endif; ?>
            </div>
            <div class="content">
                <h2 class="poort-text poort-in-right"><?= $page->services_title ?></h2>
                <p class="fade_bottom"><?= $page->services_intro ?></p>
            </div>
        </div>
        <div class="service-wrap">
            <div class="row">
                <?php foreach ($page->services_items as $item): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="service-card">
                            <div class="icon">
                                <img src="<?= $item->service_icon->url ?>" alt="icon" width="45" height="45">
                            </div>
                            <h2><a href="#"><?= $item->service_title ?></a></h2>
                            <p><?= $item->service_content ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>