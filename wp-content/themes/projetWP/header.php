<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
        <!-- Tout le contenu de l entête de mon site -->
        
        <div class="margin-pading0 container-fluid ">
            
            <div class="col-12 blue margin-pading0">
                
               <div class="element-menu col-1 offset-8"><a href="#">Acceuil</a></div>
               <div class="element-menu col-1"><a href="#">Missions</a></div>
               <div class="element-menu col-1"><a href="#">Succès</a></div> 
            </div>
             
            
        </div>
        </header>