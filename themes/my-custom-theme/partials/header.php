<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Required for WordPress to function properly -->
</head>
<body <?php body_class(); ?>>

<header>
    <div class="">
            <!-- Site Title & Description -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                // Fetch and loop through the menu items from WordPress
                $locations = get_nav_menu_locations();
                $menu_id = $locations['primary'] ?? null; // Get the primary menu ID
                
                if ($menu_id) :
                    $menu_items = wp_get_nav_menu_items($menu_id); // Get menu items
                    if ( ! empty( $menu_items ) ) :
                        foreach ( $menu_items as $menu_item ) :
                ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                                    <?php echo esc_html( $menu_item->title ); ?>
                                </a>
                            </li>
                <?php
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
            </ul>
        </div>
    </div>
</nav>

 

          
            <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => false, 
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0', 
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            
                        ) );
                        ?>
                    </div>
                </div>
            </nav> -->
        </div>
    </header>

    <!-- Main Content -->
