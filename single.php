<?php
	get_header();
?>

<main class="single-template">
	<section class="single grid-container">
    <div class="image">
      <?php echo get_the_post_thumbnail('','', array( 'class' => 'image-src' )); ?>
    </div>
    <span class="date">
      <?php the_time(); ?>
      <?php echo get_the_date(); ?>
    </span>
    <h2 class="title">
      <?php the_title(); ?> 
    </h2>
    <div class="category-list">
      <?php the_category(", "); ?>
    </div>
    <div class="text">
      <?php the_content(); ?>
    </div>
    <div class="tags">
      <?php the_tags(); ?>
    </div>
  </section>
</main>

<?php
	get_footer();
?>