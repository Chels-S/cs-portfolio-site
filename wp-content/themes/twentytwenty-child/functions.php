<?php
/**
* TwentyTwenty Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage CS Designs
* @since CS Designs 1.0
*/

// Enqueue scripts and styles
function twentytwenty_child_scripts(){
	wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentytwenty-style' ));
	wp_enqueue_style('twentytwenty-child-google-fonts','//fonts.googleapis.com/css2?family=Inconsolata:wght@400;700;900');
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_child_scripts' );


function create_custom_post_types() {
    register_post_type( 'portfolio_works',
        array(
            'labels' => array(
                'name' => __( 'Portfolio Works' ),
                'singular_name' => __( 'Portfolio Work' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'portfolio-work' ),
        )
    );

}


// Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );
