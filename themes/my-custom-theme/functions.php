<?php
// Theme Setup Function
function my_custom_theme_setup()
{
    // Add support for featured images (post thumbnails)
    add_theme_support('post-thumbnails');

    // Register custom menu locations
    register_nav_menus(array(
        'primary' => 'Primary Menu',  // Location for primary navigation menu
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');


function my_custom_theme_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());

    // Enqueue Bootstrap 5 CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

    // Enqueue Bootstrap 5 Bundle JS (includes Popper)
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);

    // Enqueue the custom navbar CSS
    wp_enqueue_style('navbar-style', get_template_directory_uri() . '/css/nav/nav.css', array(), '1.0', 'all');

    wp_enqueue_style('landing-page-style', get_template_directory_uri() . '/css/landing_page/landing_page.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');



// Register the Navigation Menu
function my_custom_register_menus()
{
    // Register Primary Navigation Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_register_menus');
