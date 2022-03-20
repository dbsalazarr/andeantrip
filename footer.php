	<footer>
		<div class="seccion content-menu-footer">
			<p>Copyright © <?php echo date("Y"); ?> Andean Trip. All rights reserved</p>
			<?php 
				$menu_footer = array(
					'theme_location' => 'menu_principal',
					'container' => 'nav',
					'container_class' => 'menu menu-footer',
					'container_id' => 'menu-footer'
				);
				wp_nav_menu($menu_footer);
			 ?>
		</div>
	</footer>
	<?php wp_footer(); ?>
	</div>
	<!-- Fin del contenedor principal -->
</body>
</html>