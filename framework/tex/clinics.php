<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_clinics_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it topics for your posts
 
function create_clinics_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  $labels = array(
    'name' => _x( 'عيادات', 'taxonomy general name' ),
    'singular_name' => _x( 'clinics', 'taxonomy singular name' ),
    'search_items' =>  __( 'عيادات' ),
    'all_items' => __( 'كل العيادات' ),
    'edit_item' => __( 'تعديل العيادة' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'عيادات' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('clinics',array('department','doctors','clinic'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'clinics' ),
  ));
 
}
?>
