<?php
	get_header();
?>

<main class="category-template">
  <section class="category grid-container">
    <h2 class="title">
      <?php single_cat_title(); ?>
    </h2>
    <div class="text">
      <?php echo category_description(); ?>
    </div>
    <div class="tags">
      <?php the_tags("Tags: "); ?>
    </div>
  </section>
</main>

<?php
	get_footer();
?>