<?php get_header('page'); ?>
	<section class="seccion content-nosotros nuestros-tours">
		<h3>Tours</h3>
		<h1>Explore nuestros <br>Tours</h1>

		<?php 
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1,
				'order' => 'ASC'
			);
			$tours = new WP_Query($args);
		?>
		<div class="tours-content">
			<?php 
				while( $tours->have_posts() ): $tours->the_post();
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

	<?php 
		get_template_part("templates/ultimos", "viajes");
	?>
<?php get_footer(); ?>