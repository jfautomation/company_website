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



i {
    background: linear-gradient(to right, var(--color-red), var(--color-gradient-dark-blue));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    /* margin-top: -12px; */

}
</style>

<!-- <i class="bi bi-tools"></i>
<i class="bi bi-motherboard-fill"></i>
<i class="bi bi-cpu-fill"></i>
<i class="bi bi-cart-check-fill"></i> -->

<div class="col-12 col-md-6 col-lg-3 mb-4">

    <div class="white-card-with-icon d-flex flex-column align-items-start p-4 h-100 justify-content-between">
        <div class="d-flex flex-column">
            <img class="w-100 fluid card-image" src="<?php echo esc_url(get_field('product_1_image')); ?>" alt="">

         
            <!-- <i class="bi fs-4 <?php echo esc_attr($args['icon']); ?>"></i> -->
                <h5 class="fw-bold mt-3"><?php echo esc_html($args['service_heading']); ?></h5>
               
         

            <p class="mt-1 service-description"><?php echo esc_html($args['paragraph']); ?>
            </p>
        </div>
        <div class="mt-3">


            <?php echo do_shortcode('[button variant="primary" link="' . esc_url($args['link_to_service_page']) . '"]Learn More[/button]'); ?>
        </div>





    </div>
</div>