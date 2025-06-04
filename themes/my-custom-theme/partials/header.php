<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary px-4" id="main-navbar">
            <div class="container">
                <a class="navbar-brand mt-1" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0 ms-lg-5 d-flex gap-lg-5">
                        <?php
                        $locations = get_nav_menu_locations();
                        $menu_id = $locations['primary'] ?? null;

                        if ($menu_id) :
                            $menu_items = wp_get_nav_menu_items($menu_id);
                            if (!empty($menu_items)) :
                                foreach ($menu_items as $menu_item) :
                                    if (strtolower($menu_item->title) !== 'contact') :
                                        $is_active = (esc_url($menu_item->url) === home_url($_SERVER['REQUEST_URI'])) ? 'active' : '';
                        ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $is_active; ?>"
                                href="<?php echo esc_url($menu_item->url); ?>">
                                <?php echo esc_html($menu_item->title); ?>
                            </a>
                        </li>
                        <?php
                                    endif;
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

                        <?php
                        if ($menu_id) :
                            foreach ($menu_items as $menu_item) :
                                if (strtolower($menu_item->title) === 'contact') :
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                                <?php echo esc_html($menu_item->title); ?>
                            </a>
                        </li>
                        <?php
                                endif;
                            endforeach;
                        endif;
                        ?>
                    </ul>

                    <div class="d-flex align-items-center gap-3">
                        <?php
        echo do_shortcode('[button variant="outline-black" size="sm" link="' . esc_url(get_field('hero_button_link_1')) . '" icon="bi-arrow-right"]Shop now[/button]');
      ?>


                        <i class="bi fs-5 <?php echo esc_attr(get_field('social_icon_1')); ?>"></i>
                        <i class="bi fs-5 <?php echo esc_attr(get_field('social_icon_2')); ?>"></i>
                    </div>
                </div>
            </div> 
        </nav>
    </header>