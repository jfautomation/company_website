<div class="section-header d-flex flex-column align-items-start mt-3">
    <div class="d-flex w-100 justify-content-between align-items-center">
         <?php if (!empty($args['h5_text'])) : ?>
    <h5 class="fw-bold"><?php echo esc_html($args['h5_text']); ?></h5>
    <?php endif; ?>
    <small class="mb-2 fw-bold text-decoration-underline
    ">See all</small>
    </div>
 

    <?php if (!empty($args['h2_text'])) : ?>
    <h2 class="text-gradient-blue mt-2"><?php echo esc_html($args['h2_text']); ?></h2>
    <?php endif; ?>
</div>