$ = jQuery.noConflict()

$(document).ready( () => {
	if ( existsElement(".testimonios-content"))
		testimoniosSlider()
})


function testimoniosSlider(){
	let halfWindow, widthWindow;
	widthWindow = document.querySelector(".nuestros-testimonios").clientWidth
	halfWindow = widthWindow / 2
	console.log(widthWindow)
	$(".testimonios-content").bxSlider({
		// slideWidth: halfWindow
	})
}

// Validar la existencia de un elemento en el DOM
function existsElement( selectorElement ){
	return $( selectorElement ).length != 0 ? true : false
}