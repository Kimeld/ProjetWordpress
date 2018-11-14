<?php get_header();  
?>

<div id="content">

    <div class="margin-pading0 container-fluid ">

        <div class="col-8 offset-2 article">
            <div class="img col-12"></div>


            <div class="col-2 offset-0 inlineblock">
                <span class="black">
            Pays
        </span>
            </div>

            <div class="col-2 offset-0 inlineblock">
                <img class="favorite" src="<?php echo IMAGES_URL." / "; ?>/favorite-heart-button.png" alt="">
                <span class="black">
            1000
        </span>
            </div>
            <div class="col-2 offset-0  inlineblock">
                <img class="profile" src="<?php echo IMAGES_URL." / "; ?>/calqu.png" alt="">
                <span class="black">
            Pays
        </span>
            </div>


            <div class="col-12 articleText">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2>
                    <?php echo get_the_title(); ?>
                </h2>
               
                <p>
                    <?php echo get_the_content(); ?>
                </p>
                 <?php endwhile; else: ?>
                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
                <?php endif; ?>
            </div>
            <div class="bouttonPub col-3 offset-4">
                <a href="#">Aider</a>
            </div>

        </div>
    </div>






</div>
<!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
