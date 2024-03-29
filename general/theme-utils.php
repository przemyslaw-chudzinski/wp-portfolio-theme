<?php

if (!function_exists('fetch_latest_posts'))
{
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
}

if (!function_exists('cut_text_by_chars_length'))
{
    /**
     * @param $text
     * @param int $length
     * @return string
     */
    function cut_text_by_chars_length($text, $length = 600) {
        if (strlen($text) <= $length) return $text;
        return substr($text, 0, $length) . '...';
    }
}

if (!function_exists('get_blog_url'))
{
    /**
     * @return mixed
     */
    function get_blog_url() {
        return get_site_url(null, 'blog');
    }
}

if (!function_exists('get_projects_url'))
{
    /**
     * @return mixed
     */
    function get_projects_url() {
        return get_site_url(null, 'projekty');
    }
}

if (!function_exists('get_about_url'))
{
    /**
     * @return mixed
     */
    function get_about_url()
    {
        return get_site_url(null, 'o-mnie');
    }
}

if (!function_exists('is_project_page'))
{
    /**
     * @return mixed
     */
    function is_project_page() {
        return is_page('projekty');
    }
}

/**
 * @desc It returns the uri of static image
 */
if (!function_exists('get_static_image_url')) {
    function get_static_image_url($image) {
        return get_template_directory_uri() . '/dist/images/' . $image;
    }
}

if (!function_exists('themeRedux'))
{
    function themeRedux($opt_name = null)
    {
        global $redux;
        if (!isset($opt_name)) return $redux;
        $value = $redux[$opt_name];
        return isset($value) && $value !== '' ? $value : null;
    }
}

if (!function_exists('calculate_reading_time'))
{
    function calculate_reading_time($content, $words_per_min = 150)
    {
        if (!$content) return 0;
        $wordsArray = explode(' ', $content);
        return $words_per_min > 0 ? round(count($wordsArray) / (int) $words_per_min) : 0;
    }
}
