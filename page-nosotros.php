	<?php get_header('page'); ?>
	<!-- DESCRIPCIÓN DE LA EMPRESA -->
	<section class="seccion content-nosotros contenido-tours">
		<?php the_content(); ?>
	</section>
	<!-- FIN DESCRIPCIÓN DE LA EMPRESA -->

	<!-- NUESTROS SERVICIOS -->
	<section class="seccion content-nosotros detalles-servicios">
		<h3>SOBRE NOSOTROS</h3>
		<h1>Detalles de nuestros servicios</h1>
		<div class="nuestros-servicios">
			<?php 
				$html_mark = '';
				for ($i=1; $i <= 4; $i++) { 
					$field = get_field('detalles_servicios_'.$i);
					$html_mark .= '<article class="item-servicio">';
					$html_mark .= '<span class="icon-servicios"> icon-'. $i .'</span>';
					$html_mark .= '<h4 class="title-servicios">' .$field['titulo_servicio']. '</h4>';
					$html_mark .= '<p>'. $field['descripcion_servicio'].'</p>';
					$html_mark .= '</article>';
				}
				echo $html_mark;
			?>
		</div>
	</section>
	<!-- FIN DE NUESTROS SERVICIOS -->
	
	<!-- ULTIMOS TEMPLATES -->
	<section class="seccion">
		<?php get_template_part('templates/ultimos', 'viajes'); ?>
	</section>
	<!-- FIN ULTIMOS TEMPLATES -->
<?php get_footer(); ?>