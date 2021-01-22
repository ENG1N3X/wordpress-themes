<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title() ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<?php
		get_header();
	?>

	<main>
		<section class="test-slider owl-carousel owl-theme owl-loaded">
			<div class="item">
				<h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
				<p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi optio perferendis exercitationem provident consequatur consequuntur eos quibusdam, numquam, accusantium eaque sint fugit veniam expedita cum magni ducimus facilis. Expedita?</p>
			</div>
			<div class="item">
				<h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
				<p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi optio perferendis exercitationem provident consequatur consequuntur eos quibusdam, numquam, accusantium eaque sint fugit veniam expedita cum magni ducimus facilis. Expedita?</p>
			</div>
			<div class="item">
				<h4 class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
				<p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi optio perferendis exercitationem provident consequatur consequuntur eos quibusdam, numquam, accusantium eaque sint fugit veniam expedita cum magni ducimus facilis. Expedita?</p>
			</div>
		</section>
	</main>

	<?php
		get_footer();
	?>
	
</body>
</html>