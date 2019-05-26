<?php

// Register Careers custom Post Type
function department_post_type() {

    $labels = array(
        'name' => _x('department', 'Post Type General Name', 'alfairoze-post-type'),
        'singular_name' => _x('department', 'Post Type Singular Name', 'alfairoze-post-type'),
        'menu_name' => __('اقسام', 'alfairoze-post-type'),
        'parent_item_colon' => __('Parent اقسام:', 'alfairoze-post-type'),
        'all_items' => __('كل الاقسام', 'alfairoze-post-type'),
        'view_item' => __('عرض الاقسام', 'alfairoze-post-type'),
        'add_new_item' => __('اضافه قسم جديد', 'alfairoze-post-type'),
        'add_new' => __('اضافة قسم', 'alfairoze-post-type'),
        'edit_item' => __('تعديل القسم', 'alfairoze-post-type'),
        'update_item' => __('تحديث', 'alfairoze-post-type'),
        'search_items' => __('بحث', 'alfairoze-post-type'),
        'not_found' => __('Not found', 'alfairoze-post-type'),
        'not_found_in_trash' => __('Not found in Trash', 'alfairoze-post-type'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title','editor','thumbnail',),
        'taxonomies' => array('clinics','clinicss'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-clipboard',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('department', $args);
}

// Hook into the 'init' action
add_action('init', 'department_post_type', 0);
