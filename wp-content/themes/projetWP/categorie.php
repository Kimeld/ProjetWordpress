<?php
/*
Template Name: Climate
*/
?>
    <?php get_header();?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $('#sample_goal0').goalProgress({
                goalAmount: 100,
                currentAmount: parseInt("<?php echo get_the_title(100); ?>"),
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal1').goalProgress({
                goalAmount: 100,
                currentAmount: 55,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal2').goalProgress({
                goalAmount: 100,
                currentAmount: 75,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal3').goalProgress({
                goalAmount: 100,
                currentAmount: 80,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal4').goalProgress({
                goalAmount: 100,
                currentAmount: 55,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal5').goalProgress({
                goalAmount: 100,
                currentAmount: 67,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal6').goalProgress({
                goalAmount: 100,
                currentAmount: 72,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal7').goalProgress({
                goalAmount: 100,
                currentAmount: 44,
                textBefore: '',
                textAfter: '%'
            });
            $('#sample_goal8').goalProgress({
                goalAmount: 100,
                currentAmount: 65,
                textBefore: '',
                textAfter: '%'
            });
        });

    </script>
   
    <!-- Choice categories -->

    <div class="container-categorie contenuActive margin-pading0 container-fluid ">
        <div class="blocCategorie missions">
            <div class="categories col-8 offset-2 col-md-2 offset-md-2"><span><?php echo get_the_title(23); ?></span></div>
            <div class="categories col-8 offset-2 col-md-2 offset-md-0"><span><?php echo get_the_title(25); ?></span></div>
            <div class="categories col-8 offset-2 col-md-2  offset-md-0"><span><?php echo get_the_title(27); ?></span></div>
            <div class="categories col-8 offset-2 col-md-2  offset-md-0"><span><?php echo get_the_title(29); ?></span></div>
        </div>

        <!-- <div class="accroche col-8 offset-2" style="margin-top:20px; text-align:center; font-weight=800">En un simple clic, beaucoup de mérite !</div> -->

        <!-- All the projects (First section) -->
        <div class="missions col-12">

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/vendange.png"; ?>">
                <div class="col-10 inlineblock"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(24); ?> en Europe</span>
                    <div class="white">
                        <a href="<?php the_permalink(19); ?>">
                            <?php echo get_the_title(30); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal0"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/laos.png"; ?>">
                <div class="col-10 inlineblock"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(24); ?> en Asie</span>
                    <div class="white">
                        <a href="<?php the_permalink(37); ?>">
                            <?php echo get_the_title(37); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal1"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/chine.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> en Asie</span>
                    <div class="white">
                        <a href="<?php the_permalink(63); ?>">
                            <?php echo get_the_title(63); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal2"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <!-- All the projects (Second section) -->

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/indonesie.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(24); ?> en Indonésie</span>
                    <div class="white">
                        <a href="<?php the_permalink(79); ?>">
                            <?php echo get_the_title(79); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal3"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/birmanie.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(24); ?> en Europe</span>
                    <div class="white">
                        <a href="<?php the_permalink(88); ?>">
                            <?php echo get_the_title(88); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal4"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/glace.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> mondiale</span>
                    <div class="white">
                        <a href="<?php the_permalink(69); ?>">
                            <?php echo get_the_title(69); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal5"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>


            <!-- All the projects (Third section) -->

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/kayak.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> en Europe</span>
                    <div class="white">
                        <a href="<?php the_permalink(44); ?>">
                            <?php echo get_the_title(44); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal6"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-00" style="background-image: url(<?php echo IMAGES_URL."/temperature.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> mondiale</span>
                    <div class="white">
                        <a href="<?php the_permalink(83); ?>">
                            <?php echo get_the_title(83); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal7"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/graine.png"; ?>">
                <div class="col-10 inlineblock"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> en Europe</span>
                    <div class="white">
                        <a href="<?php the_permalink(39); ?>">
                            <?php echo get_the_title(39); ?>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div id="sample_goal8"></div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>




        </div>
        <!-- Popup -->

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content"> <video width="1200" controls src="<?php echo IMAGES_URL." / "; ?>/p.mp4"></video>
                    <h1>Merci</h1>
                </div>

            </div>
        </div>
    </div>


    <!-- Page ARTICLE -->
    <div class="margin-pading0 container-fluid containerLaCategorie none contenuNoActive ">
        <div class="bouttonRetour col-4 offset-2 col-md-2 offset-2">
            <span>Retour</span>
        </div>

        <div class="col-12 col-md-3 offset-md-2 block">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h5>Projets sur le thème "
                <?php echo get_the_title(23); ?>"</h5>

            <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </p>
            <?php endif; ?>
        </div>

        <!-- Catégorie -->
        <div class="missions col-12">

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/graine.png"; ?>">
                <div class="col-10 inlineblock"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> en Europe</span>
                    <div class="white">
                        <a href="<?php the_permalink(39); ?>">
                            <?php echo get_the_title(39); ?>
                        </a>
                    </div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-0" style="background-image: url(<?php echo IMAGES_URL."/glace.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> en Asie</span>
                    <div class="white">
                        <a href="<?php the_permalink(63); ?>">
                            <?php echo get_the_title(63); ?>
                        </a>
                    </div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>

            <div class="blocArticle block col-8 offset-0 col-md-3 offset-md-00" style="background-image: url(<?php echo IMAGES_URL."/temperature.png"; ?>">
                <div class="col-10 inlineblock cate"></div>

                <div class="col-12 offset-0 infoCata">
                    <span class="description col-12"><?php echo get_the_title(23); ?> mondiale</span>
                    <div class="white">
                        <a href="<?php the_permalink(83); ?>">
                            <?php echo get_the_title(83); ?>
                        </a>
                    </div>
                </div>
                <div class="bouttonPub col-12 offset-0">
                    <a href="#popup1">Donner gratuitement</a>
                </div>
            </div>


        </div>
        <div id="popup2" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content"> <video width="1200" controls src="<?php echo IMAGES_URL." / "; ?>/p.mp4"></video>
                    <h1>Merci</h1>
                </div>

            </div>
        </div>
    </div>

    <!-- SCRIPT  -->

    

    <!-- SCRIPT for categories -->

    <script>
        let categories = document.querySelectorAll(".categories")
        let lienArticle = document.querySelectorAll(".lienArticle")
        let description0 = document.querySelectorAll(".description0")

        categories[0].addEventListener('click', () => {
            console.log("volcan")

            lienArticle[0].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[0].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[0].innerHTML = "<?php echo get_the_title(23); ?> en Europe"

            lienArticle[1].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[1].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[1].innerHTML = "<?php echo get_the_title(23); ?> en Europe"

            lienArticle[2].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[2].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[2].innerHTML = "<?php echo get_the_title(23); ?> en Europe"
        })

        categories[1].addEventListener('click', () => {
            console.log("volcan")

            lienArticle[0].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[0].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[0].innerHTML = "<?php echo get_the_title(24); ?> en Europe"

            lienArticle[1].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[1].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[1].innerHTML = "<?php echo get_the_title(24); ?> en Europe"

            lienArticle[2].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[2].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[2].innerHTML = "<?php echo get_the_title(24); ?> en Europe"
        })

        categories[2].addEventListener('click', () => {
            console.log("volcan")

            lienArticle[0].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[0].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[0].innerHTML = "<?php echo get_the_title(26); ?> en Europe"

            lienArticle[1].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[1].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[1].innerHTML = "<?php echo get_the_title(26); ?> en Europe"

            lienArticle[2].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[2].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[2].innerHTML = "<?php echo get_the_title(26); ?> en Europe"
        })

        categories[3].addEventListener('click', () => {
            console.log("volcan")

            lienArticle[0].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[0].setAttribute('href', "<?php the_permalink(83); ?>")
            description[0].innerHTML = "<?php echo get_the_title(28); ?> en Europe"

            lienArticle[1].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[1].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[1].innerHTML = "<?php echo get_the_title(28); ?> en Europe"

            lienArticle[2].innerHTML = "<?php echo get_the_title(83); ?>"
            lienArticle[2].setAttribute('href', "<?php the_permalink(83); ?>")
            description0[2].innerHTML = "<?php echo get_the_title(28); ?> en Europe"
        })

    </script>

    <?php get_footer(); ?>
