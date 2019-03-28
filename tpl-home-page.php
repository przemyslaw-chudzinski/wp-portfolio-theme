<?php
/**
 * Template name: Home page template
 */

$projects = fetch_latest_posts('project');
$categories = get_categories();
$posts = fetch_latest_posts();

$homeBannerHeader = themeRedux('th-home-tp-banner-s-header');
$homeBannerSubheader = themeRedux('th-home-tp-banner-s-subheader');

$homeProjectsHeader = themeRedux('th-home-tp-projects-s-header');
$homeProjectsSubheader = themeRedux('th-home-tp-projects-s-subheader');

$homeBlogHeader = themeRedux('th-home-tp-blog-s-header');
$homeBlogSubheader = themeRedux('th-home-tp-blog-s-subheader');

get_header();
?>

<!-- Header -->
<header class="header header--big header--with-overlay header--center-background header--with-bg-cover home-header" data-background-url="<?= get_the_post_thumbnail_url(null, 'banner-thumbnail-big'); ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <?php if ($homeBannerHeader): ?>
                <h1 class="header__content-heading a-animated a-fadeInLeft"><?= $homeBannerHeader ?></h1>
                <?php ?>
                <?php if ($homeBannerSubheader) ?>
                <div class="header__content-desc a-animated a-fadeInRight u-color-tertiary"><?= $homeBannerSubheader ?></div>
                <?php endif; ?>
                <a href="<?= get_about_url(); ?>" class="theme-button theme-button--primary theme-button--with-icon theme-button--with-radius u-uppercase home-header__btn a-animated a-fadeInUp a-delay-1">Poznajmy się lepiej</a>
            </div>
        </div>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->
<main>
    <!-- Projects section -->
    <section class="projects-section">
        <div class="container">
            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <?php if($homeProjectsHeader): ?>
                        <h2 class="theme-heading__text"><?= $homeProjectsHeader ?></h2>
                    <?php endif; ?>
                    <?php if($homeProjectsSubheader): ?>
                        <div class="theme-heading__subtext"><?= $homeProjectsSubheader ?></div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php if (count($projects) > 0): ?>
                    <?php foreach ($projects as  $project): ?>
                    <div class="col-lg-4">
                        <a href="<?= get_the_permalink($project->ID); ?>"  class="d-block">
                        <!-- Single project -->
                            <div class="project u-shadow-5" data-background-url="<?= get_the_post_thumbnail_url($project->ID, 'post-thumbnail') ?>">
                                    <div class="project__heading">
                                        <h3><?= $project->post_title ?></h3>
                                        <p class="project__heading-desc"><?= $project->post_excerpt ?></p>
                                    </div>
                                    <span class="project__link">Zobacz więcej</span>
                                <div data-background-overlay class="header__overlay header__overlay--primary"></div>
                            </div>
                        </a>
                        <!-- END: Single project -->
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <p class="info info--primary">W tym momencie nie ma żadnych projektów do wyświetlenia</p>
                    <?php endif; ?>
                </div>

                <a href="<?= get_projects_url() ?>" class="projects-section__more-btn theme-button theme-button--primary theme-button--with-icon u-uppercase u-mt-5">Zobacz wszystkie projekty</a>

            </div>
        </div>
    </section>
    <!-- END: Projects section -->
    <!-- Blog section -->
    <section class="blog-section">
        <div class="container">
            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <?php if($homeBlogHeader): ?>
                        <h2 class="theme-heading__text"><?= $homeBlogHeader ?></h2>
                    <?php endif; ?>
                    <?php if($homeBlogSubheader): ?>
                        <div class="theme-heading__subtext"><?= $homeBlogSubheader ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="blog-section__categories u-text-center">
                <?php if(count($categories) > 0): ?>
                    <?php foreach ($categories as $category): ?>
                        <a href="<?= get_category_link($category->term_id) ?>" class="label label--outline label--primary"><?= $category->name ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php if(count($posts) > 0): ?>
                <div class="row">
                    <?php foreach ($posts as $post): ?>
                        <div id="home-page-posts-list" class="col-12 col-lg-4">
                            <?= get_template_part('partials/blog-post'); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
            <p class="info info--primary">W tym momencie nie ma żadnych wpisów</p>
            <?php endif; ?>

            <div class="u-text-center">
                <a href="<?= get_blog_url() ?>" class="projects-section__more-btn theme-button theme-button--primary theme-button--with-icon u-uppercase u-mt-5">Czytaj więcej na blogu</a>
            </div>

        </div>
    </section>
    <!-- END: Blog section -->
</main>

<?= get_footer(); ?>


