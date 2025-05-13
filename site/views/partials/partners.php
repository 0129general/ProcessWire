<section class="wpo-partners-section fade_bottom">
  <h2 class="d-none">No Content</h2>
  <ul class="partners-slider">
    <?php foreach ($page->partner_logos as $item): ?>
      <li>
        <div>
          <?php if ($item->partner_url): ?>
            <a href="<?= $item->partner_url ?>" target="_blank" rel="noopener">
            <?php endif; ?>

            <img src="<?= $item->partner_logo_image->url ?>" alt="<?= $item->partner_name ?: 'partner logo' ?>">

            <?php if ($item->partner_url): ?>
            </a>
          <?php endif; ?>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>