<?php get_header();  
?>

<div id="content">

    <div class="margin-pading0 container-fluid ">

        <div class="col-12 margin-pading0 citations">
            <span class="orange">En un simple clique,</span><span> beaucoup de mérite !</span>
        </div>


        <div class="col-3 offset-2 block">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3>
               
                <?php echo get_the_title(); ?>
                 
            </h3>
            <?php endwhile; else: ?>
                <p>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                </p>
                <?php endif; ?>
        </div>

        <div class="blocArticle block col-3 offset-2">


            <div class="col-2 inlineblock">
                <span class="white">
            Pays
        </span>
            </div>

            <div class="col-3 offset-3 inlineblock">
                <img class="favorite" src="<?php echo IMAGES_URL." / "; ?>/favorite-heart-button.png" alt="">
                <span class="white">
            1000
        </span>
            </div>
            <div class="col-3 offset-0  inlineblock">
                <img class="profile" src="<?php echo IMAGES_URL." / "; ?>/calqu.png" alt="">
                <span class="white">
            Pays
        </span>
            </div>

            <div class="col-10 offset-0 infoCata">
                <div><span class="white">lutte contre X</span></div>
                <div><span class="orange">Par : wam</span></div>
                <div class="bouttonPub col-10 offset-2">
                    <a href="<?php the_permalink(19); ?>">Voir</a>
                </div>
            </div>

        </div>
        <div class="blocArticle block col-3 offset-2">

            <div class="col-2 inlineblock">
                <span class="white">
            Pays
        </span>
            </div>

            <div class="col-3 offset-3 inlineblock">
                <img class="favorite" src="<?php echo IMAGES_URL." / "; ?>/favorite-heart-button.png" alt="">
                <span class="white">
            1000
        </span>
            </div>
            <div class="col-3 offset-0  inlineblock">
                <img class="profile" src="<?php echo IMAGES_URL." / "; ?>/calqu.png" alt="">
                <span class="white">
            Pays
        </span>
            </div>

            <div class="col-10 offset-0 infoCata">
                <div><span class="white">lutte contre X</span></div>
                <div><span class="orange">Par : wam</span></div>
                <div class="bouttonPub col-10 offset-2">
                    <a href="">Voir</a>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
