<?php
/**
 * Template name: About page template
 */

$favTechnologies = getFavouritesTechnologies();
$coursesList = getCoursesList();

/* About section */
$aboutHeader = themeRedux('th-about-tp-about-s-header');
$aboutSubheader = themeRedux('th-about-tp-about-s-subheader');
$aboutImage = themeRedux('th-about-tp-about-s-image');

/* Technologies list */
$technologiesHeader = themeRedux('th-about-tp-technologies-s-header');
$technologiesSubheader = themeRedux('th-about-tp-technologies-s-subheader');

/* Courses list section */
$coursesListHeader = themeRedux('th-about-tp-coursesList-s-header');
$coursesListSubheader = themeRedux('th-about-tp-coursesList-s-subheader');

/* Certifications section */
$certificationsHeader = themeRedux('th-about-tp-certifications-s-header');
$certificationsSubheader = themeRedux('th-about-tp-certifications-s-subheader');
$certificationsContent = themeRedux('th-about-tp-certifications-s-content');

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
                    <?php if($aboutHeader): ?>
                    <h2 class="theme-heading__text"><?= $aboutHeader ?></h2>
                    <?php endif; ?>
                    <?php if($aboutSubheader): ?>
                    <div class="theme-heading__subtext"><?= $aboutSubheader ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <?php if(!empty($aboutImage['url'])): ?>
                <div class="col-12 col-lg-6">
                    <figure>
                        <img data-lazy-img data-src="<?= $aboutImage['url'] ?>" alt="" style="width: 100%; height: auto">
                    </figure>
                </div>
                <?php endif; ?>
                <div class="col-12 <?= !empty($aboutImage['url']) ? 'col-lg-6' : null ?>">
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
                    <?php if($technologiesHeader): ?>
                        <h2 class="theme-heading__text"><?= $technologiesHeader ?></h2>
                    <?php endif; ?>
                    <?php if($technologiesSubheader): ?>
                        <div class="theme-heading__subtext"><?= $technologiesSubheader ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <?php if (isset($favTechnologies)): ?>
                <?php foreach ($favTechnologies as $technology): ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="technology-feature">
                                <figure class="technology-feature__img">
                                    <img data-lazy-img data-src="<?= $technology['image'] ?>" alt="<?= $technology['text'] ?>">
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
                    <?php if($coursesListHeader): ?>
                        <h2 class="theme-heading__text"><?= $coursesListHeader ?></h2>
                    <?php endif; ?>
                    <?php if($coursesListSubheader): ?>
                        <div class="theme-heading__subtext"><?= $coursesListSubheader ?></div>
                    <?php endif; ?>
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
                    <?php if($certificationsHeader): ?>
                        <h2 class="theme-heading__text"><?= $certificationsHeader ?></h2>
                    <?php endif; ?>
                    <?php if($certificationsSubheader): ?>
                        <div class="theme-heading__subtext"><?= $certificationsSubheader ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <?= $certificationsContent ?>
        </div>

    </section>
    <!-- END: Certification section -->


</main>


<?= get_footer(); ?>
