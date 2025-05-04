<section class="wpo-partners-section fade_bottom">
  <h2 class="d-none">No Content</h2>
  <ul class="partners-slider">
    <?php
    $partners = ['1.png', '2.png', '3.png', '4.png', '5.png', '2.png'];
    foreach ($partners as $logo):
    ?>
      <li>
        <div>
          <img src="<?= $assets ?>/images/<?= $logo ?>" alt="partner logo">
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</section>