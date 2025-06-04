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
            'link'    => '#',
            'size'    => '',
            'icon'    => '', // Optional Bootstrap icon class (e.g. "bi-arrow-right")
        ),
        $atts,
        'button'
    );

    $variant = esc_attr($atts['variant']);
    $size    = esc_attr($atts['size']);
    $link    = esc_url($atts['link']);
    $icon    = esc_attr($atts['icon']);

    // Construct button classes
    $button_class = 'btn-base btn-' . $variant;
    if (!empty($size)) {
        $button_class .= ' btn-' . $size;
    }

    // Optional icon HTML (after text)
    $icon_html = $icon ? ' <i class="ms-2 mt-1 bi ' . $icon . '" aria-hidden="true"></i>' : '';

    // Build button markup
    $button_html = '<a href="' . $link . '" class="' . $button_class . '">';

    // Outline variant gets a special span
    if (str_starts_with($variant, 'outline-')) {
        $button_html .= '<span class="btn-inner"></span>';
    }

    $button_html .= do_shortcode($content) . $icon_html;
    $button_html .= '</a>';

    return $button_html;
}
add_shortcode('button', 'custom_button_shortcode');




//// custom carousel indicators
function render_custom_carousel_indicators($carousel_id, $images) {
    if (empty($images)) return; ?>

<div class="w-100 d-flex justify-content-end gap-2">
    <!-- Previous Arrow -->
    <span role="button" data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="prev"
        aria-label="Previous slide" class="indicator-container bg-light cursor-pointer">
        <i class="bi bi-arrow-left"></i>
        </i>
    </span>

    <!-- Next Arrow -->
    <span role="button" class="indicator-container bg-light cursor-pointer"
        data-bs-target="#<?php echo esc_attr($carousel_id); ?>" data-bs-slide="next" aria-label="Next slide">
        <i class="bi bi-arrow-right"></i>
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