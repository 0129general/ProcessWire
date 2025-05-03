<!--===== start wpo-project-section =====-->
<section class="wpo-project-section section-padding">
    <div class="container-fulid">
        <div class="title">
            <h2 class="poort-text poort-in-right">Onze projecten</h2>
        </div>
        <div class="project-wrap">
            <?php
            $projects = [
                ['img' => 'building_1.png', 'title' => 'Robust und schön: Klinker', 'width' => '740', 'height' => '560'],
                ['img' => 'building_2.png', 'title' => 'Schöne Architektur', 'width' => '940', 'height' => '560'],
                ['img' => 'building_3.png', 'title' => 'energie-efficiëntie', 'width' => '940', 'height' => '560'],
                ['img' => 'bathroom_1.png', 'title' => 'wertige Ausstattung', 'width' => '740', 'height' => '560']
            ];
            foreach ($projects as $project):
            ?>
                <div class="project-card fade_bottom">
                    <img src="<?= $assets ?>/images/project/project-1/<?= $project['img'] ?>" width=" <?= $project['width'] ?>" height=" <?= $project['height'] ?>" alt="project-1">
                    <img src="<?= $assets ?>/images/project/project-1/<?= $project['img'] ?>" width=" <?= $project['width'] ?>" height=" <?= $project['height'] ?>" alt="project-1">
                    <div class="content">
                        <h2><a href="<?= $pages->get('/project-single/')->url ?>"><?= $project['title'] ?></a></h2>
                        <span>Gebouw, kamer</span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="project-allBtn fade_bottom">
            <a href="<?= $pages->get('/projects/')->url ?>" class="theme-btn">
                <span class="rolling-text">Bekijk alle projecten</span>
                <img src="<?= $assets ?>/images/right-arrow-2.svg" alt="">
            </a>
        </div>
    </div>
</section>