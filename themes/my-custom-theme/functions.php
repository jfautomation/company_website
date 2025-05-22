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
    
    $atts = shortcode_atts(
        array(
            'variant' => 'primary',
            'link' => '#',
            'size' => '', 
        ),
        $atts,
        'button'
    );

    $variant = esc_attr($atts['variant']);
    $size = esc_attr($atts['size']);

    
    $button_class = 'btn-base btn-' . $variant;
    if (!empty($size)) {
        $button_class .= ' btn-' . $size;
    }

  
if (str_starts_with($variant, 'outline-')) {
    return '<a href="' . esc_url($atts['link']) . '" class="' . $button_class . '"><span class="btn-inner"></span>' . do_shortcode($content) . '</a>';
}


    return '<a href="' . esc_url($atts['link']) . '" class="' . $button_class . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'custom_button_shortcode');


function rounded_pill_icon_button_shortcode($atts, $content = null) {
    $atts = shortcode_atts(
        array(
            'variant' => 'blue-rounded-btn', 
            'link' => '#', 
            'icon' => '', 
        ),
        $atts,
        'rounded_pill_button' 
    );

    $variant = esc_attr($atts['variant']);
    $icon = esc_attr($atts['icon']); 

    $button_class = 'rounded-pill-with-icon ' . $variant;

    $icon_html = $icon ? '<div class="rounded-btn-icon-container"><i class="' . $icon . '"></i></div>' : '';

    $button_content = $icon_html . ' ' . do_shortcode($content);

    if (str_starts_with($variant, 'outline-')) {
        return '<a href="' . esc_url($atts['link']) . '" class="' . $button_class . '"><span class="rounded-pill-with-icon"></span>' . $button_content . '</a>';
    }

    return '<a href="' . esc_url($atts['link']) . '" class="rounded-pill-with-icon ' . $variant . '">'
        . '<span class="button-text">' . do_shortcode($content) . '</span>' 
        . $icon_html . '</a>';
}
add_shortcode('rounded_pill_button', 'rounded_pill_icon_button_shortcode');



//// custom carousel indicators
function render_custom_carousel_indicators($carousel_id, $images) {
    if (empty($images)) return; ?>

<div class="w-100 d-flex justify-content-end gap-2">
    <!-- Previous Arrow -->
    <span role="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="prev"
        aria-label="Previous slide" class="indicator-container bg-light cursor-pointer">
        <i class="indicator-chevron fas fa-chevron-left">
        </i>
    </span>

    <!-- Next Arrow -->
    <span role="button" class="indicator-container bg-light cursor-pointer"
        data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="next" aria-label="Next slide">
        <i class="indicator-chevron fas fa-chevron-right">
        </i>
    </span>
</div>

<?php }







function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css', array(), null);

    wp_enqueue_style('navbar-style', get_template_directory_uri() . '/css/nav/nav.css', array(), '1.0', 'all');

    wp_enqueue_style('landing-page-style', get_template_directory_uri() . '/css/landing_page/landing_page.css', array(), '1.0', 'all');
    
    wp_enqueue_style('my-global-styles', get_template_directory_uri() . '/css/globals.css', array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');



function my_custom_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_register_menus');