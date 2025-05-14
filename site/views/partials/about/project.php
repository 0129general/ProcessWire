<section class="wpo-project-section-s12">
    <div class="wraper">
        <div class="title">
            <span><?= $page->recent_portfolio ?></span>
            <h2 class="poort-text poort-in-right"><?= $page->recent_projects_title ?></h2>
            <p class="poort-text poort-in-right"><?= $page->recent_projects_subtitle ?></p>
        </div>

        <div class="project-slider-s11 owl-carousel">
            <?php foreach ($page->recent_projects_list as $project): ?>
                <div class="item">
                    <div class="imgWrap">
                        <?php if ($project->recent_project_image): ?>
                            <img src="<?= $project->recent_project_image->url ?>" alt="" class="x1">
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <h2><a href="<?= $project->recent_project_link ?>"><?= $project->recent_project_name ?></a></h2>
                        <span><?= $project->recent_project_category ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if ($page->recent_projects_background): ?>
        <div class="bg-image">
            <img src="<?= $page->recent_projects_background->url ?>" alt="">
        </div>
    <?php endif; ?>
</section>