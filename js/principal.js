"use strict"

document.addEventListener('DOMContentLoaded', () => {
	console.log("El documento esta listo para ejecutar código JS")
	menuFunctionality()
	gridTours()
})

function menuFunctionality(){
	let bar, contentMenu, cabecera, imagenLogo

	contentMenu = document.querySelector("#menu-principal")
	bar = document.getElementById("bar-menu")
	cabecera = document.getElementById("cabecera")
	imagenLogo = document.querySelector(".cabecera .logo img")



	bar.addEventListener("click", () => {
		if (contentMenu.classList.contains("active")){
			contentMenu.classList.remove("active")
			cabecera.classList.remove("active")
			imagenLogo.setAttribute("src", "http://local.andeantripmachupicchu/wp-content/themes/andean/media/brand-andean-blank.png")
		}
		else {
			contentMenu.classList.add("active")
			cabecera.classList.add("active")
			imagenLogo.setAttribute("src", "http://local.andeantripmachupicchu/wp-content/themes/andean/media/brand-andean-color.png")
		}
	})
}

function gridTours(){
	
}