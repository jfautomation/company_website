<?php get_header(); ?>

<main>
    <h1>Welcome to My Custom Theme</h1>
    <button type="button" class="btn btn-primary">Primary</button>

    <?php
    // Start the WordPress Loop
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Display the post content
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    else :
        echo '<p>No posts found</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
