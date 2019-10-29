$(document).ready(function(){
 
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.30);
		
		$('.portada').css({
			'background-position': '0 -' + posicion + 'px'
		});
 
	});
 
});


$(document).ready(function(){
 
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.10);
		
		$('.planes').css({
			'background-position': '0 -' + posicion + 'px'
		});
 
	});
 
});

document.addEventListener('DOMContentLoaded', () =>{

	const elementosCarousel = document.querySelectorAll('#slidefm');
	M.Carousel.init(elementosCarousel,{
		duration: 180,
		dist: -80,
		shift: 5,
		padding: 5,
		numVisible: 3,
		indicators: true, 
		noWrap: false,
		onCycleTo: 4
	})
});

document.addEventListener('DOMContentLoaded', () =>{

	const elementosCarousel = document.querySelectorAll('#slidema');
	M.Carousel.init(elementosCarousel,{
		duration: 180,
		dist: -80,
		shift: 5,
		padding: 5,
		numVisible: 3,
		indicators: true, 
		noWrap: false,
		onCycleTo: 4
	})
});

document.addEventListener('DOMContentLoaded', () =>{

	const elementosCarousel = document.querySelectorAll('#slidemarcas');
	M.Carousel.init(elementosCarousel,{
		duration: 180,
		dist: -80,
		shift: 5,
		padding: 5,
		numVisible: 3,
		indicators: true, 
		noWrap: false,
		onCycleTo: 4
	})
});


  /*	$(document).ready(function(){
$('.carousel').carousel({fullWidth:true}).css("height", $(window).height());
  		// for next slide
  		$('.next').click(function(){
  			$('.carousel').carousel('next');
  		});
        
        // for prev slide
        $('.prev').click(function(){
  			$('.carousel').carousel('prev');
  		});
  	});*/

 document.addEventListener('DOMContentLoaded', function () {
      var elems = document.querySelectorAll('#slidelentes');
      var instances = M.Carousel.init(elems, {
        duration: 500,
        indicators: true
      });
    });
 	