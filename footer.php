	<!-- footer -->
	<footer class="grid-container">
		<div class="grid-x align-right">
			<div class="cell medium-6">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'container' => 'nav',
							'container_id' => '',
							'container_class' => "menu",
							'menu_id' => '',
							'menu_class'      => 'menu-list',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>'
						)
					);
				?>
			</div>
			<span class="cell theme-info">
				Theme info <?php bloginfo('name'); ?> <?php bloginfo('version'); ?>
			</span>
		</div>
	</footer>
	<!-- footer // -->

	<?php wp_footer(); ?>

	</body>
</html>	