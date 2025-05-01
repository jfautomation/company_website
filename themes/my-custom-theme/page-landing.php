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
    <!-- //// services -->
    <?php get_template_part('partials/landing-page-services')?>
      <!-- //// services extend -->
      <?php get_template_part('partials/landing-page-services-stats')?>
    <!-- //// about & CTA -->
    <?php get_template_part('partials/landing-page-about-cta')?>
    <!-- //// brands we repair -->
    <?php get_template_part('partials/landing-page-brands')?>
    <!-- //// visit online shop CTA -->
    <?php get_template_part('partials/landing-page-online-shop-cta')?>
    <!-- //// reviews -->
    <?php get_template_part('partials/landing-page-reviews')?>
</div>
<?php get_template_part( 'partials/footer' ); ?>


