<?php

function ajout_scripts() {
    
wp_register_style( 'reset', CSS_URL.'/reset.css' );

wp_enqueue_style('reset'); 

// enregistrement d'un nouveau script
wp_register_script('main_script', JS_URL.'/main.js', array('jquery'),'1.1', true);
// appel du script dans la page
wp_enqueue_script('main_script');

    

    
wp_register_script( 'bootstrap_script', JS_URL.'/bootstrap.min.js' );

wp_enqueue_script('bootstrap_script');
    
    
wp_register_script( 'jquery_script_slim', JS_URL.'/jquery-3.2.1.slim.min.js' );

wp_enqueue_script('jquery_script_slim');
    

wp_register_script( 'jquery_script_way', JS_URL.'/jquery.waypoints.min.js' );

wp_enqueue_style('jquery_script_way');
    
    
wp_register_style( 'bootstrap_style', CSS_URL.'/bootstrap.min.css' );

wp_enqueue_style('bootstrap_style'); 
    

wp_register_style( 'bootstrap_style_icon', CSS_URL.'/open-iconic-bootstrap.min.css' );

wp_enqueue_style('bootstrap_style_icon'); 
    
    
wp_register_script( 'popper', JS_URL.'/popper.min.js' );

wp_enqueue_style('popper');
    
// enregistrement d'un nouveau style
wp_register_style( 'main_style', CSS_URL.'/main.css' );
// appel du style dans la page
wp_enqueue_style('main_style');
    

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

?>