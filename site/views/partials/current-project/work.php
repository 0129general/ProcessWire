<?php
$assets = $config->urls->templates . 'assets/'; // Asset path
$workImage = 'images/projects/work-image-s3.jpg'; // Image filename
$sectionTitle = 'How We Manage Renovations'; // H2 title
$steps = [
    'Consultation & Deal',
    'Design & Planning',
    'Start Working',
    'Renovation',
    'Completion'
];
?>

<!--===== start wpo-work-section =====-->
<section class="wpo-work-section-s3">
    <div class="container-fluid p-0">
        <div class="wraper">
            <div class="left-content">
                <h2 class="poort-text poort-in-right"><?= $sectionTitle ?></h2>
                <ul class="scroll-text-animation" data-animation="fade_from_right">
                    <?php foreach ($steps as $index => $step): ?>
                        <li><a href="#"><?= ($index + 1) ?>. <?= $step ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="right-image">
                <img src="<?= $assets . $workImage ?>" alt="Work Step Image">
            </div>
        </div>
    </div>
</section>