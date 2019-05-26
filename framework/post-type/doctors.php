<?php

// Register Careers custom Post Type
function doctors_post_type() {

    $labels = array(
        'name' => _x('doctors', 'Post Type General Name', 'alfairoze-post-type'),
        'singular_name' => _x('doctors', 'Post Type Singular Name', 'alfairoze-post-type'),
        'menu_name' => __('الاطباء', 'alfairoze-post-type'),
        'all_items' => __('كل الاطباء', 'alfairoze-post-type'),
        'view_item' => __('عرض الطبيب', 'alfairoze-post-type'),
        'add_new_item' => __('اضافه طبيب جديد', 'alfairoze-post-type'),
        'add_new' => __('اضف طبيب', 'alfairoze-post-type'),
        'edit_item' => __('edit', 'alfairoze-post-type'),
        'update_item' => __('update', 'alfairoze-post-type'),
        'search_items' => __('search', 'alfairoze-post-type'),
        'not_found' => __('Not found', 'alfairoze-post-type'),
        'not_found_in_trash' => __('Not found in Trash', 'alfairoze-post-type'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail',),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-businessperson',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('doctors', $args);
}

// Hook into the 'init' action
add_action('init', 'doctors_post_type', 0);
