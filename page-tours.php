<?php get_header('page'); ?>
	<section class="seccion content-nosotros nuestros-tours">
		<h3>Tours</h3>
		<h1>Explore nuestros <br>Tours</h1>

		<?php 
			$args = array(
				'post_type' => 'tour',
				'posts_per_page' => -1
			);
			$tours = new WP_Query($args);
		?>
		<div class="tours-content">
			<?php 
				while( $tours->have_posts() ): $tours->the_post();
			?>
			<article class="tour">
				<?php the_post_thumbnail('tour'); ?>
				<div class="descripcion-tour">
					<span>Cusco</span>
					<h3> <?php the_title(); ?> </h3>
					<?php 
						$excerpt = get_the_excerpt(); 
						echo $excerpt;
						echo "<br>";
						echo "<br>";
						$excerpt = substr( $excerpt, 0, 60 ); // Only display first 260 characters of excerpt
						echo $excerpt;
						echo "<br>";
						echo "<br>";
						$result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
						echo $result;
						// CHANGE THE FUNCTION TO SHOW ONLY THE 20 FIRST WORDS OF THE EXCERPT
					?>

					<!-- <a href="<?php the_permalink(); ?> " class="boton primario"> DESCUBRIR MÁS </a> -->
				</div>

			</article>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
<?php get_footer(); ?>