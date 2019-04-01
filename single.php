<?php
the_post();

$prev_post = get_previous_post();
$next_post = get_next_post();

$tags = wp_get_post_tags(get_the_ID());

get_header();
?>

<!-- Header -->
<header class="header header--with-gradient header--with-overlay u-bg-position-x-center" data-has-parallax data-background-url="<?= get_the_post_thumbnail_url(null, 'banner-thumbnail-large') ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h2 class="header__content-subheading u-color-primary">Aktualnie czytasz</h2>
                <h1 class="header__content-heading"><?= get_the_title() ?></h1>
            </div>
        </div>
    </div>

    <?php if($prev_post): ?>
        <a href="<?= get_the_permalink($prev_post->ID) ?>" class="header__arrow header__arrow--left" aria-label="<?= $prev_post->post_title ?>">
            <span class="fa fa-angle-left header__arrow-icon"></span>
            <span class="header__arrow-tooltip header__arrow-tooltip--left"><?= $prev_post->post_title ?></span>
        </a>
    <?php endif; ?>

    <?php if ($next_post): ?>
        <a href="<?= get_the_permalink($next_post->ID) ?>" class="header__arrow header__arrow--right" aria-label="<?= $next_post->post_title ?>">
            <span class="fa fa-angle-right header__arrow-icon"></span>
            <span class="header__arrow-tooltip header__arrow-tooltip--right"><?= $next_post->post_title ?></span>
        </a>
    <?php endif ?>

    <div class="header__footer header__footer--left">
        <a href="<?= get_blog_url() ?>" class="header__footer-link" aria-label="Lista wpisów">
            <span class="fa fa-angle-left header__footer-icon"></span>
            Lista wpisów
        </a>
    </div>
    <div class="header__footer header__footer--right">
        <?php if (count($tags) > 0): ?>
            <?php foreach ($tags as $tag): ?>
                <a href="#" class="header__footer-link label label--primary ml-1" aria-label="<?= $tag->name ?>">#<?= $tag->name ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main class="u-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-2">
                <?= dynamic_sidebar('theme-post-sidebar-left') ?>
            </div>
            <div class="col-12 col-lg-8">
                <?= the_content(); ?>
            </div>
            <div class="col-12 col-lg-2">
                table of contents
            </div>
        </div>
    </div>
</main>

<?= get_footer(); ?>
