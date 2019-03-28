<?php
the_post();
get_header();
?>

<!-- Header -->
<header class="header header--with-gradient" data-has-parallax data-background-url="<?= get_the_post_thumbnail_url(null, 'banner-thumbnail') ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h1 class="header__content-heading"><?= get_the_title() ?></h1>
            </div>
        </div>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main class="u-section u-bg-primary-grey">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?= the_content() ?>
            </div>
        </div>
    </div>

</main>


<?= get_footer(); ?>
