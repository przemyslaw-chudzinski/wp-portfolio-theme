<?php
/**
 * Template name: Home page template
 */
?>

<?= get_header(); ?>
<!-- Header -->
<header class="header header--big" data-background-url="<?= get_static_image_url('header-bg.jpg'); ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <figure class="header__content-image">
                    <img src="<?= get_static_image_url('avatar.jpg') ?>" alt="">
                </figure>
                <h1 class="header__content-heading">Przemysław Chudziński</h1>
                <p class="header__content-desc">
                    <span class="u-color-primary u-uppercase">Webdeveloper oraz Pasjonat nowych technologii</span>
                </p>
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
                    <h2 class="theme-heading__text">Ostatnio dodane projekty</h2>
                </div>
                <div class="row">
                    <?php $projects = fetch_latest_posts('project'); ?>
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
<!--                <h2>Ostatnie Wpisy Na Blogu</h2>-->
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <h2 class="theme-heading__text">Najnowsze wpisy</h2>
                </div>
            </div>
            <div class="blog-section__categories u-text-center">
                <?php if(count(get_categories()) > 0): ?>
                    <?php foreach (get_categories() as $category): ?>
                        <a href="<?= get_category_link($category->term_id) ?>" class="label label--outline label--primary"><?= $category->name ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php $posts = fetch_latest_posts(); ?>
            <?php if(count($posts) > 0): ?>
                <div class="row">
                    <?php foreach ($posts as $post): ?>
                        <div class="col-12 col-lg-4">
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


