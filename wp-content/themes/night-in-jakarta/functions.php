<?php
add_action('after_setup_theme', 'night_in_jakarta_setup', 9);

function night_in_jakarta_setup() {
	add_theme_support(
				'custom-header',
				array (
					'default-text-color' => 'ffffff',
					'default-image' => get_stylesheet_directory_uri().'/images/header.png',
					'width' => 1600,
					'height' => 230,
					'uploads' => true,
					'header-text' => true
				)
			);
	
	register_default_headers(
				array (
					'jakarta' => array (
						'url' => get_stylesheet_directory_uri().'/images/header.png',
						'thumbnail_url' => get_stylesheet_directory_uri().'/images/header.png',
						'description' => __('Jakarta', 'night-in-jakarta')
					)
				)
			);
		add_editor_style('editor-style.css');
		function custom_editor_settings( $initArray ) {
		    $initArray['body_class'] = 'editor-area';
		    return $initArray;
		}
		add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );
}
?>
