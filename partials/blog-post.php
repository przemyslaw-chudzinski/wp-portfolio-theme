<!-- Blog post -->
<div class="blog-post">
    <a href="<?= get_the_permalink($post->ID) ?>" aria-label="<?= $post->post_title ?>">
        <figure class="blog-post__thumbnail">
            <?= get_the_post_thumbnail($post->ID, 'post-thumbnail') ?>
        </figure>
    </a>
    <div class="blog-post__info">
        <a href="<?= get_the_permalink($post->ID) ?>" class="blog-post__title"><h3><?= $post->post_title ?></h3></a>
        <div class="blog-post__meta">
            <div class="blog-post__meta-author">Autor: <a class="blog-post__link" href="#"><?= get_the_author_meta('display_name', $post->post_author) ?></a></div>
            <div class="blog-post__meta-date">Opublikowano: <span><?= get_the_date('d-m-Y', $post->ID) ?></span></div>
        </div>
    </div>
</div>
<!-- END: Blog post -->
