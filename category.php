<?php

$currentCategory = get_category( get_query_var( 'cat' ) );

get_header();
?>

<!-- Header -->
<header class="header header--with-overlay header--with-gradient u-bg-position-x-center" data-has-parallax data-background-url="<?= get_static_image_url('category-header-bg.jpg') ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h2 class="header__content-subheading u-color-primary a-animated a-fadeInUp">Wpisy w kategorii</h2>
                <h1 class="header__content-heading a-animated a-fadeInUp"><?= $currentCategory->name ?></h1>
                <?php if (strlen($currentCategory->category_description) > 0): ?>
                    <p class="header__content-desc a-animated a-fadeInLeft"><?= $currentCategory->category_description ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="header__footer header__footer--left">
        <a href="<?= get_blog_url() ?>" class="header__footer-link">
            <span class="fa fa-angle-left header__footer-icon"></span>
            Lista wpisów
        </a>
    </div>
    <div class="header__footer header__footer--right  a-animated a-fadeInRight a-delay-1">
        <?php if(count(get_categories()) > 0): ?>
            <?php foreach (get_categories() as $category): ?>
                <a href="<?= get_category_link($category->term_id) ?>" class="header__footer-link u-ml-1 <?= $currentCategory->term_id === $category->term_id ? ' active '  : null ?>"><?= $category->name ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main class="u-section">
    <div class="container">
       <div class="row">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <div class="col-12 col-lg-4">
                   <?= get_template_part('partials/blog-post') ?>
               </div>
           <?php endwhile; else : ?>
               <p>Niesty w tym momencie nie ma żadanych wpisów :(</p>
           <?php endif; ?>
       </div>
    </div>
</main>

<?= get_footer(); ?>
