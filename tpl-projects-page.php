<?php
/**
 * Template name: Projects page template
 */
get_header();

$projects = fetch_latest_posts('project', 20);

?>

<!-- Header -->
<header class="d-block d-lg-none header" data-background-url="<?= get_the_post_thumbnail_url() ?>">
    <?= get_template_part('partials/navigation') ?>
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
    <!-- Projects list section -->
    <section class="projects-list-secondary">
        <div data-preview-container class="d-none d-lg-block projects-list-secondary__preview">
            <?= get_template_part('partials/navigation') ?>
            <div data-preview-loader class="projects-list-secondary__preview-loader">
                <div class="preloader-1 preloader-1--primary-white preloader-1--size-big"></div>
            </div>
            <div data-preview-label class="projects-list-secondary__preview-label">
                Chatter
            </div>
            <div data-preview-desc class="projects-list-secondary__preview-desc"></div>
        </div>
        <div class="projects-list-secondary__list">
            <?php if (count($projects) > 0): ?>
                <?php foreach ($projects as  $project): ?>
                    <!-- Project secondary -->
                    <a href="<?= get_the_permalink($project->ID) ?>" class="d-block" aria-label="<?= $project->post_title ?>" style="width: 50%">
                        <div class="project-secondary"
                             data-label="<?= $project->post_title ?>"
                             data-background-url="<?= get_the_post_thumbnail_url($project->ID, 'large') ?>"
                             data-preview-url="<?= get_the_post_thumbnail_url($project->ID, 'full') ?>"
                             data-preview-desc="<?= get_post_meta($project->ID, 'desc_alternative', true) ?>"
                             data-item-key="<?= $project->ID ?>">
                            <div data-background-overlay class="header__overlay header__overlay--primary"></div>
                            <div class="project-secondary__mobile-heading d-block d-lg-none">
                                <div class="project-secondary__mobile-title"><?= $project->post_title ?></div>
                                <div class="project-secondary__mobile-desc"><?= cut_text_by_chars_length(get_post_meta($project->ID, 'desc_alternative', true), 200) ?></div>
                            </div>
                        </div>
                    </a>
                    <!-- END: Project secondary -->
                <?php endforeach; ?>
            <?php else: ?>
                <p class="info info--primary">Nie ma żadnych projektów do wyświetlenia</p>
            <?php endif; ?>
        </div>
    </section>
    <!-- END: Projects list section -->
</main>
<?= get_footer() ?>
