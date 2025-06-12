<?php
/**
 * Template Name: About Page
 */
?>

<?php
$about_hero_bg_image = get_field('about_page_hero_image');
?>



<div class="about-page-content">
    <div style="background-image: url('<?php echo esc_url($about_hero_bg_image); ?>'); background-size: cover; background-position: center;"
        class="about-page-hero">

        <div class="text-light img-overlay-text w-100">
            <div class="container pb-5">
                <span class="hero-span"><?php echo esc_html(get_field('about_page_hero_span')); ?></span>
                <h1 class="hero-title mt-2 w-50"><?php echo esc_html(get_field('about_page_hero_title')); ?></h1>

            </div>
        </div>

    </div>

    <?php
   
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); 
        endwhile;
    endif;
    ?>
    <!-- /// header and text -->
    <?php
get_template_part('partials/header-and-text', null, array(
    'h2_text' => get_field('about_page_opening_header_title'),
    'p' => get_field('about_page_opening_header_paragraph'),
));?>



    <?php
get_template_part('partials/about-page-selling-cards')
?>
</div>