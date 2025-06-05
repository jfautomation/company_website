<?php
/**
 * Template Name: Landing Page
 */
?>

<?php get_template_part( 'partials/header' ); ?>
<div class="landing-page-content">
    <!-- <?php
    // Use WordPress loop to pull content from the CMS
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // Display the content of the page
        endwhile;
    endif;
    ?> -->

    <?php get_template_part('partials/landing-page-hero')?>
    <?php get_template_part('partials/landing-page-services')?>
    <?php get_template_part('partials/landing-page-about-cta')?>
    <?php get_template_part('partials/landing-page-online-shop-cta')?>
    <?php get_template_part('partials/brands-preview-cta')?>
    <?php get_template_part('partials/landing-page-blog')?>
    <?php get_template_part('partials/landing-page-reviews')?>
    <?php get_template_part('partials/landing-page-brands')?>
</div>
<?php get_template_part( 'partials/footer' ); ?>