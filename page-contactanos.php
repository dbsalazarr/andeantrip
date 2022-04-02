<?php get_header('page'); ?>
	<section class="seccion nuestra-ubicacion">
		<?php the_content(); ?>
	</section>
	<section class="seccion content-nosotros">
		<h3>Contacto</h3>
		<h1>Contactanos para <br /> Brindarte mas información</h1>
		<?php 
			echo do_shortcode(' [contact-form-7 id="109" title="Contact form 1"] ');
		?>
	</section>
	<?php 
		get_template_part("templates/ultimos","viajes");
	?>
<?php get_footer(); ?>