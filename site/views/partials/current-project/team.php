<section class="wpo-team-section-s2 section-padding">
    <div class="container-fluid p-0">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $page->team_heading ?></h2>
            <p class="poort-text poort-in-right"><?= $page->team_paragraph ?></p>
        </div>
        <div class="team-wrap">
            <div class="row">
                <?php foreach ($page->team_members as $member): ?>
                    <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                        <div class="team-card">
                            <div class="image">
                                <?php if ($member->member_image): ?>
                                    <img src="<?= $member->member_image->url ?>" alt="team">
                                    <img src="<?= $member->member_image->url ?>" alt="team">
                                <?php endif; ?>
                            </div>
                            <h2>
                                <a href="<?= $member->member_link ?>">
                                    <span class="rolling-text"><?= $member->member_name ?></span>
                                </a>
                            </h2>
                            <span><?= $member->member_position ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>