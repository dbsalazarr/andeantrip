<?php get_header('page'); ?>
	
	<section class="seccion ubicanos">
			Mapa de nuestras oficinas
	</section>
	<section class="seccion contactanos-form">
		<?php 
			echo do_shortcode(' [contact-form-7 id="109" title="Contact form 1"] ');
		?>
	</section>

<?php get_footer(); ?>