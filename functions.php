<?php 

define('OHANA_VERSION_NUMBER', '0.0.1');
add_filter('show_admin_bar', '__return_false');

/**
 * General configuration for the theme
 */
  add_action( 'after_setup_theme', 'ohana_setup' );
 function ohana_setup(){

    // ———————————————————————————————-
    // Set image sizes
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    // ———————————————————————————————-
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 312, 415 ); // Default thumbnail size

 }



/**
 * Enqueue theme stylesheet files
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */
add_action( 'wp_enqueue_scripts', 'ohana_enqueue_styles' );
function ohana_enqueue_styles() {
    wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css', array(), OHANA_VERSION_NUMBER, 'all' );
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/style.css', array(), OHANA_VERSION_NUMBER, 'all' );
}


/**
 * Enqueue theme Javascript files
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 */
add_action( 'wp_enqueue_scripts', 'ohana_enqueue_scripts' );
function ohana_enqueue_scripts() {
    wp_enqueue_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), OHANA_VERSION_NUMBER);
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/js//libs/jquery.gsap.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/assets/js//libs/TweenMax.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'easepack', get_template_directory_uri() . '/assets/js//libs/EasePack.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'timeline', get_template_directory_uri() . '/assets/js//libs/TimelineLite.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js//libs/jquery.waypoints.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'bundle', get_template_directory_uri() . '/assets/js/bundle.min.js', array('jquery'), OHANA_VERSION_NUMBER,  true );
}

/**
 *  Register Navigation Menus
 *
 */
add_action( 'init', 'navigation_menus' );
function navigation_menus() {

    $locations = array(
        'header_menu' => __( 'Header Menu', 'ohana' ),
    );
    register_nav_menus( $locations );
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}