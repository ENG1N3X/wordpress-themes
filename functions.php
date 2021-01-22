<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'thirteen_setup' ) ) :
	function thirteen_setup() {
		load_theme_textdomain( 'thirteen', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'thirteen' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'thirteen_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'thirteen_setup' );

// function thirteen_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'thirteen' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'thirteen' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'thirteen_widgets_init' );

/**
 * Scripts and styles.
 */
function thirteen_styles() {
	wp_enqueue_style( 'styles', get_theme_file_uri("/assets/css/styles.min.css"));
}
add_action( 'wp_enqueue_scripts', 'thirteen_styles' );

function thirteen_scripts() {
	wp_deregister_script("jquery");
	wp_enqueue_script( "jquery", get_theme_file_uri("/assets/js/scripts.min.js"));
}
add_action( 'wp_enqueue_scripts', 'thirteen_scripts' );