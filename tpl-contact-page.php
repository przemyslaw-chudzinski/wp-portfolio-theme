<?php

/**
 * Template name: Contact page template
 */

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
                <h2 class="theme-heading__text">Zatrudnij mnie</h2>
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
                            <div class="contact-way-box__content">
                                Kraków
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-info-way col-12 col-lg-4">
                    <div class="contact-way-box theme-card u-shadow-7">
                        <div class="theme-card__body">
                            <div class="contact-way-box__icon">
                                <span class="fa fa-envelope-open-o"></span>
                            </div>
                            <div class="contact-way-box__content">
                                kontakt@przemyslawchudzinski.pl
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-info-way col-12 col-lg-4">
                    <div class="contact-way-box theme-card u-shadow-7">
                        <div class="theme-card__body">
                            <div class="contact-way-box__icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="contact-way-box__content">
                                <div id="protectedPhone" data-protected-area data-content="+48 123 123 123" data-label="Pokaż"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>


<?= get_footer(); ?>
