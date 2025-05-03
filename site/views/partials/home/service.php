 <!--===== start wpo-service-section =====-->
 <section class="wpo-service-section">
     <div class="container-fluid p-0">
         <div class="service-top">
             <div class="image">
                 <img src="<?= $assets ?>/images/service/room_1.png" alt="service-bg">
             </div>
             <div class="content">
                 <h2 class="poort-text poort-in-right"></h2>
                 <p class="fade_bottom">
                     Vier exklusive Doppelhaushälften in idyllischer Lage in Handeloh bei Buchholz in der Nordheide
                 </p>
             </div>
         </div>
         <div class="service-wrap">
             <div class="row">
                 <?php
                    $services = [
                        ['icon' => 'icon_units.png', 'title' => 'EINHEITEN', 'content' => '4 Doppelhaushälften inkl. Carport und Stellplatz'],
                        ['icon' => 'icon_size.png', 'title' => 'GRÖßE', 'content' => 'Wohnfläche rund 135 m²
							4,5 Zimmer'],
                        ['icon' => 'icon_garden.png', 'title' => 'GARTENANTEIL', 'content' => 'Zwischen ca. 370 - 530 m² Grünfläche'],
                        ['icon' => 'icon_top_price.png', 'title' => 'TOP-PREISE', 'content' => 'ab 599.000 € pro Doppelhaushälfte'],
                    ];
                    foreach ($services as $service):
                    ?>
                     <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                         <div class="service-card">
                             <div class="icon">
                                 <img src="<?= $assets ?>/images/service/icon/<?= $service['icon'] ?>" alt="icon" width="45" height="45">
                             </div>
                             <h2><a href="<?= $pages->get('/service-single/')->url ?>"><?= $service['title'] ?></a></h2>
                             <p><?= $service['content'] ?></p>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </section>