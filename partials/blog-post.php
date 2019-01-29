<!-- Blog post -->
<div class="blog-post">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?= the_permalink() ?>">
                <figure class="blog-post__thumbnail">
                    <?= the_post_thumbnail('post-thumbnail') ?>
                </figure>
            </a>
        </div>
        <div class="col-lg-6">
            <div class="blog-post__info">
                <a href="<?= the_permalink() ?>" class="blog-post__title"><h3><?= the_title() ?></h3></a>
                <div class="blog-post__meta">
                    <div class="blog-post__meta-author">Autor: <a class="blog-post__link" href="#"><?= get_the_author_meta('display_name') ?></a></div>
                    <div class="blog-post__meta-date">Opublikowano: <?= the_date() ?></div>
                </div>
                <p class="blog-post__excerpt"><?= the_excerpt() ?></p>
            </div>
        </div>
    </div>
</div>
<!-- END: Blog post -->
