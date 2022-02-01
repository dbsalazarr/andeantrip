$ = jQuery.noConflict();

$(document).ready( () => {
	let minSlides, maxSlides, slideWidth;

	minSlides = 2;
	maxSlides = 2;
	width = document.querySelector(".testimonios-content").clientWidth
	slideWidth = (width) / 2;
	console.log(slideWidth)

	$(".testimonios-content").bxSlider({
		'pager': false,
		'controls': false,
        'slideWidth': slideWidth,
        'maxSlides': maxSlides,
        'minSlides': minSlides
	});
});