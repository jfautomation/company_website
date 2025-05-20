<section class="">







    <div class="container text-light">
        <div class="bg-gradient-blue p-5 custom-rounded">
            <div class="row h-100 gx-5">

                <div class="col lg-7">
                    <div class="h-100 d-flex flex-column align-items-start justify-content-center">

                        <h2 class=""><?php echo esc_html(get_field('landing_page_cta_header')); ?></h2>
                        <p class="mt-1"><?php echo esc_html(get_field('landing_page_cta_paragraph')); ?></p>




                        <div class="mt-2">
                            <?php echo do_shortcode('[button variant="black" size="md" link="' . esc_url( get_field('landing_page_cta_button_link') ) . '"]' . esc_html( get_field('landing_page_cta_button_text') ) . '[/button]'); ?>
                        </div>

                    </div>

                </div>
                <div class="col">
                    <div class="d-flex flex-column">
                        <div class="d-flex gap-2">
                            <div class=""> <img src="<?php echo esc_url(get_field('landing_page_cta_image')); ?>"
                                    alt="Banner Image" class="img-fluid custom-rounded"></div>
                            <div class="rounded"> <img src="<?php echo esc_url(get_field('landing_page_cta_image')); ?>"
                                    alt="Banner Image" class="img-fluid custom-rounded"></div>

                        </div>
                        <div class="d-flex w-100 justify-content-between mt-3">
                            <small>Some text here to show what we do</small>
                            <span
                                class="badge rounded-pill d-flex align-items-center bg-light text-dark">something</span>
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </div>



</section>