<?php 
	function setup_andean(){
		// permite la utilización de una imagen para cada entrada 
		add_theme_support('post-thumbnail');
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'setup_andean');

	function assets_andean(){
		// REGISTRAR ESTILO
		wp_register_style('andeanstyle', get_stylesheet_directory(), array(), 'v7.5', 'all');
		wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array('andeanstyle'), 'v8.0.1', 'all');
		wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap', array(), 'v10.1', 'all');


		// AGREGAR LOS ESTILOS A LA WEB
		wp_enqueue_style('normalize');
		wp_enqueue_style('montserrat')
		wp_enqueue_style('andeanstyle');

	}
	add_action('init', 'assets_andean');

?>