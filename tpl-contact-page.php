<?php

/**
 * Template name: Contact page template
 */

/* Main section */
$mainHeader = themeRedux('th-contact-tp-main-s-header');
$mainSubheader = themeRedux('th-contact-tp-main-s-subheader');

$contactLocation = themeRedux('th-global-personal-location');
$contactPhone = themeRedux('th-global-personal-phone');
$contactEmail = themeRedux('th-global-personal-email');

get_header();
have_posts() && the_post();
?>

<!-- Header -->
<header class="header header--with-gradient u-bg-position-x-center" data-has-parallax data-background-url="<?= get_the_post_thumbnail_url(null, 'banner-thumbnail-large') ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h1 class="header__content-heading a-animated a-fadeInUp"><?= get_the_title() ?></h1>
            </div>
        </div>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main class="u-section">

    <div class="container">
        <div class="u-text-center">
            <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                <?php if($mainHeader): ?>
                    <h2 class="theme-heading__text"><?= $mainHeader ?></h2>
                <?php endif; ?>
                <?php if($mainSubheader): ?>
                    <div class="theme-heading__subtext"><?= $mainSubheader ?></div>
                <?php endif; ?>
            </div>
        </div>

        <div class="contact-info-ways">
            <div class="row">
                <div class="contact-info-way col-12 col-lg-4">
                    <div class="contact-way-box theme-card u-shadow-7">
                        <div class="theme-card__body">
                            <div class="contact-way-box__icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <?php if($contactLocation): ?>
                            <div class="contact-way-box__content">
                                <?= $contactLocation ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="contact-info-way col-12 col-lg-4">
                    <div class="contact-way-box theme-card u-shadow-7">
                        <div class="theme-card__body">
                            <div class="contact-way-box__icon">
                                <span class="fa fa-envelope-open-o"></span>
                            </div>
                            <?php if($contactEmail): ?>
                                <div class="contact-way-box__content">
                                    <?= $contactEmail ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="contact-info-way col-12 col-lg-4">
                    <div class="contact-way-box theme-card u-shadow-7">
                        <div class="theme-card__body">
                            <div class="contact-way-box__icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <?php if($contactPhone): ?>
                            <div class="contact-way-box__content">
                                <div id="protectedPhone" data-protected-area data-content="<?= $contactPhone ?>" data-label="Pokaż"></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>


<?= get_footer(); ?>
