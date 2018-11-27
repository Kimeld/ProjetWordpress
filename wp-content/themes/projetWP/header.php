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
                <div class="element-menu col-3 offset-1 col-lg-3 offset-lg-2 logo"><img  src="<?php echo IMAGES_URL."/"; ?>/ClimateLogoHeader.png" alt=""></div>
               <div class="element-menu col-1 offset-1 offset-sm-2 offset-md-3 col-lg-1 offset-lg-4"><a href="http://localhost/">Accueil</a></div>
               <div class="element-menu col-1 offset-1 offset-lg-0 col-lg-1"><a href="http://localhost/category/">Missions</a></div>
               <div class="element-menu col-1 offset-1 offset-lg-0 col-lg-1"><a href="#">Contact</a></div> 

            <div class="col-12 banniere">
                <h2>Faites des dons, sans dépenser.</h2>
                <p>Soutenir des projets solidaires et des causes environnementales en regardant des pubs</p>
                <div class="col-4 offset-4 col-lg-2 offset-lg-5 calltoaction"><a href="http://localhost/category/">Faire un don</a></div>
            </div>
            </div>
        </div>
             
            
        </div>
        </header>