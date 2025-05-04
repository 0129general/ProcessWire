<?php
// Define variables for the content
$section_title = "Our Services";
$section_subtitle = "Service We Provide";
$discover_more = "Discover More...";
// Define PHP variables for dynamic content
$services = [
    [
        'name' => 'Custom Solutions',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'image' => '/images/about/excavator.svg',
        'link' => '#'
    ],
    [
        'name' => 'House Renovation',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'image' => '/images/about/contractor.svg',
        'link' => '#'
    ],
    [
        'name' => 'General Contractor',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'image' => '/images/about/engineering.svg',
        'link' => '#'
    ],
    [
        'name' => 'City Landmarks',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'image' => '/images/about/property.svg',
        'link' => '#'
    ]
];
?>

<!--===== start wpo-service-section =====-->
<section class="wpo-service-section-s12 section-padding">
    <div class="container-fluid p-0">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $section_title ?></h2>
            <h3 class="poort-text poort-in-right"><?= $section_subtitle ?></h3>
        </div>
        <div class="service-wrap">
            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="service-card-s12">
                            <div class="top">
                                <div class="icon">
                                    <img src="<?= $assets . $service['image'] ?>" alt="icon">
                                </div>
                                <h2><a href="<?= $service['link'] ?>"><?= $service['name'] ?></a></h2>
                                <p><?= $service['description'] ?></p>
                            </div>
                            <div class="buttom">
                                <a href="<?= $service['link'] ?>"><?= $discover_more ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--===== end wpo-service-section =====-->