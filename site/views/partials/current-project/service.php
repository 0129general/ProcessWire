<?php
$services = [
    [
        'icon' => 'buildings1.svg',
        'title' => 'Custom Solutions',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'link' => 'service-single.html'
    ],
    [
        'icon' => 'dining-room1.svg',
        'title' => 'Furniture & Decor',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'link' => 'service-single.html'
    ],
    [
        'icon' => 'living-room1.svg',
        'title' => 'Interior Design',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'link' => 'service-single.html'
    ],
    [
        'icon' => 'planning1.svg',
        'title' => 'Design & Planning',
        'description' => 'Magnis lorem tinidunt eunamdictu mstlacus. Mattis risus vitae pretium viverra libero dapibus.',
        'link' => 'service-single.html'
    ]
];
?>

<!--===== start wpo-service-section =====-->
<section class="wpo-service-section-s8 section-padding">
    <div class="container-fluid p-0">
        <div class="service-wrap">
            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="service-card">
                            <div class="icon">
                                <img src="<?= $assets ?>/images/projects/<?= $service['icon'] ?>" alt="icon">
                            </div>
                            <h2><a href="<?= $service['link'] ?>"><?= $service['title'] ?></a></h2>
                            <p><?= $service['description'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>