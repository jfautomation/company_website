<?php
/**
 * Template Name: About Page
 */
?>

<?php
$about_hero_bg_image = get_field('about_page_hero_image');
?>



<div class="about-page-content">
    <div  style="background-image: url('<?php echo esc_url($about_hero_bg_image); ?>'); background-size: cover; background-position: center;" class="about-page-hero"></div>
    <?php
   
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); 
        endwhile;
    endif;
    ?>

    <?php
get_template_part('partials/header-and-text', null, array(
    'h2_text' => get_field('about_page_opening_header_title'),
    'p' => get_field('about_page_opening_header_paragraph'),
));
?>
</div>