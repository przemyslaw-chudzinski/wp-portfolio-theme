<?php

function theme_register_post_sidebar_left()
{
    $args = [
        'name'          => 'Left post page sidebar',
        'id'            => 'theme-post-sidebar-left',
        'description'   => 'Left sidebar at single post page',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget single-post-wgt u-shadow-3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="theme-heading theme-heading--with-underline theme-heading--with-underline-centered project-content__heading "><h3 class="theme-heading__text">',
        'after_title'   => '</h3></div>'
    ];
    register_sidebar($args);
}
add_action('widgets_init', 'theme_register_post_sidebar_left');
