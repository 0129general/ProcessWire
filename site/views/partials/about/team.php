<section class="wpo-team-section-s12 section-padding">
    <div class="container">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $page->team_s12_heading ?></h2>
            <h3 class="poort-text poort-in-right"><?= $page->team_s12_subtitle ?></h3>
        </div>
        <div class="team-wrap">
            <div class="row">
                <?php foreach ($page->team_s12_members as $member): ?>
                    <div class="col-lg-4 col-md-6 col-12 fade_bottom">
                        <div class="team-card-s12">
                            <div class="image">
                                <?php if ($member->team_member_image): ?>
                                    <img src="<?= $member->team_member_image->url ?>" alt="team">
                                    <img src="<?= $member->team_member_image->url ?>" alt="team">
                                <?php endif; ?>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="<?= $member->team_member_link ?>">
                                        <span class="rolling-text"><?= $member->team_member_name ?></span>
                                    </a>
                                </h2>
                                <span><?= $member->team_member_role ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>