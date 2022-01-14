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
		<h2 class="titulo-seccion text-center">
			Destinos Recomendados
		</h2>

		
		<?php 
			$args = array(
				'post_type' => 'tour',
				'post_per_page' => -1
			);

			$tours = new WP_Query($args);
		?>

		<div class="categorias-tour">
			<a href="#" class="activo" data-idCategoria="9">Fines de Semana</a>
			<a href="#" class="" data-idCategoria="11">Vacaciones</a>
			<a href="#" class="" data-idCategoria="10">Tours en Grupos</a>
			<a href="#" class="" data-idCategoria="12">Viajes Largos</a>
		</div>

		<div class="grid" id="grid">
			<?php while( $tours->have_posts() ) : $tours->the_post(); ?>

				<?php
					$terms = get_the_terms( $post->ID, 'trip' ); 
					// echo "<pre>";
					// var_dump( $terms);
					// echo "</pre>";
                 ?>



			<article class="item"
				data-categorias = "<?php  foreach ($terms as $term) { echo $term->term_id . ' '; }?> "
				data-etiquetas = "<?php echo strip_tags(get_the_tag_list('', ' ', '')); ?>"
			>
				<div class="tour-content">
					<!-- Imagen -->
					<?php the_post_thumbnail('tour'); ?>
					<div class="tour-detalles"> 
						<div class="tour-cabecera">
							<h3 class="tour-titulo">  <?php the_title(); ?> </h3>
							<p> <span class="tour-duracion"> <?php the_field("duracion_tour") ?> </span> </p>
						</div>
						<div class="tour-extras icons-social">
							<ul class="categorias">
								
								<li> <a target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
								</a> </li>
								
								<li> <a target="_blank" class="twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=Una maravilloso recorrido de la mano de @andeantrip:">
								</a></li>
								
								<li> <a target="_blank" class="" href="https://web.whatsapp.com/send?phone=51941002491&text=Hola Andean me interesa el siguiente recorrido: <?php the_title();?>">
								</a> </li>
							</ul>
							<a href="<?php the_permalink(); ?>" class="ver-tour boton primario text-center"> EXPLORAR </a>
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
		<?php 

			$args = array(
				'post_type' => 'post',
				'post_per_page' => 3
			);

			$blog = new WP_Query($args);

		?>

		<?php  while($blog->have_posts()) :$blog->the_post();   ?>
		<a href="<?php the_permalink(); ?>">	
			<article class="blog-image">
				<?php the_post_thumbnail('blog'); ?>
				<h3 class="blog-titulo text-blanco"><?php the_title(); ?>
				</h3>
			</article>
		</a>
		<?php endwhile; wp_reset_postdata(); ?>
		<div class="text-center" style="margin-top: 5rem;">
			<a href="" class="boton secundario">  LEER MÁS </a>
		</div>
	</section>
	<!--  SECCIÓN RECOMENDACIONES -->
	<section class="recomendaciones-section seccion">
		<h2 class="titulo-seccion text-center">
			RECOMENDACIONES
		</h2>
	</section>
<?php get_footer(); ?>
