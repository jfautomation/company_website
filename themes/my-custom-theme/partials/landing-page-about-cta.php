<?php
$cta_image_url = get_field('landing_page_cta_image'); 
$cta_image_url = $cta_image_url ? esc_url($cta_image_url) : '';
?>

<style>
.dark-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 0;
    border-radius: inherit;
}

.content {
    position: relative;
    z-index: 1;
}
</style>
<div>
    <div class="container text-light custom-rounded">
        <div style="
        background: url('<?php echo $cta_image_url; ?>') center center / cover
          no-repeat;
      " class="custom-rounded p-5 position-relative h-100 d-flex flex-column align-items-start justify-content-center">
            <div class="dark-overlay"></div>
            <div class="content">
                <h5 class="fw-semibold"><?php echo esc_html(get_field('landing_page_cta_subheader')); ?></h5>
                <h2 class="w-75 mt-3">
                    <?php echo esc_html(get_field('landing_page_cta_header')); ?>
                </h2>
                <div class="mt-4 d-flex flex-column gap-1">
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fs-5 bi <?php echo esc_attr(get_field('landing_page_span_1_icon')); ?>"></i>
                        <span class="fs-5"><?php echo esc_html(get_field('landing_page_span_1')); ?></span>
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <i class="fs-5 bi <?php echo esc_attr(get_field('landing_page_span_2_icon')); ?>"></i>
                        <span class="fs-5"><?php echo esc_html(get_field('landing_page_span_2')); ?></span>
                    </div>
                </div>

                <div class="mt-4 pt-2 d-flex gap-2">
                    <?php echo do_shortcode(
                                '[button variant="primary" link="' . esc_url(get_field('landing_page_cta_button_link')) . '"]' .
                                esc_html(get_field('landing_page_cta_button_text')) .
                                '[/button]'
                            ); ?>
                </div>
            </div>
        </div>
    </div>
</div>