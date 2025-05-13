<section class="wpo-partners-section fade_bottom">
  <h2 class="d-none">No Content</h2>
  <ul class="partners-slider"> <?php foreach ($page->partner_logos as $item): ?> <li>
        <div> <img src="<?= $item->partner_logo_image->first()->url ?>" alt="partner logo"> </div>
      </li> <?php endforeach; ?> </ul>
</section>