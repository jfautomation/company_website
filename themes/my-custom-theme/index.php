<!-- <?php get_template_part('partials/header'); ?>

<main class="site-main-content pt-5">
    <h1 class="mt-5 bg-warning">I AM MAIN!!!!!!</h1>
    <?php
    if (is_front_page()) {
        get_template_part('page-landing');
    } elseif (is_page('about')) {
        get_template_part('page-about');
    } elseif (is_page('contact')) {
        get_template_part('partials/pages/contact');
    } elseif (is_single()) {
        get_template_part('partials/pages/single-post');
    } elseif (is_archive()) {
        get_template_part('partials/pages/archive');
    } else {
        // fallback
        echo '<p>Page not found or not defined in index.php</p>';
    }
    ?>
</main>

<?php get_template_part('partials/footer'); ?> -->