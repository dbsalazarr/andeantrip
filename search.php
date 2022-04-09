<?php get_header('tour'); ?>
	
	<?php
		$destino = $_GET['destino'];
	?> 
	<?php
		# * REALIZANDO LA CONSULTA CON LA OPCIÓN DEL WP_Query
		$args = array(
			'post_type' => 'tour',
			// * Search Keyword (s)
			's' => $destino,
			'posts_per_page' => -1,
			'order' => 'ASC'
		);

		$busqueda = new WP_Query($args);

	?> 

	<section class="seccion content-nosotros nuestros-tours">
		<h3>Destinos disponibles</h3>
		<h1>Explore nuestros <br>Tours</h1>
		<div class="tours-content">
			<?php 
				while( $busqueda->have_posts() ): $busqueda->the_post();
			?>
			<article class="tour">
				<?php the_post_thumbnail('blog'); ?>
				<div class="descripcion-tour">
					<span> Cusco </span>
					<h3> <?php the_title(); ?> </h3>
					<p>
						<?php 
							$excerpt = get_the_excerpt(); 
							echo cut_text_for_words($excerpt, 20);
						?>
					</p>

					<a href="<?php the_permalink(); ?> " class="boton primario"> DESCUBRIR MÁS </a>

				</div>

			</article>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
<?php get_footer(); ?>