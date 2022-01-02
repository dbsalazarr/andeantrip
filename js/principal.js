"use strict"

document.addEventListener('DOMContentLoaded', () => {
	console.log("El documento esta listo para ejecutar código JS")
	menuFunctionality()
})

function menuFunctionality(){
	let bar, contentMenu

	contentMenu = document.querySelector("#menu-principal")
	bar = document.getElementById("bar-menu")

	bar.addEventListener("click", () => {
		if (contentMenu.classList.contains("active"))
			contentMenu.classList.remove("active")
		else 
			contentMenu.classList.add("active")
	})
}