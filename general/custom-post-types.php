<?php

function register_project_post_type() {

    $projects_args = [
        'labels' => [
            'name' => 'Projekty',
            'singular_name' => 'Projekt',
            'all_items' => 'Wszystkie projekty',
            'add_new' => 'Dodaj nowy projekt',
            'add_new_item' => 'Dodaj nowy projekt',
            'edit_item' => 'Edytuj projekt',
            'view_item' => 'Zobacz projekt',
            'search_items' => 'Szukaj w projektach',
            'not_found' => 'Nie znaleziono projektu',
            'not_found_in_trash' => 'Brak projektów w koszu',
            'parent_item_colon' => ''
        ],
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => [
            'title', 'author', 'editor', 'thumbnail', 'excerpt', 'custom-fields'
        ],
        'has_archive' => true,
        'show_in_rest' => true
    ];

    register_post_type('project', $projects_args);

}
add_action('init', 'register_project_post_type');

function register_project_taxonomy() {
    register_taxonomy('project-categories', 'project', [
        'hierarchical' => true,
        'labels' => [
            'name' => 'Kategorie',
            'singular_name' => 'Kategoria',
            'search_items' => 'Wyszukaj kategorie',
            'popular_items' => 'Popularne kategorie',
            'all_items' => 'Wszystkie kategorie',
            'new_item_name' => 'Nazwa nowej kategorii',
            'add_new_item' => 'Dodaj nową kategorię',
            'edit_item' => 'Edytuj kategorię',
            'update_item' => 'Zaktualizuj kategoię',
            'separate_item_with_commas' => '',
            'menu_name' => 'Kategorie',
            'add_or_remove_items' => 'Dodaj lub usuń kategorię'
        ],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => ['slug' => 'project-categories']
    ]);
}
add_action('init', 'register_project_taxonomy');
