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
	<section class="nuestros-testimonios">
		<div class="content-nosotros">
			<h3>Testimonios</h3>
			<h1>Testimonio de nuestros pasajeros</h1>
			<?php 
				$args = array(
					'post_type' => 'testimonios',
					'posts_per_page' =>  4
				);

				$testimonios = new WP_Query($args);
			?>
			<div class="testimonios-content">
				<?php while( $testimonios->have_posts() ) : $testimonios->the_post(); ?>
					<article class="testimonios-item">
						
						<div class="testimonio-details">
							<div class="testimonio-user">
								<img src="<?php the_field('testimonio_image'); ?>" alt="image-passenger">
								<div class="user-data">
									<span><?php the_field('testimonio_name'); the_field('testimonio_last_name');?></span>
									<span> <?php the_title(); ?> </span>
								</div>	
							</div>

							<div><?php the_content(); ?></div>

						</div>
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="image-testimonios-nosotros">
			<?php 
				$img_nosotros_testimonios = get_field("testimonios_image");
				$url_image_nosotros = $img_nosotros_testimonios['url'];
			?>
			<img src="<?php echo $url_image_nosotros; ?>" alt="Testimonios de nuestros pasajeros">
		</div>
	</section>

	<!-- FIN TESTIMONIOS DE NUESTROS CLIENTES -->
	

	<!-- ULTIMOS TEMPLATES -->
	<section class="seccion">
		<?php get_template_part('templates/ultimos', 'viajes'); ?>
	</section>
	<!-- FIN ULTIMOS TEMPLATES -->
<?php get_footer(); ?>