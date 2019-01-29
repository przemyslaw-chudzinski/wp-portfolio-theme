<?php

function fetch_latest_posts($postType = 'post', $limit = 3, $sort = 'asc') {
    global $wpdb;
    $limit = (int)$limit;
    return $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts WHERE post_type='{$postType}' AND post_status='publish' LIMIT {$limit}");
}

function cut_text_by_chars_length($text, $length = 600) {
    if (strlen($text) <= $length) return $text;
    return substr($text, 0, $length) . '...';
}

function get_blog_url() {
    return get_site_url(null, 'blog');
}

function get_projects_url() {
    return get_site_url(null, 'projekty');
}
