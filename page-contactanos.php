<?php get_header('page'); ?>
	<section class="seccion nuestra-ubicacion">
		<?php the_content(); ?>
	</section>
	<section class="seccion content-nosotros contact-form">
		<h3>Contactos</h3>
		<h1>Contactanos para <br /> Brindarte mas información</h1>
		<?php 
			echo do_shortcode(' [contact-form-7 id="109" title="Contact form 1"] ');
		?>
	</section>
	<section class="seccion">
			New content to add
	</section>
<?php get_footer(); ?>