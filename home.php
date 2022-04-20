<?php get_header('page'); ?>
	<section class="seccion content-post">

		<h2 class="title-post"> <?php the_title(); ?> </h2>
		
		<div class="blog-seccion-content">
			<?php the_content(); ?>
		</div>
	</section>
	<?php $actual_id_post = get_the_ID(); ?>
	<section class="seccion content-nosotros content-blog">
		<h3>Blog</h3>
		<h1>Enterate de más tips de <br>Viaje</h1>
		<div class="tours-content">
			<?php 
				$args = array(
					'post_type' => 'post',
					'post__not_in' => array( $actual_id_post )
				);

				$filter_post = new WP_Query($args);
			?>
			<?php 
				while( $filter_post->have_posts() ): $filter_post->the_post();
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

					<a href="<?php the_permalink(); ?> " class="square-button"> <img src="<?php echo get_template_directory_uri(); ?>/media/icon-arrow-right.png" alt="icon arrow right"></a>

				</div>

			</article>

			<?php endwhile; ?>
		</div>
	</section>

	<?php 
		get_template_part("templates/ultimos", "viajes");
	?>
<?php get_footer(); ?>