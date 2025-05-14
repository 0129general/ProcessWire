<section class="wpo-blog-section-s12 section-padding">
    <div class="container">
        <div class="title">
            <h2 class="poort-text poort-in-right"><?= $page->blog_heading ?></h2>
            <h3 class="poort-text poort-in-right"><?= $page->blog_subheading ?></h3>
        </div>

        <div class="blog-wrap">
            <div class="row">
                <?php if (count($page->blog_items)): ?>
                    <!-- First large blog post -->
                    <?php $first = $page->blog_items->first(); ?>
                    <div class="col col-lg-7 col-12 fade_bottom">
                        <div class="blog-card-s12">
                            <div class="image">
                                <img src="<?= $first->blog_image->url ?>" alt="blog">
                            </div>
                            <div class="text">
                                <h2><a href="<?= $first->blog_link ?>"><?= $first->blog_title ?></a></h2>
                                <p><?= $first->blog_excerpt ?></p>
                                <a href="<?= $first->blog_link ?>"><?= $page->blog_readmore ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- Remaining blog posts -->
                    <div class="col col-lg-5 col-12 fade_bottom">
                        <?php foreach ($page->blog_items->slice(1) as $post): ?>
                            <div class="blog-card-s12">
                                <div class="image">
                                    <img src="<?= $post->blog_image->url ?>" alt="blog">
                                </div>
                                <div class="text">
                                    <h2><a href="<?= $post->blog_link ?>"><?= $post->blog_title ?></a></h2>
                                    <?php if ($post->blog_excerpt): ?>
                                        <p><?= $post->blog_excerpt ?></p>
                                    <?php endif; ?>
                                    <a href="<?= $post->blog_link ?>"><?= $page->blog_readmore ?></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>