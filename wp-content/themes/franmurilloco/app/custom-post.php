<?php

// Register Project post type.
function register_work()
{

    $labels = array(
        'name' => __('Work', 'sage'),
        'singular_name' => __('Work', 'sage'),
        'add_new' => __('Add New Work', 'sage'),
        'add_new_item' => __('Add New Work', 'sage'),
        'edit_item' => __('Edit Work', 'sage'),
        'new_item' => __('New Work', 'sage'),
        'view_item' => __('View Work', 'sage'),
        'search_items' => __('Search Work', 'sage'),
        'not_found' => __('No Work found', 'sage'),
        'not_found_in_trash' => __('No Work found in Trash', 'sage'),
        'parent_item_colon' => __('Parent Work:', 'sage'),
        'menu_name' => __('Work', 'sage'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'description',
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-images-alt2',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'thumbnail', 'editor')
    );

    register_post_type('work', $args);
}

add_action('init', 'register_work'); ?>
