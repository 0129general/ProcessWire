<section class="wpo-shop-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <?php foreach ($page->shop_products as $product): ?>
                <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                    <div class="shop-card">
                        <div class="image">
                            <?php if ($product->shop_product_image): ?>
                                <img src="<?= $product->shop_product_image->url ?>" alt="<?= $product->shop_product_name ?>">
                            <?php endif; ?>
                            <!-- <button><i class="ti-heart"></i> <span>Add to cart</span></button> -->
                        </div>
                        <div class="content">
                            <h2>
                                <a href="<?= $product->shop_product_link ?>">
                                    <?= $product->shop_product_name ?>
                                </a>
                            </h2>
                            <del><?= $product->shop_product_old_price ?></del>
                            <span><?= $product->shop_product_new_price ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="pagination-wrapper pagination-wrapper-center">
                <ul class="pg-pagination">
                    <li><a href="#"><i class="ti-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="ti-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>