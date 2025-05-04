<?php
$assets = $config->urls->templates . 'assets/'; // Define the base path

$imagePath = $assets . 'images/projects/'; // Define the image directory

// Define the text for the section title and paragraph
$sectionTitle = 'Meet Our Renovation Expert Team';
$sectionParagraph = 'Leveraging advanced tools and techniques, Blaze ensures precision and efficiency.';

$teamMembers = [
    [
        'name' => 'Robert Fox',
        'position' => 'Senior Architect',
        'image' => 'team_1.jpg',
        'link' => '#'
    ],
    [
        'name' => 'Harry William',
        'position' => 'Interior Designer',
        'image' => 'team_2.jpg',
        'link' => '#'
    ],
    [
        'name' => 'Harvard Bunion',
        'position' => 'Partner & CEO',
        'image' => 'team_3.jpg',
        'link' => '#'
    ],
    [
        'name' => 'Benzamin Simon',
        'position' => 'Interior Designer',
        'image' => 'team_4.jpg',
        'link' => '#'
    ]
];
?>

<!--===== start wpo-team-section =====-->
<section class="wpo-team-section-s2 section-padding">
    <div class="container-fluid p-0">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $sectionTitle ?></h2>
            <p class="poort-text poort-in-right"><?= $sectionParagraph ?></p>
        </div>
        <div class="team-wrap">
            <div class="row">
                <?php foreach ($teamMembers as $member): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="team-card">
                            <div class="image">
                                <!-- Use the defined $imagePath variable for the image source -->
                                <img src="<?= $imagePath . $member['image'] ?>" alt="team">
                                <img src="<?= $imagePath . $member['image'] ?>" alt="team">
                            </div>
                            <h2>
                                <a href="<?= $member['link'] ?>">
                                    <span class="rolling-text"><?= $member['name'] ?></span>
                                </a>
                            </h2>
                            <span><?= $member['position'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>