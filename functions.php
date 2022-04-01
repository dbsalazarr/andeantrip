<?php 
	function setup_andean(){
		// permite la utilización de una imagen para cada entrada 
		add_theme_support('post-thumbnails');
		// Agregar los titulos personalizados en la etiqueta title
		add_theme_support('title-tag');

		// activar los logos personalizados
		$imagen = array(
			'height' => 64,
			'width' => 106
		);
		add_theme_support('custom-logo', $imagen);

		// Registrando los nuevos tamaños de imagen (nombre, width, height, cut)
		add_image_size('tour', 560, 400, true);
		add_image_size('blog', 1024, 600, true);
	}
	add_action('after_setup_theme', 'setup_andean');

	function assets_andean(){
		// REGISTRAR ESTILO
		wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), 'v8.0.1', 'all');
		wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap', array(), 'v10.1', 'all');
		wp_register_style('opensans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap', array(), 'v.11.1', 'all');
		wp_register_style('bxSliderCSS', get_template_directory_uri().'/css/bxslider.min.css', array(), 'v.4.2.15', 'all');
		wp_register_style('andeanstyle', get_stylesheet_uri(), array('normalize', 'montserrat', 'opensans', 'bxSliderCSS'), 'v7.5', 'all');


		// AGREGANDO ESTILOS CONDICIONALES AL HOME
		if( is_front_page() ){
			wp_enqueue_style('bxSliderCSS');
		}

		// AGREGAR LOS ESTILOS A LA WEB
		wp_enqueue_style('normalize');
		wp_enqueue_style('montserrat');
		wp_enqueue_style('opensans');
		wp_enqueue_style('andeanstyle');

		// REGISTRANDO LOS SCRIPTS JS
		wp_register_script('andeanjs', get_template_directory_uri().'/js/principal.js', array(), 'v7.5', true);
		wp_register_script('muuri-animations', 'https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js', array(), 'v2.3.2', true);
		wp_register_script('muuri', 'https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js', array(), 'v9.5', true);
		wp_register_script('bxSliderJS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array(), 'v.4.2.15', true);
		wp_register_script('carousel', get_template_directory_uri().'/js/carousel.js', array('bxSliderJS'), 'v.1.1', true);
		wp_register_script('testimonios-nosotros', get_template_directory_uri().'/js/testimonios_nosotros.js', array('bxSliderJS'), 'v.1.2', true);


		// AGREGANDO EL JS GENERAL A LA WEB
		wp_enqueue_script("andeanjs");


		// SCRIPTS JS SOLO PARA EL HOME
		if( is_front_page() ){
			wp_enqueue_script("jquery");
			wp_enqueue_script("muuri-animations");
			wp_enqueue_script("muuri");
			wp_enqueue_script("bxSliderJS");
			wp_enqueue_script("carousel");
		}

		$list_pages = ['contactanos', 'nosotros'];
		foreach ($list_pages as $page) :
			if( is_page( $page ) ) :
				wp_enqueue_style('bxSliderCSS');
				wp_enqueue_script("jquery");
				wp_enqueue_script('bxSliderJS');
				wp_enqueue_script('testimonios-nosotros');
			endif;
		endforeach;

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
	add_action('widgets_init', 'andean_widget');

	// CTP FOR TOURS OF ANDEAN

	function andean_tours(){
		$labels = array(
			'name' => _x('Tours','andeantrip'),
			'singular_name' => _x('Tours','post type singular name','Tours'),
			'menu_name' => _x('Tours','admin menu','andeantrip'),
			'name_admin_bar' => _x('Tour','add new on admin bar','andeantrip'),
			'add_new' => _x('Add New Tour','book','andeantrip'),
			'add_new_item' => _x('Add New Tour','andeantrip'),
			'new_item' => _x('New Tours','andeantrip'),
			'edit_item' => _x('Edit Tour','andeantrip'),
			'view_item' => _x('View Tours','andeantrip'),
			'all_items' => _x('All Tours','andeantrip'),
			'search_items' => _x('Search Tours','andeantrip'),
			'parent_item_colon' => _x('Parent Tours','andeantrip'),
			'not_found' => _x('No Tours Found','andeantrip'),
			'not_found_in_trash' => _x('No Tours found in Trash','andeantrip')
		);

		// supports
		// 'title', 'editor', 'thumbnail', 'author', 'excerpt', 'trackbacks','custom-fields','comments','revisions','page-attributes'

		$args = array(
			'labels' => $labels,
			'description' => __('Descripcion','andeantrip'),
			'public' => true,
			'publicity_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug','tour'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 7,
			'supports' => array('title','editor','thumbnail','excerpt'),
			'show_in_rest' => true, // Habilitar Gutenberg
			'taxonomies' => array('category', 'post_tag'),
			'menu_icon' => 'dashicons-airplane'
		);

		register_post_type('tour', $args);
	}
	add_action('init','andean_tours');

	// CPT FOR COMMENTS ON ANDEAN

	function andean_testimonios(){
		$labels = array(
			'name' => _x('Testimonios','andeantrip'),
			'singular_name' => _x('Testimonios','post type singular name','testimonios'),
			'menu_name' => _x('Testimonios','admin menu','andeantrip'),
			'name_admin_bar' => _x('Testimonio','add new on admin bar','andeantrip'),
			'add_new' => _x('Add New Testimonio','book','andeantrip'),
			'add_new_item' => _x('Add New Testimonios','andeantrip'),
			'new_item' => _x('New Testimonios','andeantrip'),
			'edit_item' => _x('Edit Testimonio','andeantrip'),
			'view_item' => _x('View Testimonios','andeantrip'),
			'all_items' => _x('All Testimonios','andeantrip'),
			'search_items' => _x('Search Testimonios','andeantrip'),
			'parent_item_colon' => _x('Parent Testimonios','andeantrip'),
			'not_found' => _x('No Testimonios Found','andeantrip'),
			'not_found_in_trash' => _x('No Testimonios found in Trash','andeantrip')
		);

		$args = array(
			'labels' => $labels,
			'description' => __('Descripcion','andeantrip'),
			'public' => true,
			'publicity_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug','testimonios'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 7,
			'supports' => array('title','editor','thumbnail'),
			'show_in_rest' => true, // Habilitar Gutenberg
			'taxonomies' => array('category', 'post_tag'),
			'menu_icon' => 'dashicons-testimonial'
		);

		register_post_type('testimonios', $args);
	}
	add_action('init','andean_testimonios');

	// CREANDO UNA TAXONOMIA

	function andean_taxonomy_trips() {
     $labels = array(
         'name'              => _x( 'Trips', 'taxonomy general name' ),
         'singular_name'     => _x( 'Trip', 'taxonomy singular name' ),
         'search_items'      => __( 'Search Trip' ),
         'all_items'         => __( 'All Trip' ),
         'parent_item'       => __( 'Parent Trip' ),
         'parent_item_colon' => __( 'Parent Trip:' ),
         'edit_item'         => __( 'Edit Trip' ),
         'update_item'       => __( 'Update Trip' ),
         'add_new_item'      => __( 'Add New Trip' ),
         'new_item_name'     => __( 'New Trip' ),
         'menu_name'         => __( 'Trip' ),
     );
     $args   = array(
         'hierarchical'      => true, // make it hierarchical (like categories)
         'labels'            => $labels,
         'show_ui'           => true,
         'show_admin_column' => true,
         'query_var'         => true,
         'rewrite'           => [ 'slug' => 'trip' ],
     );
     //  [custom post type a los cuales se agregara la nueva taxonomia]
     register_taxonomy( 'trip', [ 'post', 'tour' ], $args );
	}
	add_action( 'init', 'andean_taxonomy_trips' );
?>