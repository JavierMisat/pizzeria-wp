<?php

/**
 * Setup the theme
 */
function manaexpress_setup() {
	add_theme_support( 'post-thumbnails' );

	add_image_size('nosotros', 437, 291, true);
	add_image_size('especialidades', 768, 515, true);
}

/**
 * Registrar estilos css
 */
function manaexpress_styles() {
	/*
	 * Registrar estilos css
	 */
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '5.0.9' );
	wp_register_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900', array(), '1.0.0' );
	wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css', 'normalize', '8.0.0' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css', 'normalize', '1.0' );


	/*
	 * Invocar estilos css agregandolos al head
	 */
	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'style' );

	/**
	 * Regusistar Javascript
	 */
	wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts' );

}

/**
 * Registrar menús de theme
 */
function manaexpress_menus() {
	register_nav_menus( array(
		'header-menu' => __( 'Header Menu', 'manaexpress' ),
		'social-menu' => __( 'Social Menu', 'manaexpress' ),
		'footer-menu' => __( 'Footer Menu', 'manaexpress' ),
	) );
}

//Añadir acciones al theme
add_action( 'after_setup_theme', 'manaexpress_setup' );
add_action( 'init', 'manaexpress_menus' );
add_action( 'wp_enqueue_scripts', 'manaexpress_styles' );
add_action( 'init', 'manaexpress_especialidades' );
/**
 * Quitar emojis por defecto de wordpress
 */

// REMOVE WP EMOJI
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



function manaexpress_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'manaexpress' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'manaexpress' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'manaexpress' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'manaexpress' ),
		'add_new'            => _x( 'Add New', 'book', 'manaexpress' ),
		'add_new_item'       => __( 'Add New Pizza', 'manaexpress' ),
		'new_item'           => __( 'New Pizzas', 'manaexpress' ),
		'edit_item'          => __( 'Edit Pizzas', 'manaexpress' ),
		'view_item'          => __( 'View Pizzas', 'manaexpress' ),
		'all_items'          => __( 'All Pizzas', 'manaexpress' ),
		'search_items'       => __( 'Search Pizzas', 'manaexpress' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'manaexpress' ),
		'not_found'          => __( 'No Pizzases found.', 'manaexpress' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'manaexpress' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'manaexpress' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}