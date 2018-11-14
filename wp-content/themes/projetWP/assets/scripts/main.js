console.log("ok")

let A = 2

//let categories = document.querySelectorAll(".categories")
let containerCategorie = document.querySelector(".container-categorie")
let containerLaCategorie = document.querySelector(".containerLaCategorie")
let bouttonRetour = document.querySelector(".bouttonRetour")
//let lienArticle  = document.querySelectorAll(".lienArticle")
// categories[0].classList.add('red2')


categories[0].addEventListener('click', () => {
  
    
  
    containerCategorie.classList.remove('contenuActive')
    containerCategorie.classList.add('contenuNoActive')

    containerLaCategorie.classList.remove('none')


    window.setTimeout(() => {
        containerCategorie.classList.add('none')
        containerLaCategorie.classList.add('contenuActive')
        containerLaCategorie.classList.remove('contenuNoActive')

    }, 800)
    
    //lienArticle[0].setAttribute('href', <?php the_permalink(23); ?>)



})

bouttonRetour.addEventListener('click', () => {
  
  
    containerLaCategorie.classList.remove('contenuActive')
    containerLaCategorie.classList.add('contenuNoActive')

    containerCategorie.classList.remove('none')


    window.setTimeout(() => {
        containerLaCategorie.classList.add('none')
        containerCategorie.classList.add('contenuActive')
        containerCategorie.classList.remove('contenuNoActive')

    }, 800)



})

//<div class="categories col-2 offset-1"><a href="<?php the_permalink(13); ?>"><?php echo get_the_title(13); ?></a></div>