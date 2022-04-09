<?php get_header('tour'); ?>
	
	<?php
		$destino = $_GET['destino'];
	?> 

	<?php 
		get_search_form();
	?>
	<h3>Destinos disponibles</h3>

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
	
	<section class="tour-grid">
			<?php while( $busqueda->have_posts() ) : $busqueda->the_post(); ?>

			<article>
				<h2> <?php the_title(); ?> </h2>
			</article>
			
			<?php endwhile; wp_reset_postdata(); ?>
	</section> <!-- END TOUR GRID -->

<?php get_footer(); ?>