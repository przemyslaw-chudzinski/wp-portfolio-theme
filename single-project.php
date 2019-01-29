<?= get_header(); the_post(); ?>
<?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    $githubLink = get_post_meta(get_the_ID(), 'github_link', true);
    $previewLink = get_post_meta(get_the_ID(), 'preview_link', true);
?>

<!-- Header -->
<header class="header header--big" data-has-parallax data-background-url="<?= get_the_post_thumbnail_url(null, 'large') ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h2 class="header__content-subheading u-color-primary">Aktualnie przeglądasz projekt</h2>
                <h1 class="header__content-heading"><?= get_the_title() ?></h1>
            </div>
        </div>
    </div>
    <?php if($prev_post): ?>
        <a href="<?= get_the_permalink($prev_post->ID) ?>" class="header__arrow header__arrow--left">
            <span class="fa fa-angle-left header__arrow-icon"></span>
            <span class="header__arrow-tooltip header__arrow-tooltip--left"><?= $prev_post->post_title ?></span>
        </a>
    <?php endif; ?>

    <?php if ($next_post): ?>
        <a href="<?= get_the_permalink($next_post->ID) ?>" class="header__arrow header__arrow--right">
            <span class="fa fa-angle-right header__arrow-icon"></span>
            <span class="header__arrow-tooltip header__arrow-tooltip--right"><?= $next_post->post_title ?></span>
        </a>
    <?php endif ?>
    <div class="header__footer header__footer--left">
        <a href="<?= get_projects_url() ?>" class="header__footer-link">
            <span class="fa fa-angle-left header__footer-icon"></span>
            Lista projektów
        </a>
    </div>
    <div class="header__footer header__footer--right">
        <?php if (!empty($githubLink)): ?>
        <a href="<?= get_post_meta(get_the_ID(), 'github_link', true) ?>" target="_blank" class="header__footer-link header__footer-link--outline d-none d-lg-inline-block">
            <span class="fa fa-github-alt header__footer-icon"></span>
            Zobacz na github
        </a>
        <?php endif; ?>
        <?php if (!empty($previewLink)): ?>
        <a href="<?= get_post_meta(get_the_ID(), 'preview_link', true) ?>" target="_blank" class="header__footer-link header__footer-link--outline ml-4 d-none d-lg-inline-block">
            <span class="fa fa-internet-explorer header__footer-icon"></span>
            Zobacz w przeglądarce
        </a>
        <?php endif; ?>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main class="u-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?= get_footer() ?>
