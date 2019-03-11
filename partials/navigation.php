<!-- Navigation -->
<div data-nav-sticky class="navigation <?= !is_page_template('tpl-projects-page.php') ? 'navigation--sticky' : null ?> navigation--with-color">
    <div class="container">
        <div class="row">
            <div class="col-8 col-lg-4">
                <a href="<?= get_home_url(); ?>">
                    <?= get_template_part('partials/brand') ?>
                </a>
            </div>
            <div class="col-4 col-lg-8">
                <nav class="navigation__nav">
                    <!-- Desktop nav -->
                    <?= wp_nav_menu([
                        'menu_class' => 'navigation__list d-none d-lg-flex',
                        'menu' => 'Primary Menu',
                        'container' => ''
                    ]); ?>
                    <!-- END: Desktop nav -->
                    <!-- Mobile -->
                    <div class="navigation__mobile-btn d-lg-none" data-mobile-target="menu1">
                        <div class="navigation__mobile-btn__wrapper">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- END: Mobile -->
                </nav>
            </div>
        </div>
    </div>
    <!-- Search btn -->
    <span data-search-target="search" class="fa fa-search search-btn d-none d-lg-block navigation__search-trigger"></span>
    <!-- END: Search btn -->
</div>
<!-- END: Navigation -->
