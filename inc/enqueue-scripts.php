<?php

function rs_enqueue_style() {
	
	wp_register_style( 'rs-normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '', '' );
	wp_register_style( 'rs-foundation-style', get_template_directory_uri() . '/css/foundation.min.css', array(), '' );
	wp_register_style( 'rs-foundation-icons', get_template_directory_uri() . '/css/foundation-icons.min.css', array(), '', '' );
	wp_register_style( 'rs-mobile-style', get_template_directory_uri() . '/css/mobile.css', array(), '', '' );
	wp_register_style( 'rs-site-style', get_template_directory_uri() . '/css/site.css', array(), '', '' );
	
	wp_enqueue_style( 'rs-normalize' );
	wp_enqueue_style( 'rs-foundation-style' );
	wp_enqueue_style( 'rs-foundation-icons' );
	wp_enqueue_style( 'rs-mobile-style' );
	wp_enqueue_style( 'rs-site-style' );
	
	// Register child theme style if using child theme
	if ( is_child_theme() ) {
	
		wp_register_style( 'rs-child-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );	
		wp_enqueue_style( 'rs-child-stylesheet' );
	}
}

add_action( 'wp_enqueue_scripts', 'rs_enqueue_style' );

?>