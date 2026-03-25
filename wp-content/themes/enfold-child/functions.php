<?php
/**
 * Enfold Child Theme functions
 *
 * Enqueues the parent Enfold stylesheet followed by this child theme's
 * stylesheet, so child styles always take precedence.
 */

add_action( 'wp_enqueue_scripts', 'enfold_child_enqueue_styles' );

function enfold_child_enqueue_styles() {
	wp_enqueue_style(
		'enfold-parent-style',
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		'enfold-child-style',
		get_stylesheet_uri(),
		array( 'enfold-parent-style' )
	);
}
