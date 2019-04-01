<?php

function theme_register_post_sidebar_left()
{
    $args = [
        'name'          => 'Left post page sidebar',
        'id'            => 'theme-post-sidebar-left',
        'description'   => 'Left sidebar at single post page',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ];
    register_sidebar($args);
}
add_action('widgets_init', 'theme_register_post_sidebar_left');
