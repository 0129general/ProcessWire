<section class="wpo-funfact-section">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($page->funfacts as $fact): ?>
                <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                    <div class="item">
                        <h2>
                            <span class="odometer" data-count="<?= $fact->fact_count ?>">00</span>
                            <span class="icon">+</span>
                        </h2>
                        <h3><?= $fact->fact_label ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>