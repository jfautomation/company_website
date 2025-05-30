<?php
$cta_image_url = get_field('landing_page_cta_image'); // returns URL string
$cta_image_url = $cta_image_url ? esc_url($cta_image_url) : '';
?>


    <div style="background: url('<?php echo $cta_image_url; ?>') center center / cover no-repeat;" class="p-5 container text-light custom-rounded">
        <div class="">
            <div class="row h-100 gx-5">
                <div class="col-lg-7">
                    <div class="h-100 d-flex flex-column align-items-start justify-content-center">
                        <h5 class="fw-semibold">Our guarantee</h5>
                        <h2 class="w-75 mt-2">
                            <!-- <?php echo esc_html(get_field('landing_page_cta_header')); ?> -->
                             Decades of trusted services and some more stuff for the UI
                        </h2>
                        <!-- <p class="mt-1 fs-5">
                            <?php echo esc_html(get_field('landing_page_cta_paragraph')); ?>
                        </p> -->
                        <div class="mt-3 d-flex flex-column gap-1">
                            <div class="d-flex gap-3 align-items-center">
                                <i class="fs-5 bi bi-wrench"></i>
                                <span class="fs-5">Expert motor repair backed by experience.</span>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <i class="fs-5 bi bi-clock-fill"></i>
                                <span class="fs-5">Quick turnaround. Minimal downtime.</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-2 d-flex gap-2">
                            <?php echo do_shortcode(
                                '[button variant="outline-white" link="' . esc_url(get_field('landing_page_cta_button_link')) . '"]' .
                                esc_html(get_field('landing_page_cta_button_text')) .
                                '[/button]'
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

