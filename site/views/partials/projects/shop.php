<?php
// Define the base path for images
$imagePath = '/images/projects/';

// Define product details as an array of arrays
$products = [
    [
        'name' => 'Stylish Wooden Chair',
        'image' => 'pro_1.png',
        'link' => 'project-single.php',
        'old_price' => '$320.00',
        'new_price' => '$280.00'
    ],
    [
        'name' => 'Table With Vase',
        'image' => 'pro_2.png',
        'link' => 'project-single.php',
        'old_price' => '$400.00',
        'new_price' => '$380.00'
    ],
    [
        'name' => 'Table Lamp',
        'image' => 'pro_3.png',
        'link' => 'project-single.php',
        'old_price' => '$220.00',
        'new_price' => '$180.00'
    ],
    [
        'name' => 'Stylish Mini Tables',
        'image' => 'pro_4.png',
        'link' => 'project-single.php',
        'old_price' => '$420.00',
        'new_price' => '$380.00'
    ],
    [
        'name' => 'Stylish Chandelier',
        'image' => 'pro_5.png',
        'link' => 'project-single.php',
        'old_price' => '$320.00',
        'new_price' => '$280.00'
    ],
    [
        'name' => 'Wooden Mini Rack',
        'image' => 'pro_6.png',
        'link' => 'project-single.php',
        'old_price' => '$400.00',
        'new_price' => '$380.00'
    ]
];
?>

<!--===== start wpo-shop-section =====-->
<section class="wpo-shop-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col col-lg-4 col-md-6 col-12 fade_bottom">
                    <div class="shop-card">
                        <div class="image">
                            <img src="<?= $assets . $imagePath . $product['image'] ?>" alt="<?= $product['name'] ?>">
                            <!-- <button><i class="ti-heart"></i> <span>Add to cart</span></button> -->
                        </div>
                        <div class="content">
                            <h2><a href="<?= $product['link'] ?>"><?= $product['name'] ?></a></h2>
                            <del><?= $product['old_price'] ?></del>
                            <span><?= $product['new_price'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="pagination-wrapper pagination-wrapper-center">
                <ul class="pg-pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="ti-angle-left"></i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="ti-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>