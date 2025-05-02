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

function custom_button_shortcode($atts, $content = null) {
    // Set up default attributes for the button
    $atts = shortcode_atts(
        array(
            'variant' => 'primary',
            'link' => '#',
        ),
        $atts,
        'button'
    );

    // Button class based on the variant
    $variant = esc_attr($atts['variant']);
    $button_class = 'btn-base btn-' . $variant;

    // If variant is 'outline-primary', add inner <span> with after styling
    if ($variant === 'outline-primary') {
        return '<a href="' . esc_url($atts['link']) . '" class="' . $button_class . '"><span class="btn-inner"></span>' . do_shortcode($content) . '</a>';
    }
    

    // Default button markup
    return '<a href="' . esc_url($atts['link']) . '" class="' . $button_class . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'custom_button_shortcode');



//// custom carousel indicators
function render_custom_carousel_indicators($carousel_id, $images) {
    if (empty($images)) return; ?>

<div class="custom-carousel-container d-flex align-items-center justify-content-center">

    <i class="indicator-chevron fas fa-chevron-left me-4" data-bs-target="#<?php echo esc_attr($carousel_id); ?>"
        data-bs-slide="prev">
    </i>

    <div class="custom-carousel-indicators" data-target="#<?php echo esc_attr($carousel_id); ?>">
        <?php foreach ($images as $index => $image) : ?>
        <button class="custom-indicator <?php echo ($index === 0) ? 'active' : ''; ?>"
            data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide-to="<?php echo $index; ?>">


        </button>
        <?php endforeach; ?>
    </div>

    <i class="indicator-chevron fas fa-chevron-right ms-4" data-bs-target="#<?php echo esc_attr($carousel_id); ?>"
        data-bs-slide="next">
    </i>

</div>


<?php }







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
    
    wp_enqueue_style('my-global-styles', get_template_directory_uri() . '/css/globals.css', array(), '1.0', 'all');

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