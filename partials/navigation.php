<?php

$navigationLinkedInUrl = themeRedux('th-global-socialMedia-linkedIn');
$navigationInstagramUrl = themeRedux('th-global-socialMedia-instagram');
$navigationFacebookUrl = themeRedux('th-global-socialMedia-facebook');

?>

<!-- Navigation -->
<div data-nav-sticky
     class="navigation <?= !is_page_template('tpl-projects-page.php') ? 'navigation--sticky' : null ?> navigation--with-color a-animated a-fadeInDown">
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
    <span data-search-tpl="searchTpl" class="fa fa-search search-btn d-none d-lg-block navigation__search-trigger"></span>
    <!-- END: Search btn -->

    <!-- Social media icons -->
    <?php if(!is_page_template('tpl-projects-page.php')): ?>
    <ul class="social-media-icons">
        <li><span>Obserwuj mnie na: </span></li>
        <li><a href="<?=  $navigationLinkedInUrl ?>"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="<?= $navigationFacebookUrl ?>"><span class="fa fa-facebook"></span></a></li>
        <li><a href="<?= $navigationInstagramUrl ?>"><span class="fa fa-instagram"></span></a></li>
    </ul>
    <?php endif; ?>
    <!-- END: Social media icons -->

</div>
<!-- END: Navigation -->
