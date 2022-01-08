<?php get_header(); ?>
	<main class="media-portada">
		<!-- Espacio para el video -->
		<div class="portada-video">
			
		</div>
		<div class="portada-img" style="background: url('<?php echo get_template_directory_uri(); ?>/media/portada-img.jpg') right top/cover no-repeat fixed">
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
	<!-- SECCIÓN TOURS -->
	<section class="seccion tours-section">
		<h2 class="titulo-section text-center">
			Destinos Recomendados
		</h2>

		<div class="categorias">
			<a href="#" class="">Fines de Semana</a>
			<a href="#" class="">Vacaciones</a>
			<a href="#" class="">Tours en Grupos</a>
			<a href="#" class="">Viajes Largos</a>
		</div>
		<?php 
			$args = array(
				'post_type' => 'tour',
				'post_per_page' => -1
			);

			$tours = new WP_Query($args);
		?>

		<div class="grid" id="grid">
			<?php while( $tours->have_posts() ) : $tours->the_post(); ?>
			<article class="item"
				data-categorias = "<?php echo strip_tags(get_the_term_list( $post->ID, 'trip', '', ' ', ''));?> "
				data-etiquetas = "<?php echo strip_tags(get_the_tag_list('', ' ', '')); ?>"
			>
				<div class="tour-content">
					<!-- Imagen -->
					<?php the_post_thumbnail(); ?>
					<div class="tour-detalles"> 
						<div class="tour-cabecera">
							<h3 class="tour-titulo">  <?php the_title(); ?> </h3>
							<p> <span class="tour-duracion"> <?php the_field("duracion_tour") ?> </span> </p>
						</div>
						<div class="tour-extras">
							<ul class="categorias">
								<li>cat-1</li>
								<li>cat-2</li>
								<li>cat-3</li>
							</ul>
							<a href="<?php the_permalink(); ?>" class="ver-tour boton primario"> EXPLORAR </a>
						</div>
					</div>
				</div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
		</div> 
		<div class="text-center">
			<a href="" class="boton secundario">  EXPLORAR MÁS TOURS </a>
		</div>
	</section>

	<!-- SECCIÓN BLOGS -->
	<section class="seccion blog-section">
		<h2 class="titulo-seccion text-center">
			BLOG
		</h2>
	</section>
<?php get_footer(); ?>
