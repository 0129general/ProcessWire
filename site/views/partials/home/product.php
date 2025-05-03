  <!--===== start wpo-product-section =====-->
  <section class="wpo-product-section section-padding pt-0">
      <div class="container-fluid">
          <div class="title">
              <h2 class="poort-text poort-in-right">UMGEBUNG</h2>
              <p class="poort-text poort-in-right">Einige der schönsten Ausflugsziele</p>
          </div>
          <?php
            $places = [
                ['img' => 'natural_1.jpg', 'title' => 'Hamburg', 'time' => 'ca. 45 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_2.jpg', 'title' => 'Lüneburg', 'time' => 'ca. 45 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_3.jpg', 'title' => 'Heide Park Resort', 'time' => 'ca. 30 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_4.jpg', 'title' => 'Wilseder Berg', 'time' => 'ca. 19 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_5.jpg', 'title' => 'Büsenbachtal', 'time' => 'ca. 3 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_6.jpg', 'title' => 'Brunsberg', 'time' => 'ca. 14 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_7.jpg', 'title' => 'Jod-Sole-Therme Bad Bevensen', 'time' => 'ca. 60 min. mit dem Auto', 'link' => '#'],
                ['img' => 'natural_8.jpg', 'title' => 'Heide Kanu', 'time' => 'ca. 30 min. mit dem Auto', 'link' => '#'],
            ];
            ?>
          <div class="row">
              <?php foreach ($places as $place): ?>
                  <div class="col col-lg-3 col-md-6 col-12 fade_bottom">
                      <div class="shop-card">
                          <div class="image">
                              <img src="<?= $assets ?>/images/shop/<?= $place['img'] ?>" alt="<?= htmlspecialchars($place['title']) ?>">
                          </div>
                          <div class="content">
                              <h2><a href="<?= $place['link'] ?>"><?= $place['title'] ?></a></h2>
                              <span><?= $place['time'] ?></span>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
          <div class="project-allBtn fade_bottom">
              <a href="#" class="theme-btn"><span class="rolling-text">EXPOSÉ ANFORDERN</span> <img
                      src="assets/images/right-arrow-2.svg" alt=""></a>
          </div>
      </div>
  </section>