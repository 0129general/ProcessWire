  <!--===== start wpo-testimonial-section =====-->
  <section class="wpo-testimonial-section">
      <div class="testimonial-slider owl-carousel">
          <?php
            $testimonials = [
                ['img' => 'img-1.jpg', 'name' => 'Leslie Alexander', 'role' => 'Marketing Coordinator'],
                ['img' => 'img-2.jpg', 'name' => 'Sarah Krause', 'role' => 'Marketing Coordinator'],
                ['img' => 'img-3.jpg', 'name' => 'Lavonne Smith', 'role' => 'Marketing Coordinator'],
            ];
            foreach ($testimonials as $item):
            ?>
              <div class="item">
                  <div class="bg-image">
                      <img src="<?= $assets ?>/images/testimonial/<?= $item['img'] ?>" alt="testimonial">
                  </div>
                  <div class="content fade_bottom">
                      <div class="icon">
                          <img src="<?= $assets ?>/images/testimonial/quote.svg" alt="quote">
                      </div>
                      <h3>
                          Ac sollicitudin euismod ut luctus felis lacus sed pellentesque. Purus eget consectur massa amet.
                          Hac diam suspendisse faucibus posuere dignissim magna condimentum tristique.
                      </h3>
                      <h4><?= $item['name'] ?></h4>
                      <span><?= $item['role'] ?></span>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </section>