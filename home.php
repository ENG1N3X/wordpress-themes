<?php
	get_header();
?>

<!-- blog page -->
<main class="blog-page">
	<section class="blog">
		<h1 class="main-title">Blog</h1>
		<?php
			$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
			$args = array(
				'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
				'paged'          => $current_page // текущая страница
			);
			query_posts( $args );
 
			$wp_query->is_archive = false;
			$wp_query->is_home = true;
		?>
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-padding-y">
				<?php
					while(have_posts()): the_post();
				?>
					<div class="cell medium-4 small-3">
						<?php get_template_part( 'components/article-item' ); ?>
					</div>
				<?php
					endwhile;
				?>
			</div>
		</div>
	</section>
</main>
<!-- blog page //-->

<?php
	get_footer();
?>