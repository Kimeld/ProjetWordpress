<?php 

add_action( 'init', 'add_cpt_category' );

function add_cpt_category() {
   $post_type = "category";
$labels = array(
        'name'               => 'category',
        'singular_name'      => 'category',
        'all_items'          => 'All the industries',
        'add_new'            => 'Add a category',
        'add_new_item'       => 'Add a category',
        'edit_item'          => "Edit category",
        'new_item'           => 'New category',
        'view_item'          => "View category",
        'search_items'       => 'Find a category',
        'not_found'          => 'No result',
        'not_found_in_trash' => 'No result',
        'parent_item_colon'  => 'Parent category:',
        'menu_name'          => 'category',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 1,
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
    
        
    $taxonomy = "theme";
    $object_type = array("page");
    
    $args = array(
          'label' => __( 'theme' ),
          'rewrite' => array( 'slug' => 'theme' ),
          'hierarchical' => true,
      );
    
    register_taxonomy( $taxonomy, $object_type, $args );

}
?>