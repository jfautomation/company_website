<?php
/**
 * Template Name: About Page
 */
?>



<div class="about-page-content">
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