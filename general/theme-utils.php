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
 * @param string $name
 * @return mixed
 */
function get_blog_url($name = 'blog') {
    return get_site_url(null, $name);
}

/**
 * @param string $name
 * @return mixed
 */
function get_projects_url($name = 'projekty') {
    return get_site_url(null, $name);
}

/**
 * @param string $name
 * @return mixed
 */
function is_project_page($name = 'projekty') {
    return is_page($name);
}
