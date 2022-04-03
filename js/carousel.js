$ = jQuery.noConflict();

$(document).ready( () => {
	
	if (window.innerWidth >= 768){
		carrusellTestimonios(2, 2, 2)
	}else{
		carrusellTestimonios(1, 1, 1)
	}

	// Detectando cambios en el tamaño de la ventana
	window.addEventListener('resize', () => {
		if( window.innerWidth >= 768){
			carrusellTestimonios(2, 2, 2)
		}else{
			carrusellTestimonios(1, 1, 1)
		}
	})

	sliderHome()

});

function carrusellTestimonios(minSlides, maxSlides, numberSlides){
	let slideWidth;
	width = document.querySelector(".recomendaciones-section").clientWidth
	slideWidth = (width) / numberSlides;

	$(".testimonios-content").bxSlider({
		'pager': false,
		'controls': false,
        'slideWidth': slideWidth,
        'maxSlides': maxSlides,
        'minSlides': minSlides
	});
}

// Slider para la página de inicio
function sliderHome(){
	$(".slider-home").bxSlider({
		pager: false,
		controls: true
	});
}