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
			<a class="destino-destacado" href=" <?php the_permalink(); ?> ">
				<?php the_post_thumbnail('blog'); ?>
				<h3 class="titulo-destino">
					 <?php the_title(); ?>
				</h3>
			</a>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</section>