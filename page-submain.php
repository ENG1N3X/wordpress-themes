<?php
	get_header();
?>

<!-- submain page -->
<main class="submain-page">
	<section class="hero grid-container">
    <h2 class="main-title"><?php the_title(); ?></h2>
    <div class="text">
      <?php the_content() ?>
    </div>
	</section>
</main>
<!-- submain page //-->

<?php
	get_footer();
?>