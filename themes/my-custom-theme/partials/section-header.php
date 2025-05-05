<div class="section-header d-flex flex-column align-items-start mt-3">
    <?php if (!empty($args['h5_text'])) : ?>
    <h5 class="fw-bold"><?php echo esc_html($args['h5_text']); ?></h5>
    <?php endif; ?>

    <?php if (!empty($args['h2_text'])) : ?>
    <h2 class="text-gradient-blue mt-2"><?php echo esc_html($args['h2_text']); ?></h2>
    <?php endif; ?>
</div>