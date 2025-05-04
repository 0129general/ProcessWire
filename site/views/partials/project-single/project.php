<?php
$assets = $config->urls->templates . 'assets';

// Example dynamic content (replace with actual data from your CMS or API)
$info_title = "Project Info:";
$project = [
    'title' => 'Modern Loft Renovation',
    'image' => "$assets/images/projects/modern-loft.jpg",
    'description1' => 'Modern Loft is a beautifully renovated residential space that combines contemporary design with industrial aesthetics. Featuring open-concept layouts, natural lighting, and sustainable materials, this project reflects our commitment to innovative design and quality craftsmanship.',
    'description2' => 'The space was transformed within five months, focusing on functionality, comfort, and modern elegance. Our team collaborated closely with the client to ensure every detail matched their lifestyle needs.',
    'info' => [
        'Project'   => 'Modern Loft',
        'Architect' => 'Emma Carlisle',
        'Clients'   => 'Sarah Lin',
        'Duration'  => '05 Months',
        'Budget'    => '$120,000',
        'Location'  => 'Brooklyn, NY'
    ]
];
?>

<!--===== start project-single-page =====-->
<section class="project-single-page">
    <div class="container-fluid">
        <div class="project-image scroll-text-animation" data-animation="fade_from_bottom">
            <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
        </div>
        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <div class="content">
                    <h2 class="poort-text poort-in-right"><?= $project['title'] ?></h2>
                    <p><span>M</span><?= $project['description1'] ?></p>
                    <p><?= $project['description2'] ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                <div class="description">
                    <h3><?php $info_title ?></h3>
                    <ul>
                        <?php foreach ($project['info'] as $label => $value): ?>
                            <li><span><?= $label ?> :</span> <span><?= $value ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>