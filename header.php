<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!-- INICIANDO CON LA MAQUETACIÓN DEL SITIO -->
<!-- Contenedor Principal -->
<div class="contenedor-principal">
	<?php 
		$ruta_imagen = get_template_directory_uri()."/media/rectangle-movil.png";
	 ?>
	<style>
	 	@media only screen and (min-width: 768px){
	 		.cabecera{
	 			background: url(<?php echo $ruta_imagen; ?>) center/20% repeat-x;
	 		}
	 	}
	 	@media only screen and (min-width: 1024px){
	 		.cabecera{
	 			background: transparent;
	 		}
	 	}
	 </style>
	<header class="cabecera">
		<div class="bar-menu">
			<div id="bar-menu">
				<img src="<?php echo get_template_directory_uri(); ?>/media/navigation-bar.png" style="width: 70%;">
			</div>
		</div>
		<div class="logo">
			<?php 
				if( function_exists('the_custom_logo') ) :
					the_custom_logo();
				endif;
			?>
		</div>
		<!-- Agregando el menú principal -->
		<?php 
			$menu_principal = array(
				'theme_location' => 'menu_principal',
				'container' => 'nav',
				'container_class' => 'menu menu-principal',
				'container_id' => 'menu-principal'
			);
			wp_nav_menu($menu_principal);
		 ?>
		 <!-- Fin menu principal -->

		 <!-- Menu Social -->
		 <?php
		 	$menu_social = array(
		 		'theme_location' => 'menu_social',
		 		'container' => 'nav',
		 		'container_class' => 'menu menu-social icons-social',
		 		'container_id' => 'menu-social',
		 		'link_before' => '<span>',
		 		'before_after' => '</span>'
		 	);
		 	wp_nav_menu($menu_social);
		 ?>
		 <!-- Fin menu social -->
	</header>
