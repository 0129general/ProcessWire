 <!--===== start wpo-funfact-section =====-->
 <section class="wpo-funfact-section">
     <div class="container-fluid">
         <div class="row">
             <?php
                $funfacts = [
                    ['count' => 215, 'label' => 'CURRENT CLIENTS'],
                    ['count' => 550, 'label' => 'PROJECTS COMPLETE'],
                    ['count' => 23, 'label' => 'YEARS OF EXPERIENCE'],
                    ['count' => 25, 'label' => 'OFFICES WORLDWIDE'],
                ];
                foreach ($funfacts as $fact):
                ?>
                 <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                     <div class="item">
                         <h2><span class="odometer" data-count="<?= $fact['count'] ?>">00</span> <span class="icon">+</span></h2>
                         <h3><?= $fact['label'] ?></h3>
                     </div>
                 </div>
             <?php endforeach; ?>
         </div>
     </div>
 </section>