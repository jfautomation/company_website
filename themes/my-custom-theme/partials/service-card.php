<style>
.white-card-with-icon {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    border-radius: 4.6px;
    background: linear-gradient(135deg, #fafafa, #f0f0f0);

    /* Stronger shadow */
    transition: box-shadow 0.3s ease;
}

.white-card-with-icon:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
    cursor: pointer;

    /* Even stronger shadow on hover */
}

.service-description {
    line-height: 1.65rem !important;
    font-size: 0.95rem !important;
}



.arrow {
    font-size: 0.8rem;
    font-weight: 600 !important;
}

.card-image {
    height: 10rem;
}
</style>

<!-- <i class="bi bi-tools"></i>
<i class="bi bi-motherboard-fill"></i>
<i class="bi bi-cpu-fill"></i>
<i class="bi bi-cart-check-fill"></i> -->

<div class="col-12 col-md-6 col-lg-3 mb-4">

    <div class="white-card-with-icon d-flex flex-column align-items-start h-100 p-4 justify-content-between">
        <div class="d-flex flex-column">
            <!-- <img class="w-100 fluid card-image" src="<?php echo esc_url(get_field('product_1_image')); ?>" alt=""> -->


            <i class="bi fs-3 <?php echo esc_attr($args['icon']); ?>"></i>
            <h4 class="fw-bold card-header mt-3"><?php echo esc_html($args['service_heading']); ?></h4>





            <p class="mt-3 service-description"><?php echo esc_html($args['paragraph']); ?>
            </p>
        </div>
        <div class="d-flex align-items-center mt-3">
            <!-- <small class="text-decoration-underline text-gradient-blue fw-semibold">Learn more</small> -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 16 16">
                <defs>
                    <linearGradient id="blueGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#3a7bd5" />
                        <stop offset="100%" stop-color="#1600a0" />
                    </linearGradient>
                </defs>
                <path fill="url(#blueGradient)" fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg> -->



            <?php echo do_shortcode('[button variant="outline-primary" link="' . esc_url($args['link_to_service_page']) . '"]Learn More[/button]'); ?>
        </div>





    </div>
</div>