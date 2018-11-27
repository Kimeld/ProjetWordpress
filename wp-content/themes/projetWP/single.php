<?php get_header();  
?>

<!-- Fiche descriptive des missions -->

<div id="content">

    <div class="margin-pading0 container-fluid ">

         <div class="col-12 col-md-7 offset-md-2 article">

            <div class="col-12 articleText inlineblock">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h3>
                    <?php echo get_the_title(); ?> <!-- Title -->
                </h3>

                <div class="details">
                <p>
                    <?php echo get_the_content(); ?>  <!-- Description -->
                </p>
                </div>
                 <?php endwhile; else: ?>
                <p>
                    
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
                
                <?php endif; ?>
            </div>

            <div class="bouttonPub col-md-6 offset-md-3">
                <a href="#popup3">Faire un don gratuitement</a>  <!-- Call to action -->
            </div>
        </div>
    </div>
<div id="popup3" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content"> <video  width="1200" controls src="<?php echo IMAGES_URL."/"; ?>/p.mp4"></video>
                <h1>Merci</h1>
                </div>
               
            </div>
        </div>
</div>
<!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
