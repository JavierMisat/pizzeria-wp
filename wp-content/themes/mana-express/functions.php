<?php

/**
 * Registrar estilos css
 */
function manaexpress_styles() {
	/*
	 * Registrar estilos css
	 */
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '5.0.9' );
	wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css', 'normalize', '8.0.0' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', 'normalize', '1.0' );

	/*
	 * Invocar estilos css agregandolos al head
	 */
	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'style' );
}

/**
 * Registrar menús de theme
 */
function manaexpress_menus() {
	register_nav_menus( array(
		'header-menu' => __( 'Header Menu', 'manaexpress' ),
		'social-menu' => __( 'Social Menu', 'manaexpress' ),
	) );
}

//Añadir acciones al theme
add_action( 'init', 'manaexpress_menus' );
add_action( 'wp_enqueue_scripts', 'manaexpress_styles' );
