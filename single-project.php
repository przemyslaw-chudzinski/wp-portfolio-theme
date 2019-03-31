<?php
the_post();

$prev_post = get_previous_post();
$next_post = get_next_post();
$githubLink = get_post_meta(get_the_ID(), 'github_link', true);
$previewLink = get_post_meta(get_the_ID(), 'preview_link', true);

get_header();
?>

<?= get_template_part('partials/navigation') ?>

<div id="single-project-page">
    <!-- Project Image -->
    <div class="project-image a-animated a-fadeInLeft a-delay-1" data-background-url="<?= get_the_post_thumbnail_url(null, 'banner-thumbnail-large') ?>">
        <a class="project-back-btn theme-button theme-button--tertiary theme-button--with-radius theme-button--with-icon a-animated a-fadeInUp a-delay-2" href="<?= get_projects_url() ?>">Wszystkie projekty</a>
    </div>
    <!-- END: Project Image -->

    <!-- Content -->
    <main class="project-content">
        <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-aligned-left project-content__heading ">
            <h1 class="theme-heading__text"><?= the_title() ?></h1>
        </div>

        <!-- Project meta -->
        <div class="project-meta">
            <?php if($githubLink): ?>
                <a class="theme-button theme-button--primary theme-button--with-radius theme-button--medium a-animated a-fadeInUp a-delay-2" href="<?= $githubLink ?>">Zobacz na github.com</a>
            <?php endif; ?>
            <?php if($previewLink): ?>
                <a class="theme-button theme-button--primary theme-button--with-radius theme-button--medium a-animated a-fadeInUp a-delay-3" href="<?= $previewLink ?>">Zobacz na żywo</a>
            <?php endif; ?>
        </div>
        <!-- END: Project meta -->

        <div>
            <?= the_content() ?>
        </div>

        <!-- Content footer -->
        <div class="project-footer">
            <?php if($prev_post): ?>
                <a class="project-footer__prev-next" href="<?= get_the_permalink($prev_post->ID) ?>"><span class="fa fa-angle-left"></span> <?= $prev_post->post_title ?></a>
            <?php endif; ?>
            <?php if($next_post): ?>
                <a class="project-footer__prev-next" href="<?= get_the_permalink($next_post->ID) ?>"><?= $next_post->post_title ?> <span class="fa fa-angle-right"></span></a>
            <?php endif; ?>
        </div>
        <!-- END: Content footer -->

    </main>
    <!-- END: Content -->

</div>


<?= get_footer() ?>
