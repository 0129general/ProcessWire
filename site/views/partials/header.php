<header id="header">
    <div class="wpo-site-header wpo-header-style">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row align-items-center g-0">
                    <!-- Mobile menu toggle button -->
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>

                    <!-- Logo -->
                    <div class="col-lg-5 col-md-6 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?= $pages->get('/')->url ?>">
                                <?php if ($page->header_logo): ?>
                                    <img src="<?= $page->header_logo->url ?>" alt="Logo">
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="col-lg-5 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <?php foreach ($page->header_menu_items as $item): ?>
                                    <?php if ($item->has_children && $item->submenu_items->count): ?>
                                        <li class="menu-item-has-children">
                                            <a href="#"><?= $item->menu_label ?></a>
                                            <ul class="sub-menu">
                                                <?php foreach ($item->submenu_items as $sub): ?>
                                                    <li>
                                                        <a href="<?= $sub->menu_target->url ?>">
                                                            <?= $sub->menu_label ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?= $item->menu_target->url ?>">
                                                <?= $item->menu_label ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="header-right">
                            <div class="close-form">
                                <a class="theme-btn" href="<?= $page->header_cta_page->url ?>">
                                    <?= $page->header_cta_label ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>