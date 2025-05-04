<?php
// Section title variables
$sectionTagline = "Since 1994";
$sectionHeading = "Transforming Spaces, Elevating Lives";

// Project cards
$projects = [
    [
        'image' => 'lives_1.jpg',
        'title' => 'Office Renovation',
        'category' => 'Building, Apartment',
        'link' => $config->urls->root . 'project-single.php'
    ],
    [
        'image' => 'lives_2.jpg',
        'title' => 'Kitchen Renovation',
        'category' => 'Building, Apartment',
        'link' => $config->urls->root . 'project-single.php'
    ],
    [
        'image' => 'lives_4.jpg',
        'title' => 'Office Renovation',
        'category' => 'Building, Apartment',
        'link' => $config->urls->root . 'project-single.php'
    ],
    [
        'image' => 'lives_3.jpg',
        'title' => 'Corridor Renovation',
        'category' => 'Building, Apartment',
        'link' => $config->urls->root . 'project-single.php'
    ]
];
?>

<!--===== start wpo-project-section =====-->
<section class="wpo-project-section-s8 section-padding pt-0">
    <div class="container-fulid">
        <div class="title">
            <span class="poort-text poort-in-right"><?= $sectionTagline ?></span>
            <h2 class="poort-text poort-in-right"><?= $sectionHeading ?></h2>
        </div>
        <div class="sortable-gallery">
            <div class="gallery-filters"></div>
            <div class="row gallery-container">
                <?php foreach ($projects as $project): ?>
                    <div class="col col-lg-6 col-12 scroll-text-animation" data-animation="fade_from_bottom">
                        <div class="project-card-s7">
                            <div class="image">
                                <img src="<?= $assets ?>/images/projects/<?= $project['image'] ?>" alt="">
                            </div>
                            <div class="content">
                                <h2><a href="<?= $project['link'] ?>"><?= $project['title'] ?></a></h2>
                                <span><?= $project['category'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>