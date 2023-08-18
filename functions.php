<?php



//
require_once('templates/helpers/customizer.php');

// Load Google fonts
function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
}

add_action('wp_enqueue_scripts', 'enqueue_google_fonts');

//Add custom scripts
function enqueue_custom_scripts() {
    // Enqueue jQuery from WordPress core
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);

    // Enqueue Owl Carousel JavaScript
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), '2.3.4', true);

    // Enqueue Animation JavaScript
    wp_enqueue_script('animation', get_template_directory_uri() . '/assets/js/animation.js', array('jquery'), '1.0', true);

    // Enqueue ImagesLoaded JavaScript
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.js', array('jquery'), '4.1.4', true);

    // Enqueue Custom JavaScript
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery', 'bootstrap', 'owl-carousel', 'animation', 'imagesloaded'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

//Add custom Styles
function enqueue_custom_styles() {

     // Enqueue Bootstrap stylesheet
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '5.0.2', 'all');

    // Enqueue Font Awesome stylesheet
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '5.15.3');

    // Enqueue TemplateMo DigiMedia stylesheet
    wp_enqueue_style('templatemo-digimedia', get_template_directory_uri() . '/assets/css/templatemo-digimedia-v1.css', array(), '1.0');

    // Enqueue Animated stylesheet
    wp_enqueue_style('animated', get_template_directory_uri() . '/assets/css/animated.css', array(), '1.0');

    // Enqueue Owl Carousel stylesheet
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.css', array(), '2.3.4');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme_setup');


?>
