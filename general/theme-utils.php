<?php

/**
 * @param string $postType
 * @param int $limit
 * @return mixed
 */
function fetch_latest_posts($postType = 'post', $limit = 3) {
    global $wpdb;
    $limit = (int)$limit;
    return $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts WHERE post_type='{$postType}' AND post_status='publish' ORDER BY post_date DESC LIMIT {$limit}");
}

/**
 * @param $text
 * @param int $length
 * @return string
 */
function cut_text_by_chars_length($text, $length = 600) {
    if (strlen($text) <= $length) return $text;
    return substr($text, 0, $length) . '...';
}

/**
 * @return mixed
 */
function get_blog_url() {
    return get_site_url(null, 'blog');
}

/**
 * @return mixed
 */
function get_projects_url() {
    return get_site_url(null, 'projekty');
}

/**
 * @return mixed
 */
function get_about_url()
{
    return get_site_url(null, 'o-mnie');
}

/**
 * @return mixed
 */
function is_project_page() {
    return is_page('projekty');
}
