<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Rye
 * @since Rye 1.0.0
 */

 /**
 * Enqueue scripts and styles.
 *
 * @since Rye 1.0.0
 *
 * @return void
 */
function rye_scripts() {
   // Bootstrap.
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.2.3', 'all');
    wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array ( 'jquery' ), '5.2.3', true);
    
    // style.css.
    wp_enqueue_style( 'rye-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'rye-main', get_template_directory_uri() . '/scss/main.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'rye_scripts', 10 );

if ( ! function_exists( 'rye_theme_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     *
     */
    function rye_theme_setup() {    
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
        load_theme_textdomain( 'rye', get_template_directory() . '/languages' );
        
		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support( 'post-thumbnails' ); 
        
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
        
        // Register nav menus.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'rye' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'rye_theme_setup' );

// Register widgets for theme use.
require_once get_template_directory() . '/inc/functions-sidebars.php';

// Bootstrap Navwalker.
require( get_template_directory() . '/classes/class-bootstrap-wp-nav-walker.php' );  