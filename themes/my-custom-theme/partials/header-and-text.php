<style>
.header-and-text-paragraph {
    font-size: 0.9rem;
}
</style>

<?php
$args = wp_parse_args($args);
?>

<section class="mt-2">
    <div class="container d-flex justify-content-between align-items-start gap-5">

        <?php if (!empty($args['h2_text'])) : ?>
        <h2 class="fw-bold mb-0 w-75 pe-5"><?php echo esc_html($args['h2_text']); ?></h2>
        <?php endif; ?>




        <?php if (!empty($args['p'])) : ?>
        <p class="header-and-text-paragraph w-25 mt-1"><?php echo esc_html($args['p']); ?></p>
        <?php endif; ?>
    </div>
</section>