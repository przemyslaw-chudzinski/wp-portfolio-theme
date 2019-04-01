<?php
/**
 * Template name: Projects page template
 */

$projects = fetch_latest_posts('project', 20);

$projectsHeader = themeRedux('th-projects-tp-about-s-header');
$projectsSubheader = themeRedux('th-projects-tp-about-s-subheader');

get_header();
?>

<div class="d-block d-lg-none">
    <?= get_template_part('partials/navigation') ?>
</div>

<main>
    <!-- Projects list section -->
    <section class="projects-list-secondary">
        <div data-preview-container class="d-none d-lg-block projects-list-secondary__preview">
            <?= get_template_part('partials/navigation') ?>
            <div data-preview-loader class="projects-list-secondary__preview-loader">
                <div class="preloader-1 preloader-1--primary-white preloader-1--size-big"></div>
            </div>
            <div data-preview-label class="projects-list-secondary__preview-label"></div>
            <div data-preview-desc class="projects-list-secondary__preview-desc"></div>
        </div>
        <div class="projects-list-secondary__list">

            <div class="theme-heading theme-heading--with-underline u-uppercase u-width-100 u-mr-1 u-ml-1">
                <?php if($projectsHeader): ?>
                    <h2 class="theme-heading__text"><?= $projectsHeader ?></h2>
                <?php endif; ?>
                <?php if($projectsSubheader): ?>
                    <div class="theme-heading__subtext"><?= $projectsSubheader ?></div>
                <?php endif; ?>
            </div>

            <?php if (count($projects) > 0): ?>
                <?php foreach ($projects as  $project): ?>
                    <!-- Project secondary -->
                    <a href="<?= get_the_permalink($project->ID) ?>" class="d-block" aria-label="<?= $project->post_title ?>" style="width: 50%; padding: 1rem;">
                        <div class="project-secondary"
                             data-label="<?= $project->post_title ?>"
                             data-background-url="<?= get_the_post_thumbnail_url($project->ID, 'large') ?>"
                             data-preview-url="<?= get_the_post_thumbnail_url($project->ID, 'full') ?>"
                             data-preview-desc="<?= get_post_meta($project->ID, 'desc_alternative', true) ?>"
                             data-item-key="<?= $project->ID ?>">
                            <div data-background-overlay class="header__overlay header__overlay--primary"></div>
                        </div>
                        <div class="project-secondary__mobile-title d-block d-lg-none">
                            <?= $project->post_title ?>
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
