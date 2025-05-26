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
    <!-- //// hero -->
    <?php get_template_part('partials/landing-page-hero')?>
    <!-- //// brands preview -->
    <?php get_template_part('partials/brands-preview-cta')?>

    <!-- //// services -->
    <?php get_template_part('partials/landing-page-services')?>
    <!-- //// services extend -->

    <!-- //// about & CTA -->
    <?php get_template_part('partials/landing-page-about-cta')?>
    
    <!-- //// visit online shop CTA -->
    <?php get_template_part('partials/landing-page-online-shop-cta')?>
     <!-- //// visit online shop CTA -->
    <?php get_template_part('partials/landing-page-blog')?>
    
    <!-- //// reviews -->
    <?php get_template_part('partials/landing-page-reviews')?>
    <!-- //// brands we repair -->
    <?php get_template_part('partials/landing-page-brands')?>
</div>
<?php get_template_part( 'partials/footer' ); ?>