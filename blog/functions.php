<?php 
	function rahad_blog_setup() {
		load_theme_textdomain( 'rahadblog' );

		add_theme_support( 'header' );
		add_theme_support( 'title-tag' );

	}

	add_action( 'after_setup_theme', 'rahad_blog_setup' );
	/**
	 * Enqueue scripts and styles.
	 */
	function rahad_blog() {
		// Theme stylesheet.
		wp_enqueue_style( 'bootstrap-style', get_theme_file_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style( 'font-awesome', get_theme_file_uri() . '/css/font-awesome.min.css');
		wp_enqueue_style( 'app-common', get_theme_file_uri() . '/css/app.css' );
		wp_enqueue_style( 'rahadblog-style', get_stylesheet_uri() );

		//Theme script files
		wp_enqueue_script( 'jquery', get_theme_file_uri() . '/js/jquery.js' );
		wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/js/bootstrap.min.js' );
		wp_enqueue_script( 'main', get_theme_file_uri() . '/js/main.js' );
	}

	add_action( 'wp_enqueue_scripts', 'rahad_blog' );

?>

