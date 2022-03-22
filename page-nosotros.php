<?php get_header('page'); ?>
	<section class="seccion contenido-nosotros contenido-tours">
		<?php the_content(); ?>
	</section>
	<section class="seccion">
		<?php get_template_part('templates/ultimos', 'viajes'); ?>
	</section>
<?php get_footer(); ?>