<?= get_header() ?>

<!-- Header -->
<header class="header" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
    <!-- Navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-8 col-lg-4">
                    <!-- Brand -->
                    <div class="navigation__brand">
                        <figure class="navigation__brand-avatar">
                            <img src="http://placehold.it/50x50" alt="Przemysław Chudziński">
                        </figure>
                        <div class="navigation__brand-meta">
                            <span class="navigation__brand-meta-heading">Przemysław Chudziński</span>
                            <span class="navigation__brand-meta-description">Webdeveloper</span>
                        </div>
                    </div>
                    <!-- END: Brand -->
                </div>
                <div class="col-4 col-lg-8">
                    <nav class="navigation__nav">
                        <!-- Desktop nav -->
                        <?= wp_nav_menu([
                            'menu_class' => 'navigation__list d-none d-lg-flex',
                            'menu' => 'primary',
                            'container' => ''
                        ]) ?>
                        <!-- END: Desktop nav -->
                        <!-- Mobile -->
                        <div class="navigation__mobile-btn d-lg-none">
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
    </div>
    <!-- END: Navigation -->
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h1 class="header__content-heading"><?= get_the_title() ?></h1>
            </div>
        </div>
    </div>
</header>
<!-- END: Header -->

<main>

    <div class="container">
        <?= the_content() ?>
    </div>

</main>

<?= get_footer(); ?>
