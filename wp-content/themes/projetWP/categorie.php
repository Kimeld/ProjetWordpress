<?php
/*
Template Name: Nom du modèle
*/
?>
    <?php get_header();  
?>

    <div class="margin-pading0 container-fluid ">

        <div class="col-12 margin-pading0 citations">
            <span class="orange">En un simple clique,</span><span>beaucoup de mérite !</span>
        </div>
    </div>
    
    <div class="col-3 offset-2 blocCategorie">
        <h3>Thèmatique :</h3>
    </div>

    <div class="blocCategorie">
        <div class="categories col-2 offset-2"><a href="">Torndes</a></div>
        <div class="categories col-2 offset-1"><a href="<?php the_permalink(13); ?>"><?php the_title(); ?></a></div>
        <div class="categories col-2  offset-1"><a href="#">Tornades</a></div>

    </div>
    <div class="blocCategorie">
        <div class="categories col-2 offset-2"><a href="#">Tornades</a></div>
        <div class="categories col-2 offset-1"><a href="#">Tornades</a></div>
        <div class="categories col-2  offset-1"><a href="#">Tornades</a></div>

    </div>
     <div class="blocCategorie">
        <div class="categories col-2 offset-2"><a href="#">Tornades</a></div>
        <div class="categories col-2 offset-1"><a href="#">Tornades</a></div>
        <div class="categories col-2  offset-1"><a href="#">Tornades</a></div>

    </div>
    <div class="blocCategorie">
        <div class="categories col-2 offset-2"><a href="#">Tornades</a></div>
        <div class="categories col-2 offset-1"><a href="#">Tornades</a></div>
        <div class="categories col-2  offset-1"><a href="#">Tornades</a></div>

    </div>



    <?php get_footer(); //appel du template footer.php ?>
