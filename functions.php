<?php 
	function setup_andean(){
		// permite la utilización de una imagen para cada entrada 
		add_theme_support('post-thumbnail');
		// Agregar los titulos personalizados en la etiqueta title
		add_theme_support('title-tag');

		// activar los logos personalizados
		$imagen = array(
			'height' => 64,
			'width' => 106
		);
		add_theme_support('custom-logo', $imagen);
	}
	add_action('after_setup_theme', 'setup_andean');

	function assets_andean(){
		// REGISTRAR ESTILO
		wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), 'v8.0.1', 'all');
		wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap', array(), 'v10.1', 'all');
		wp_register_style('andeanstyle', get_stylesheet_uri(), array('normalize', 'montserrat'), 'v7.5', 'all');


		// AGREGAR LOS ESTILOS A LA WEB
		wp_enqueue_style('normalize');
		wp_enqueue_style('montserrat');
		wp_enqueue_style('andeanstyle');

		// REGISTRANDO LOS SCRIPTS JS
		wp_register_script('andeanjs', get_template_directory_uri().'/js/principal.js', array(), 'v7.5', true);


		// AGREGANDO LOS EL JS A LA WEB
		wp_enqueue_script("andeanjs");

	}
	add_action('wp_enqueue_scripts', 'assets_andean');

	function andean_menus(){
		register_nav_menus( array(
			'menu_principal' => __('Menú Principal', 'andeantrip'),
			'menu_social' => __('Redes Sociales', 'andeantrip')
		));
	}
	add_action('init', 'andean_menus');


	function andean_widget(){
		register_sidebar(array(
			'name' => 'Pie de página',
			'id' => 'footer',
			'description' => 'Widget para el pie de página de la web',
			'before_widget' => '<div id="%1$s" class="widget widget-footer">',
			'after_widget' => '</div>'
		));

		register_sidebar(array(
			'name' => 'Primer Sidebar',
			'id' => 'sidebar_1',
			'description' => 'Sidebar para los tours de la web',
			'before_widget' => '<div id="%1$s" class="widget widget-footer">',
			'after_widget' => '</div>'
		));

		register_sidebar(array(
			'name' => 'Segundo Sidebar',
			'id' => 'sidebar_2',
			'description' => 'Sidebar para los tours de la web',
			'before_widget' => '<div id="%1$s" class="widget widget-footer">',
			'after_widget' => '</div>'
		));
	}
	add_action('widgets_init', 'andean_widget')

?>