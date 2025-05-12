<?php $s = $page; ?>
<footer class="wpo-site-footer">
    <div class="wpo-upper-footer">
        <div class="container-fluid">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-3 col-md-6 fade_bottom">
                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <?php if ($s->footer_logo): ?>
                                <img src="<?= $s->footer_logo->url ?>" alt="logo">
                            <?php endif; ?>
                        </div>
                        <p><?= $s->footer_about_text ?></p>
                        <div class="social-widget">
                            <ul>
                                <li>
                                    <?php foreach ($s->footer_social_links as $icon): ?>
                                        <a href="<?= $icon->link_url ?>"><i class="<?= $icon->icon_class ?>"></i></a>
                                    <?php endforeach; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-3 col-md-6 fade_bottom">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3><?= $s->footer_contact_heading ?: 'Kontakt' ?></h3>
                        </div>
                        <ul>
                            <?php foreach ($s->footer_contact_items as $item): ?>
                                <li><?= $item->text ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="col-lg-3 col-md-6 fade_bottom">
                    <div class="widget link-widget">
                        <div class="widget-title">
                            <h3><?= $s->footer_quicklinks_heading ?: 'Schnellzugriff' ?></h3>
                        </div>
                        <ul>
                            <?php foreach ($s->footer_quick_links as $link): ?>
                                <li>
                                    <a href="<?= $link->target_page->url ?>">
                                        <span class="rolling-text"><?= $link->label ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter Column -->
                <div class="col-lg-3 col-md-6 fade_bottom">
                    <div class="widget newsletter-widget">
                        <div class="widget-title">
                            <h3><?= $s->footer_newsletter_title ?></h3>
                        </div>
                        <form>
                            <form> <input type="email" class="input-fild" placeholder="<?= $s->footer_newsletter_placeholder ?: 'Your Email...' ?>" /> <button><?= $s->footer_newsletter_button_label ?: 'Subscribe' ?></button> </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wpo-lower-footer">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <p class="copyright">
                        <?= $s->footer_copyright ?>
                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <ul class="right">
                        <?php foreach ($s->footer_bottom_links as $bl): ?>
                            <li>
                                <a href="<?= $bl->target_page->url ?>">
                                    <span class="rolling-text"><?= $bl->label ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>