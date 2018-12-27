<?php

add_theme_support( 'post-thumbnails' );

/**
 * Register assets
 */
wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/main.css',false, '1.1','all');
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/js/app.js', 1.1, true);

/**
 * Register primary menu
 */
function register_primary_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'register_primary_menu' );
/**
 * @param $classes
 * @param $item
 * @param $args
 * @return array
 * @desc It adds into every li item additional classes
 */
function primary_menu_classes($classes, $item, $args) {
    if ($args->menu === 'primary') $classes[] = 'navigation__list-item';
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
    if ($args->menu === 'primary') $atts['class'] = 'navigation__list-link';
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
