<section class="destinos-destacados">
	<div class="seccion content-nosotros">
		<h3>Fotos</h3>
		<h1> Destinos destacados a visitar en <br />Cusco </h1>
	</div>
	<?php
		$args = array(
			'post_type' => 'tour',
			'posts_per_page' => 4,
			'orderby' => 'rand'
		);

		$destinos = new WP_Query( $args );
	?>
	<div class="destinos-content">
		<?php while( $destinos->have_posts() ) : $destinos-> the_post(); ?>
			<div class="destino-destacado">
				<?php the_post_thumbnail('blog'); ?>
				<h3 class="titulo-destino">
					<a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a>
				</h3>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>