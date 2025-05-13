<section class="wpo-service-section-s8 section-padding">
    <div class="container-fluid p-0">
        <div class="service-wrap">
            <div class="row">
                <?php foreach ($page->cur_project_services as $service): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="service-card">
                            <div class="icon">
                                <?php if ($service->cur_service_icon): ?>
                                    <img src="<?= $service->cur_service_icon->url ?>" alt="icon">
                                <?php endif; ?>
                            </div>
                            <h2>
                                <a href="<?= $service->cur_service_link ?>">
                                    <?= $service->cur_service_title ?>
                                </a>
                            </h2>
                            <p><?= $service->cur_service_description ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>