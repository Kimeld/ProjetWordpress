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

categories[1].addEventListener('click', () => {
  
    
  
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

categories[2].addEventListener('click', () => {
  
    
  
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

categories[3].addEventListener('click', () => {
  
    
  
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

//CODE BARRE de progression


!function($){
	$.fn.extend({
		goalProgress: function(options) {
			var defaults = {
				goalAmount: 0,
				currentAmount: 0 ,
				speed: 1000,
				textBefore: '',
				textAfter: '',
				milestoneNumber: 70,
				milestoneClass: 'almost-full',
				callback: function() {}
			}

			var options = $.extend(defaults, options);
			return this.each(function(){
				var obj = $(this);
				
				// Collect and sanitize user input
				var goalAmountParsed = parseInt(defaults.goalAmount);
				var currentAmountParsed = parseInt(defaults.currentAmount);

				// Calculate size of the progress bar
				var percentage = (currentAmountParsed / goalAmountParsed) * 100;

				var milestoneNumberClass = (percentage > defaults.milestoneNumber) ? ' ' + defaults.milestoneClass : ''

				// Generate the HTML
 				var progressBar = '<div class="progressBar">' + defaults.textBefore + currentAmountParsed + defaults.textAfter + '</div>';

 				var progressBarWrapped = '<div class="goalProgress' + milestoneNumberClass + '">' + progressBar + '</div>';

				// Append to the target
				obj.append(progressBarWrapped);

				// Ready
				var rendered = obj.find('div.progressBar');

				// Remove Spaces
				rendered.each(function() {
					$(this).html($(this).text().replace(/\s/g, '&nbsp;'));
				});

				// Animate!
				rendered.animate({width: percentage +'%'}, defaults.speed, defaults.callback);

				if(typeof callback == 'function') {
					callback.call(this)
				}
			});
		}
	});
}(window.jQuery);