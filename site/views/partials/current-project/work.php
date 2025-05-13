<section class="wpo-work-section-s3">
    <div class="container-fluid p-0">
        <div class="wraper">
            <div class="left-content">
                <h2 class="poort-text poort-in-right"><?= $page->work_title ?></h2>
                <ul class="scroll-text-animation" data-animation="fade_from_right">
                    <?php foreach ($page->work_steps as $i => $step): ?>
                        <li><a href="#"><?= ($i + 1) ?>. <?= $step->step_label ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="right-image">
                <?php if ($page->work_image): ?>
                    <img src="<?= $page->work_image->url ?>" alt="Work Step Image">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>