<?= get_header(); ?>
<!-- Header edited -->
<header class="header header--with-gradient" data-has-parallax data-background-url="<?= get_static_image_url('blog-header-bg.jpg'); ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h1 class="header__content-heading">Blog</h1>
            </div>
        </div>
    </div>
    <div class="header__footer header__footer--right">
        <?php if(count(get_categories()) > 0): ?>
            <?php foreach (get_categories() as $category): ?>
                <a href="<?= get_category_link($category->term_id) ?>" class="header__footer-link u-ml-1"><?= $category->name ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->
<main>
    <!-- Blog section -->
    <section class="blog-section">
        <div class="container">
            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <h2 class="theme-heading__text">Wpisy na blogu</h2>
                </div>
            </div>
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-12 col-lg-4" style="margin-bottom: 5rem;">
                        <?= get_template_part('partials/blog-post') ?>
                    </div>
                <?php endwhile; else : ?>
                    <p class="label label--primary">Niesty w tym momencie nie ma żadanych wpisów :(</p>
                <?php endif; ?>
            </div>
            <?= get_template_part('partials/pagination') ?>
        </div>
    </section>
    <!-- END: Blog section -->

</main>

<?= get_footer(); ?>


