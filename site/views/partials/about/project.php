<?php
// Define variables for the section content
$section_title = "Discover Our Recent Projects";
$section_subtitle = "Cum cras ultrices netus nulla nunc. Interdum duis pulvinar est potenti magna mus enim tincidunt. Erat metus vitae egestas nunc viverra.";

// Define an array of projects with their details
$projects = [
    [
        'name' => 'Kitchen Renovation',
        'category' => 'Building, Apartment',
        'image' => '/images/about/recent_pro_1.jpg',
        'link' => 'project-single.html'
    ],
    [
        'name' => 'Office Renovation',
        'category' => 'Building, Apartment',
        'image' => '/images/about/recent_pro_2.jpg',
        'link' => 'project-single.html'
    ],
    [
        'name' => 'Corridor Renovation',
        'category' => 'Building, Apartment',
        'image' => '/images/about/recent_pro_3.jpg',
        'link' => 'project-single.html'
    ]
];

// Background image
$background_image = "$assets/images/about/project-bg.png";
?>

<!--===== start wpo-project-section =====-->
<section class="wpo-project-section-s12">
    <div class="wraper">
        <div class="title">
            <span>Portfolio</span>
            <h2 class="poort-text poort-in-right"><?= $section_title ?></h2>
            <p class="poort-text poort-in-right"><?= $section_subtitle ?></p>
        </div>
        <div class="project-slider-s11 owl-carousel">
            <?php foreach ($projects as $project): ?>
                <div class="item">
                    <div class="imgWrap">
                        <img src="<?= $assets . $project['image'] ?>" alt="" class="x1">
                    </div>
                    <div class="content">
                        <h2><a href="<?= $project['link'] ?>"><?= $project['name'] ?></a></h2>
                        <span><?= $project['category'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="bg-image">
        <img src="<?= $background_image ?>" alt="">
    </div>
</section>
<!--===== end wpo-project-section =====-->