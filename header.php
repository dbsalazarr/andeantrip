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
	<header class="cabecera" id="cabecera">
		<div class="bar-menu">
			<div id="bar-menu">
				<img src="<?php echo get_template_directory_uri(); ?>/media/navigation-bar.png" style="width: 70%;">
			</div>
		</div>
		<div class="logo logo-movil">
			<a href=" <?php esc_url( bloginfo("url") ); ?> ">
				<img src="<?php echo get_template_directory_uri();?>/media/brand-andean-blank.png" alt="">
			</a>
		</div>
		<div class="logo logo-escritorio">
			<a href=" <?php esc_url( bloginfo("url") ); ?> ">
				<img src="<?php echo get_template_directory_uri();?>/media/brand-andean-color.png" alt="">
			</a>
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
