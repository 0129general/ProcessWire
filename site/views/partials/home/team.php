<!--===== start wpo-team-section =====-->
<section class="wpo-team-section">
    <div class="container-fluid">
        <div class="title">
            <h2 class="poort-text poort-in-right">Our Team</h2>
        </div>
        <div class="team-slider owl-carousel">
            <?php
            $team = [
                ['img' => '1.jpg', 'name' => 'Robert Fox', 'role' => 'Senior Architect'],
                ['img' => '2.jpg', 'name' => 'Harvard Bunion', 'role' => 'Partner & CEO'],
                ['img' => '3.jpg', 'name' => 'Benzamin Simon', 'role' => 'Interior Designer'],
            ];
            foreach ($team as $member):
            ?>
                <div class="col">
                    <div class="team-card">
                        <div class="image">
                            <img src="<?= $assets ?>/images/home/<?= $member['img'] ?>" alt="team">
                            <img src="<?= $assets ?>/images/home/<?= $member['img'] ?>" alt="team">
                        </div>
                        <h2><a href="#">
                                <span class="rolling-text"><?= $member['name'] ?></span></a>
                        </h2>
                        <span><?= $member['role'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>