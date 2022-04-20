<?php get_header('page'); ?>
	<section class="seccion content-nosotros nuestros-tours">
		<h3>Blog</h3>
		<h1>Enterate de más tips de <br>Viaje</h1>
		<div class="tours-content">
			<?php 
				while( have_posts() ): the_post();
			?>
			<article class="tour">
				<?php the_post_thumbnail('blog'); ?>
				<div class="descripcion-tour">
	
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

			<?php endwhile; ?>
		</div>
	</section>

	<?php 
		get_template_part("templates/ultimos", "viajes");
	?>
<?php get_footer(); ?>