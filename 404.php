<?= get_header(); ?>

<!-- Header -->
<header class="header" data-has-parallax data-background-url="<?= get_static_image_url('404-bg.jpg'); ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h2 class="header__content-subheading u-color-primary">404</h2>
                <h1 class="header__content-heading">Przepraszamy ale szukana strona nie istnieje</h1>
            </div>
        </div>
    </div>
    <div class="header__footer header__footer--left">
        <a href="<?= get_home_url() ?>" class="header__footer-link">
            <span class="fa fa-angle-left header__footer-icon"></span>
            Powrót do strony głównej
        </a>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main>

</main>

<?= get_footer() ?>
