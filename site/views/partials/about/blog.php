<?php
// Define an array for blog posts
$blog_posts = [
    [
        'title' => 'Best Construction Idea For Your Next Projects',
        'excerpt' => 'Nunc sed ut purus pellentesque in lacus integer sagittis sed. Eget duis est sodales eu. Commodo faucibus urna felis vitae. Interdum pellentesque suspendisse siteget.',
        'image' => '/images/about/latest_1.jpg',
        'link' => 'blog-single.html'
    ],
    [
        'title' => 'Building the Architecture of Future cities',
        'excerpt' => '',
        'image' => '/images/about/latest_2.jpg',
        'link' => 'blog-single.html'
    ],
    [
        'title' => 'Brooklyn Great Penthouse Agreement and Deal',
        'excerpt' => '',
        'image' => '/images/about/latest_3.jpg',
        'link' => 'blog-single.html'
    ]
];

$ourBlog = "Our Blog";
$latestNews = "Latest News Update";
$readMore = "Read More...";
?>
<!--===== start wpo-blog-section =====-->
<section class="wpo-blog-section-s12 section-padding">
    <div class="container">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $ourBlog ?></h2>
            <h3 class="poort-text poort-in-right"><?= $latestNews ?></h3>
        </div>
        <div class="blog-wrap">
            <div class="row">
                <!-- Loop for the first blog card -->
                <div class="col col-lg-7  col-12 fade_bottom">
                    <div class="blog-card-s12">
                        <div class="image">
                            <img src="<?= $assets . $blog_posts[0]['image'] ?>" alt="blog">
                        </div>
                        <div class="text">
                            <h2><a href="<?= $blog_posts[0]['link'] ?>"><?= $blog_posts[0]['title'] ?></a></h2>
                            <p><?= $blog_posts[0]['excerpt'] ?></p>
                            <a href="<?= $blog_posts[0]['link'] ?>"><?= $readMore ?></a>
                        </div>
                    </div>
                </div>

                <!-- Loop for the other blog cards (the rest) -->
                <div class="col col-lg-5  col-12 fade_bottom">
                    <?php foreach (array_slice($blog_posts, 1) as $post): ?>
                        <div class="blog-card-s12">
                            <div class="image">
                                <img src="<?= $assets . $post['image'] ?>" alt="blog">
                            </div>
                            <div class="text">
                                <h2><a href="<?= $post['link'] ?>"><?= $post['title'] ?></a></h2>
                                <?php if (!empty($post['excerpt'])): ?>
                                    <p><?= $post['excerpt'] ?></p>
                                <?php endif; ?>
                                <a href="<?= $post['link'] ?>"><?= $readMore ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===== end wpo-blog-section =====-->