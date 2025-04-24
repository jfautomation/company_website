<?php
/**
 * Template Name: Landing Page
 */
?>

<?php get_template_part( 'partials/header' ); ?>

<div class="landing-page-content">
    <?php
    // Use WordPress loop to pull content from the CMS
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // Display the content of the page
        endwhile;
    endif;
    ?>
    <section class="hero">
        <h1><?php echo esc_html( get_field('hero_header_text') ); ?></h1>
        <p><?php echo esc_html( get_field('hero_paragraph_text') ); ?></p>
        
      
        <a href="<?php echo esc_url( get_field('hero_button_link_1') ); ?>" class="btn btn-primary">
            <?php echo esc_html( get_field('hero_button_text_1') ); ?>
        </a>
        <a href="<?php echo esc_url( get_field('hero_button_link_2') ); ?>" class="btn btn-secondary">
            <?php echo esc_html( get_field('hero_button_text_2') ); ?>
        </a>
    </section>
</div>

<?php get_template_part( 'partials/footer' ); ?>
