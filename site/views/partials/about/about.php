<section class="wpo-about-section-s12 section-padding">
    <div class="wraper">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <?php if ($page->about_image): ?>
                        <img src="<?= $page->about_image->url ?>" alt="About Image">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right">
                    <h2 class="fade_bottom"><?= $page->about_us_title ?></h2>
                    <h3 class="fade_bottom"><?= $page->about_subtitle ?></h3>
                    <p><?= $page->about_description ?></p>
                    <div class="fanfuct">
                        <div class="row">
                            <div class="col-md-6 col-12 fade_bottom">
                                <div class="item">
                                    <h4>
                                        <span class="odometer" data-count="<?= $page->about_stat_1_count ?>">00</span>
                                        <span class="icon">+</span>
                                    </h4>
                                    <h5><?= $page->about_stat_1_label ?></h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 fade_bottom">
                                <div class="item">
                                    <h4>
                                        <span class="odometer" data-count="<?= $page->about_stat_2_count ?>">00</span>
                                        <span class="icon">+</span>
                                    </h4>
                                    <h5><?= $page->about_stat_2_label ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>