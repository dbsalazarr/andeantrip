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
	const grid = new Muuri('.grid', {
		layout:{
			"rounding" : false
		}
	})

	let enlacesCategorias = document.querySelectorAll(".categorias-tour a")
	enlacesCategorias.forEach( (enlace) => {
		enlace.addEventListener("click", (e) => {
			e.preventDefault()

			// Eliminar la clase activo del elemento
			let enlaceActivo = document.querySelector(".categorias-tour a.activo")
			enlaceActivo.classList.remove("activo")

			e.target.classList.add("activo")

			const categoria = e.target.dataset.idcategoria;

			// filtrar por categoria

			// grid.filter(`[data-categorias="${categoria}"]`)
			grid.filter( (item) => item.getElement().dataset.categorias.includes(categoria) )
			

		})
	})

}