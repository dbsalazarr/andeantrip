<?php get_header(); ?>
	<main class="media-portada">
		<!-- Espacio para el video -->
		<div class="portada-video">
			
		</div>
		<div class="portada-img" style="background: url('<?php echo get_template_directory_uri(); ?>/media/portada-img.jpg') right top/cover no-repeat fixed">
			<!-- <img src="<?php echo get_template_directory_uri()?>/media/portada-img.jpg" alt=""> -->
		</div>
	</main>
	<?php 
		$menu_social = array(
			'theme_location' => 'menu_social',
			'container' => 'nav',
			'container_class' => 'menu menu-social tablet',
			'container_id' => 'menu-social-tablet',
	 		'link_before' => '<span>',
		 	'link_after' => '</span>'
		);

		wp_nav_menu($menu_social);
	?>
	<section class="seccion tours-section">
		<h2 class="titulo-section text-center">
			Destinos Recomendados
		</h2>

	</section>
<?php get_footer(); ?>
