<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <ol>
                        <?php if ($page->founder_logo): ?>
                            <li>
                                <img src="<?= $page->founder_logo->url ?>" alt="logo">
                            </li>
                        <?php endif; ?>
                    </ol>
                    <h2 class="poort-text poort-in-right"><?= $page->founder_title ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wpo-blog-pg-section blog-pg-fullwidth section-padding pt-0">
    <div class="container-fluid">
        <div class="wpo-blog-wraper">
            <div class="wpo-blog-content">
                <div class="post format-standard-image scroll-text-animation" data-animation="fade_from_bottom">
                    <div class="entry-media">
                        <?php if ($page->founder_image): ?>
                            <img src="<?= $page->founder_image->url ?>" alt="founder">
                        <?php endif; ?>
                    </div>
                    <div class="entry-details">
                        <div class="entry-meta">
                            <ul>
                                <li><?= $page->founder_names ?></li>
                            </ul>
                        </div>
                        <h3><a href="#"><?= $page->founder_company ?></a></h3>
                        <p><?= $page->founder_paragraph ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>