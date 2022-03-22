<?php get_header('page'); ?>
	<!-- DESCRIPCIÓN DE LA EMPRESA -->
	<section class="seccion content-nosotros contenido-tours">
		<?php the_content(); ?>
	</section>
	<!-- FIN DESCRIPCIÓN DE LA EMPRESA -->
	<section class="seccion content-nosotros detalles-servicios">
		<h3>SOBRE NOSOTROS</h3>
		<h1>Detalles de nuestros servicios</h1>
		<div class="nuestros-servicios">
			<?php 
				$html_mark = '<article class="item-servicios">';
				$field = "";
				for ($i=1; $i <= 4; $i++) { 
					$field = get_field('detalles_servicios_'.$i);
					var_dump($field);
					$html_mark .= '<span class="icon-servicios"> icon-'. $i .'</span>';
					$html_mark .= '<h3 class="title-servicios">' .$field['titulo_servicio']. '</h3>';
					$html_mark .= '<p>'. $field['descripcion_servicio'].'</p>';
				}

				$html_mark .= '</article>';
				echo $html_mark;
			?>
		</div>
	</section>
	<!-- ULTIMOS TEMPLATES -->
	<section class="seccion">
		<?php get_template_part('templates/ultimos', 'viajes'); ?>
	</section>
	<!-- FIN ULTIMOS TEMPLATES -->
<?php get_footer(); ?>