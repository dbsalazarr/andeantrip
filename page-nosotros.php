	<?php get_header('page'); ?>
	<!-- DESCRIPCIÓN DE LA EMPRESA -->
	<section class="seccion content-nosotros contenido-tours">
		<?php the_content(); ?>
	</section>
	<!-- FIN DESCRIPCIÓN DE LA EMPRESA -->
	<?php
		$array_image = get_field('hero_image_servicios');
		$url_image = $array_image['url'];
	?>
	<!-- NUESTROS SERVICIOS -->
	<section class="content-detalles-servicios" style="background: url( <?php echo $url_image; ?>) no-repeat center center/cover">
		<div class="seccion content-nosotros detalles-servicios">
			<h3>SOBRE NOSOTROS</h3>
			<h1>Detalles de nuestros servicios</h1>
			<div class="nuestros-servicios">
				<?php 
					$html_mark = '';
					for ($i=1; $i <= 4; $i++) { 
						$field = get_field('detalles_servicios_'.$i);
						$html_mark .= '<article class="item-servicio">';
						$html_mark .= '<span class="icon-servicios"> <img src="'. get_template_directory_uri() .'/media/icon-hotel.png"/> </span>';
						$html_mark .= '<h4 class="title-servicios">' .$field['titulo_servicio']. '</h4>';
						$html_mark .= '<p>'. $field['descripcion_servicio'].'</p>';
						$html_mark .= '</article>';
					}
					echo $html_mark;
				?>
			</div>
		</div>
	</section>
	<!-- FIN DE NUESTROS SERVICIOS -->

	<!-- TESTIMONIOS DE NUESTROS CLIENTES -->


	<!-- FIN TESTIMONIOS DE NUESTROS CLIENTES -->
	

	<!-- ULTIMOS TEMPLATES -->
	<section class="seccion">
		<?php get_template_part('templates/ultimos', 'viajes'); ?>
	</section>
	<!-- FIN ULTIMOS TEMPLATES -->
<?php get_footer(); ?>