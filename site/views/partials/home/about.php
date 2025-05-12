<section id="about" class="wpo-about-section section-padding pt-10 pb-0">
    <div class="about-wrap">
        <div class="content">
            <h2 class="poort-text poort-in-right"><?= $page->about_heading ?></h2>
            <h3><?= $page->about_title ?></h3>
            <p class="fade_bottom"><?= $page->about_intro ?></p>

            <?php foreach ($page->about_points as $point): ?>
                <p>
                    <i class="<?= $sanitizer->entities($point->icon_class) ?>" style="margin-right:30px;color:#416239;font-size:17px"></i>
                    <?= $sanitizer->entities($point->text) ?>
                </p>
            <?php endforeach; ?>

            <div class="about-btn fade_bottom">
                <a href="<?= $page->about_cta_page->url ?>" class="theme-btn">
                    <span class="rolling-text"><?= $page->about_cta_label ?></span>
                </a>

                <div class="video-wrap">
                    <div class="video-holder">
                        <a href="<?= $page->about_video_url ?>" class="video-btn" data-type="iframe">
                            <svg width="24" height="27" viewBox="0 0 24 27" fill="none">
                                <path d="M22.25 15.665L5 25.62C3.33 26.58 1.25 25.38 1.25 23.45V3.54C1.25 1.61 3.33 0.41 5 1.37L22.25 11.33C23.91 12.29 23.91 14.70 22.25 15.66Z" stroke="black" />
                            </svg>
                        </a>
                    </div>
                    <span><?= $page->about_video_caption ?></span>
                </div>
            </div>

            <div class="about-funfact fade_bottom">
                <h3>
                    <span class="odometer" data-count="<?= $page->about_years_number ?>">00</span>
                    <span class="icon">+</span>
                </h3>
                <h4><?= $page->about_years_label ?></h4>
            </div>
        </div>
    </div>

    <div class="image">
        <div class="image-1 poort-in-right">
            <?php if ($page->about_image_left): ?>
                <img src="<?= $page->about_image_left->url ?>" width="711" height="1037" alt="">
            <?php endif; ?>
        </div>
        <div class="image-2 poort-in-right">
            <?php if ($page->about_image_right): ?>
                <img src="<?= $page->about_image_right->url ?>" width="520" height="800" alt="">
            <?php endif; ?>
        </div>
    </div>
</section>