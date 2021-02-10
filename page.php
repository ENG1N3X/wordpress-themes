<?php
	get_header();
?>

<!-- main page -->
<main class="main-page">

<!-- <p><?php the_field('main-hero-slider-title'); ?></p>
<p><?php the_field('main-hero-slider-text'); ?></p>
<?php if( get_field('main-hero-slider-image') ): ?>
    <img src="<?php the_field('main-hero-slider-image'); ?>" />
<?php endif; ?> -->

  <section class="hero">
    <h2 class="main-title"><?php the_title(); ?></h2>
    <div class="hero-slider owl-carousel owl-theme owl-loaded">
      <div class="item">
        <h4 class="item__title">Llorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
        <p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi optio perferendis exercitationem provident consequatur consequuntur eos quibusdam, numquam, accusantium eaque sint fugit veniam expedita cum magni ducimus facilis. Expedita?</p>
      </div>
      <div class="item">
        <h4 class="item__title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
        <p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi optio perferendis exercitationem provident consequatur consequuntur eos quibusdam, numquam, accusantium eaque sint fugit veniam expedita cum magni ducimus facilis. Expedita?</p>
      </div>
      <div class="item">
        <h4 class="item__title">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
        <p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sequi optio perferendis exercitationem provident consequatur consequuntur eos quibusdam, numquam, accusantium eaque sint fugit veniam expedita cum magni ducimus facilis. Expedita?</p>
      </div>
	  </div>
  </section>
</main>
<!-- main page //-->

<?php
	get_footer();
?>