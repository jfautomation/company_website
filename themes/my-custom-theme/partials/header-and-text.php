<?php
$args = wp_parse_args($args);
?>

<div class="">
    <div class="">
        <?php if (!empty($args['h2_text'])) : ?>
        <h5 class="fw-bold"><?php echo esc_html($args['h2_text']); ?></h5>
        <?php endif; ?>


    </div>

    <?php if (!empty($args['p'])) : ?>
    <p class="text-gradient-blue mt-2"><?php echo esc_html($args['p']); ?></p>
    <?php endif; ?>
</div>