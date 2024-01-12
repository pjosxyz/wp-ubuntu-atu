<?php
	function ubuntuTheme_theme_support() {
		add_theme_support('title_tag');
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
	}

	add_action('after_setup_theme', 'ubuntuTheme_theme_support');

	function ubuntuTheme_menus() {
		$locations = array(
			'primary' => 'primary nav bar',
			'footer' => 'footer menu items',
			'social-footer' => 'social footer links'
		);

		register_nav_menus($locations);
	}

	add_action('init', 'ubuntuTheme_menus');

	function ubuntuTheme_register_styles(): void {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style('ubuntu-fonts', "https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap", false);
		wp_enqueue_style('ubuntu-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
	}

	add_action('wp_enqueue_scripts', 'ubuntuTheme_register_styles');

	function ubuntuTheme_widgets() {
		register_sidebar(
			array(
				'before_title' => '',
				'after_title' => '',
				'before_widget' => '<ul class="">',
				'after_widget' => '</ul>',
				'name' => 'searchbar-nav',
				'id' => 'searchbar-nav', // css id
				'description' => 'search widget area in header'
			)
		);
	}

add_action( 'widgets_init', 'ubuntuTheme_widgets' );

	// remove
function custom_search_page() {
	if (is_search()) {
		include(get_template_directory() . '/search-results.php');
		exit;
	}
}
add_action('template_redirect', 'custom_search_page');



