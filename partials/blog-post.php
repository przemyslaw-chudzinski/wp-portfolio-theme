<!-- Blog post -->
<div class="blog-post">
    <a href="<?= get_the_permalink($post->ID) ?>" aria-label="<?= $post->post_title ?>">
        <?php if (has_post_thumbnail()): ?>
            <figure class="blog-post__thumbnail">
                <img data-lazy-img data-src="<?= get_the_post_thumbnail_url($post, 'post-thumbnail') ?>" alt="<?= the_post_thumbnail_caption($post) ?>">
            </figure>
        <?php endif; ?>
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
