<header>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'container_id' => '',
				'container_class' => "menu",
				'menu_id' => '',
				'menu_class'      => 'menu-list',
				'items_wrap' => '<ul class="%2$s">%3$s</ul>'
			)
		);
	?>
</header>