<?php
// Define PHP variables for dynamic content
$aboutImage = "$assets/images/about/construct.png"; // Image source
$aboutTitle = "About Us";
$aboutSubtitle = "Bliize is An Award Winning Construction Company";
$aboutText = "Blaze is a trailblazing architecture agency renowned for its innovative approach to design, where creativity meets functionality. From futuristic skyscrapers to timeless cultural landmarks, We specialize in crafting spaces that inspire and endure. Blaze pushes boundaries, transforming bold concepts into architectural masterpieces.";
$currentClients = 215;
$projectsComplete = 550;
$currentClientsLabel = "CURRENT CLIENTS";
$projectsCompleteLabel = "PROJECTS COMPLETE";
?>

<!--===== start wpo-about-section-s12 =====-->
<section class="wpo-about-section-s12 section-padding">
    <div class="wraper">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <img src="<?= $aboutImage ?>" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right">
                    <h2 class="fade_bottom"><?= $aboutTitle ?></h2>
                    <h3 class="fade_bottom"><?= $aboutSubtitle ?></h3>
                    <p><?= $aboutText ?></p>
                    <div class="fanfuct">
                        <div class="row">
                            <div class="col-md-6 col-12 fade_bottom">
                                <div class="item">
                                    <h4><span class="odometer" data-count="<?= $currentClients ?>">00</span> <span class="icon">+</span></h4>
                                    <h5><?= $currentClientsLabel ?></h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 fade_bottom">
                                <div class="item">
                                    <h4><span class="odometer" data-count="<?= $projectsComplete ?>">00</span> <span class="icon">+</span></h4>
                                    <h5><?= $projectsCompleteLabel ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== end wpo-about-section-s12 =====-->