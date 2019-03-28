<?php

if (!function_exists('configure_post_response'))
{
    function configure_post_response($data, $post, $request)
    {
        $_data = $data->data;

        /* Thumbnails */
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumbnailMedium = wp_get_attachment_image_src($thumbnail_id, 'medium');
        $thumbnailFull = wp_get_attachment_image_src($thumbnail_id, 'full');

        $_data['thumbnail']['medium'] = $thumbnailMedium[0];
        $_data['thumbnail']['full'] = $thumbnailFull[0];

        /* Categories */
        $categories = get_the_category($post->ID);
        $_data['categories'] = $categories;

        /* Post author */
        $_data['post_author']['name'] = get_the_author();
        $_data['post_author']['description'] = get_the_author_meta('description', $post->author);

        $data->data = $_data;

        return $data;
    }
    add_filter('rest_prepare_post', 'configure_post_response', 10, 3);
    add_filter('rest_prepare_page', 'configure_post_response', 10, 3);
    add_filter('rest_prepare_project', 'configure_post_response', 10, 3);
}
