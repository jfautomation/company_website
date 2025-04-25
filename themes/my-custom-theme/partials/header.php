<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
    <!-- Required for WordPress to function properly -->
</head>

<body <?php body_class(); ?>>

<header class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-4" id="main-navbar">
        <div class="container-fluid">
            <a class="navbar-brand mt-1" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mt-2 mb-2 mb-lg-0 ms-lg-5 d-flex gap-lg-3">
                    <?php
                    // Fetch and loop through the menu items from WordPress
                    $locations = get_nav_menu_locations();
                    $menu_id = $locations['primary'] ?? null; // Get the primary menu ID

                    if ($menu_id) :
                        $menu_items = wp_get_nav_menu_items($menu_id); // Get menu items
                        if ( ! empty( $menu_items ) ) :
                            foreach ( $menu_items as $menu_item ) :
                                // Check if the menu item is 'Contact' and don't output it yet
                                if (strtolower($menu_item->title) !== 'contact') :
                                    // Add active class based on current page
                                    $is_active = (esc_url($menu_item->url) === home_url($_SERVER['REQUEST_URI'])) ? 'active' : '';
                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $is_active; ?>" href="<?php echo esc_url( $menu_item->url ); ?>">
                                            <?php echo esc_html( $menu_item->title ); ?>
                                        </a>
                                    </li>
                    <?php
                                endif; // End 'Contact' check
                            endforeach;
                        else :
                    ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">No Menu Items Found</a>
                            </li>
                    <?php
                        endif;
                    endif;
                    ?>

                    <!-- Hardcoded "Shop" link before "Contact" -->
                    <li class="nav-item">
                        <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="nav-link">
                            Shop
                        </a>
                    </li>

                    <!-- Now output "Contact" after the "Shop" link -->
                    <?php
                    if ($menu_id) :
                        foreach ( $menu_items as $menu_item ) :
                            // Only output the 'Contact' link
                            if (strtolower($menu_item->title) === 'contact') :
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                                <?php echo esc_html( $menu_item->title ); ?>
                            </a>
                        </li>
                    <?php
                            endif;
                        endforeach;
                    endif;
                    ?>
                </ul>

                <!-- Icon for shop on the right (for desktop and mobile) -->
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="shop-icon-link">
                    <i class="fas fa-store text-dark fs-5"></i>
                </a>
            </div>
        </div>
    </nav>
</header>
