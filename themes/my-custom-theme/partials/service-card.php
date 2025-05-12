<style>
.card-header {
    font-size: 1.35rem !important;
}

.white-card-with-icon {
    transition: box-shadow 0.3s ease;
}

.white-card-with-icon:hover {
    cursor: pointer;
}

.service-description {
    line-height: 1.5rem !important;
}

.service-card-badge {
    position: absolute;
    right: 0;
    font-size: 0.8rem;
}

.arrow {
    font-size: 0.8rem;
    font-weight: 600 !important;
}
</style>



<div class="col-12 col-md-6 col-lg-3 mb-5">

    <div class="d-flex flex-column align-items-start h-100 justify-content-between pe-4">
        <div class="d-flex flex-column align-items-start">
            <div class="position-relative">
                <span
                    class="d-flex align-items-center justify-content-center service-card-badge badge bg-dark mt-1 me-1"><?php echo esc_html($args['span']); ?></span>
                <img class="custom-rounded w-100" src='<?php echo esc_url($args['image']); ?>'></img>
            </div>

            <!-- <span class="badge dark-grey-container">Placeholder</span> -->

            <!-- <div class="icon-container d-flex justify-content-center align-items-center bg-gradient-blue">
                <i class="bi fs-5 text-light <?php echo esc_attr($args['icon']); ?>"></i>
            </div> -->
            <h4 class="fw-bold card-header mt-3"><?php echo esc_html($args['service_heading']); ?></h4>
            <p class="mt-3 service-description"><?php echo esc_html($args['paragraph']); ?>
            </p>
        </div>
        <div class="d-flex align-items-center mt-3">
            <?php echo do_shortcode('[button variant="outline-primary" link="' . esc_url($args['link_to_service_page']) . '"]Learn More[/button]'); ?>
        </div>

    </div>
</div>