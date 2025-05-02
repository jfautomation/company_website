<section class="bg-gradient-blue">

    <div class="container text-light">
        <div class="row h-100">
            <div class="col-lg-6 col-md-12">
                <div class="h-100 d-flex flex-column justify-content-center align-items-center">

                    <img src="<?php echo esc_url(get_field('landing_page_cta_image')); ?>" alt="Banner Image"
                        class="img-fluid w-100">

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="h-100 d-flex flex-column align-items-start justify-content-center">
                    <h5 class="fw-semibold"><?php echo esc_html(get_field('landing_page_cta_subheading')); ?>
                    </h5>
                    <h2 class="mt-2"><?php echo esc_html(get_field('landing_page_cta_header')); ?></h2>
                    <p class="mt-3">
                        <?php echo esc_html(get_field('landing_page_cta_paragraph')); ?>
                    </p>
                    <div class="mt-3">
                        <?php echo do_shortcode('[button variant="btn-primary-red" link="' . esc_url( get_field('landing_page_cta_button_link') ) . '"]' . esc_html( get_field('landing_page_cta_button_text') ) . '[/button]'); ?>
                    </div>
                </div>
            </div>
        </div>


</section>