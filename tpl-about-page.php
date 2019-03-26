<?php
/**
 * Template name: About page template
 */

$favTechnologies = getFavouritesTechnologies();
$coursesList = getCoursesList();

get_header();

have_posts() && the_post();
?>

<!-- Header -->
<header id="header-about-page" class="header header--with-gradient u-bg-position-x-center" data-has-parallax data-background-url="<?= get_the_post_thumbnail_url(null, 'banner-thumbnail-large') ?>">
    <?= get_template_part('partials/navigation') ?>
    <div class="container">
        <div class="header__content">
            <div class="header__content-text">
                <h1 class="header__content-heading a-animated a-fadeInUp"><?= get_the_title() ?></h1>
            </div>
        </div>
    </div>
    <div data-background-overlay class="header__overlay"></div>
</header>
<!-- END: Header -->

<main>

    <!-- About me section -->
    <section class="u-section u-bg-primary-grey">
        <div class="container">
            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <h2 class="theme-heading__text">Kilka słów o mnie</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <figure>
                        <img data-lazy-img data-src="<?= get_static_image_url('avatar-large.jpg') ?>" alt="" style="width: 100%; height: auto">
                    </figure>
                </div>
                <div class="col-12 col-lg-6">
                    <?= the_content(); ?>
                </div>
            </div>

        </div>
    </section>
    <!-- END: About me section -->


    <!-- Technologies section -->
    <section class="u-section">

        <div class="container">

            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <h2 class="theme-heading__text">Technologie z którymi najczęściej pracuję</h2>
                </div>
            </div>

            <div class="row">
                <?php if (isset($favTechnologies)): ?>
                <?php foreach ($favTechnologies as $technology): ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="technology-feature">
                                <figure class="technology-feature__img">
                                    <img data-lazy-img data-src="<?= $technology['image'] ?>" alt="javascript developer">
                                </figure>
                                <div class="technology-feature__content">
                                    <?= $technology['text'] ?>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>

    </section>
    <!-- END: Technologies section -->


    <!-- Courses section -->
    <section class="about-me-courses-section u-section u-bg-primary-grey">
        <div class="container">

            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <h2 class="theme-heading__text">Lista szkoleń</h2>
                </div>
            </div>

            <div class="u-mb-3">
                <ul data-h-area data-h-area-trigger="#showMoreCoursesBtn" data-h-area-height="295" class="special-list-1">
                    <?php foreach ($coursesList as $course): ?>
                    <li><?= $course['course_title']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="u-text-center">
                <button id="showMoreCoursesBtn" class="theme-button theme-button--primary">Pokaż wszystkie szkolenia</button>
            </div>

        </div>
    </section>
    <!-- END: Courses section -->

    <!-- Certifications section -->
    <section class="certifications-section u-section">

        <div class="container">
            <div class="u-text-center">
                <div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered u-uppercase">
                    <h2 class="theme-heading__text">Certyfikaty</h2>
                </div>
            </div>
            <p>Listę certyfikatów oraz inne informacje można znaleźć na <a href="https://www.linkedin.com/in/przemys%C5%82aw-chudzi%C5%84ski-306864112/">LinkedIn</a></p>
        </div>

    </section>
    <!-- END: Certification section -->


</main>


<?= get_footer(); ?>
