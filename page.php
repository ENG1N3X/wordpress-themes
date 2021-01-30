<?php
	get_header();
?>

<main class="page-template">
	<section class="error grid-container">
        <h2 class="title"><?php the_title(); ?></h2>
        <p class="text">
          <?php the_content(); ?>
        </p>
	</section>
</main>

<?php
	get_footer();
?>