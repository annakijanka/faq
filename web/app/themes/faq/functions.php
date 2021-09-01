<?php
/**
 * Functions and definitions
 */

function faq_register_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'faq-js', get_template_directory_uri() . '/dist/bundle.js', array(), $theme_version, true );
	wp_script_add_data( 'faq-js', 'async', true );
}

add_action( 'wp_enqueue_scripts', 'faq_register_scripts' );
