<section class="wpo-hero-slider">
  <div class="swiper-container">
    <div class="relative w-full h-screen overflow-hidden">
      <?php if ($page->landing_video): ?>
        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted playsinline>
          <source src="<?= $page->landing_video->url ?>" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      <?php endif; ?>
    </div>
  </div>

  <a href="<?= $page->landing_scroll_target ?>" class="scroll-btn">
    <span><?= $page->landing_scroll_label ?></span>
    <div class="scroll-befor">
      <?php if ($page->landing_scroll_icon): ?>
        <img src="<?= $page->landing_scroll_icon->url ?>" alt="">
      <?php endif; ?>
    </div>
  </a>
</section>