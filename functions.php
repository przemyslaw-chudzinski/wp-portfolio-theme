<?php

require_once 'general/custom-post-types.php';
require_once 'general/theme-utils.php';
require_once 'general/ajax-actions.php';

/**
 * Theme support
 */
add_theme_support( 'post-thumbnails' );
/**
 * Register specific image sizes
 */
add_image_size( 'post-thumbnail', 400, 300 );
/**
 * Register assets
 */
wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/main.css',false, '1.1','all');
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/js/app.js', null, false, true);
/**
 * Register primary menu
 */
function register_menus() {
    register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'footer', 'Footer Menu' );
}
add_action( 'after_setup_theme', 'register_menus' );
/**
 * Register mobile menu
 */
function register_mobile_menu() {
    register_nav_menu( 'mobile', 'Mobile Menu' );
}
add_action( 'after_setup_theme', 'register_mobile_menu' );
/**
 * @param $classes
 * @param $item
 * @param $args
 * @return array
 * @desc It adds into every li item additional classes
 */
function primary_menu_classes($classes, $item, $args) {
    if ($args->menu === 'Primary Menu') $classes[] = 'navigation__list-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'primary_menu_classes', 1, 3);
/**
 * @param $atts
 * @param $item
 * @param $args
 * @return mixed
 * @desc It adds into every anchor element additional classes
 */
function primary_menu_link_classes ($atts, $item, $args) {
    if ($args->menu === 'Primary Menu') $atts['class'] = 'navigation__list-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'primary_menu_link_classes', 10, 3);
/**
 * @param $classes
 * @param $item
 * @return array
 * @desc It adds active class into active menu item
 */
function primary_menu_link_active_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'primary_menu_link_active_class' , 10 , 2);
/**
 * @desc It returns the uri of static image
 */
if (!function_exists('get_static_image_url')) {
    function get_static_image_url($image) {
        return get_template_directory_uri() . '/dist/images/' . $image;
    }
}
