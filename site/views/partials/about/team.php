<?php
// Define an array for team members' data
$team_members = [
    [
        'name' => 'Wade Warren',
        'role' => 'Senior Architect',
        'image' => '/images/about/arch_1.jpg',
        'link' => 'team-single.html'
    ],
    [
        'name' => 'Esther Howard',
        'role' => 'Senior Architect',
        'image' => '/images/about/arch_2.jpg',
        'link' => 'team-single.html'
    ],
    [
        'name' => 'Robert Willum',
        'role' => 'Senior Architect',
        'image' => '/images/about/arch_3.jpg',
        'link' => 'team-single.html'
    ]
];

$ourteam = "Our Team";
$title = "Our Expert Architect";
?>

<!--===== start wpo-team-section =====-->
<section class="wpo-team-section-s12 section-padding">
    <div class="container">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $ourteam ?></h2>
            <h3 class="poort-text poort-in-right"><?= $title ?></h3>
        </div>
        <div class="team-wrap">
            <div class="row">
                <?php foreach ($team_members as $member): ?>
                    <div class="col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="team-card-s12">
                            <div class="image">
                                <img src="<?= $assets . $member['image'] ?>" alt="team">
                                <img src="<?= $assets . $member['image'] ?>" alt="team">
                            </div>
                            <div class="text">
                                <h2><a href="<?= $member['link'] ?>"> <span class="rolling-text"><?= $member['name'] ?></span></a></h2>
                                <span><?= $member['role'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--===== end wpo-team-section =====-->