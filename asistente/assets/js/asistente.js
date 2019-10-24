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

	const elementosCarousel = document.querySelectorAll('.carousel');
	M.Carousel.init(elementosCarousel,{
		duration: 150
	})
})