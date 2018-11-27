<?php 

add_action( 'init', 'manage_pro' );

function manage_pro() {
   $post_type = "Progression";
$labels = array(
        'name'               => 'Progression',
        'singular_name'      => 'Progression',
        'all_items'          => 'All the industries',
        'add_new'            => 'manage a Progression',
        'add_new_item'       => 'manage a Progression',
        'edit_item'          => "Edit Progression",
        'new_item'           => 'New Progression',
        'view_item'          => "View Progression",
        'search_items'       => 'Find a Progression',
        'not_found'          => 'No result',
        'not_found_in_trash' => 'No result',
        'parent_item_colon'  => 'Parent Progression:',
        'menu_name'          => 'Progression',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'custom-fields'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-slides',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );
    
        
    $taxonomy = "prog";
    $object_type = array("page");
    
    $args = array(
          'label' => __( 'prog' ),
          'rewrite' => array( 'slug' => 'theme' ),
          'hierarchical' => true,
      );
    
    register_taxonomy( $taxonomy, $object_type, $args );

}
?>