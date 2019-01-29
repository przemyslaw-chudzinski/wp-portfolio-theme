<?= get_header() ?>
<?php  have_posts() && the_post(); ?>

<!-- Header -->
<header class="header" data-has-parallax data-background-url="<?= get_the_post_thumbnail_url(null, 'large') ?>">
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

<main class="u-section">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <?= the_content() ?>
            </div>
        </div>
    </div>

</main>


<?= get_footer(); ?>
