<style>
.card-header {
    font-size: 1.45rem !important;
}

.white-card-with-icon {
    transition: box-shadow 0.3s ease;
}

.white-card-with-icon:hover {
    cursor: pointer;
}

.service-description {
    line-height: 1.55rem !important;
}



.arrow {
    font-size: 0.8rem;
    font-weight: 600 !important;
}
</style>



<div class="col-12 col-md-6 col-lg-3 mb-4">

    <div
        class="box-shadow custom-rounded card-gradient white-card-with-icon d-flex flex-column align-items-start h-100 pt-2 px-4 pb-4 justify-content-between">
        <div class="d-flex flex-column">
            <i class="bi fs-2 mt-2 <?php echo esc_attr($args['icon']); ?>"></i>
            <h4 class="fw-bold card-header mt-3"><?php echo esc_html($args['service_heading']); ?></h4>
            <p class="mt-3 service-description"><?php echo esc_html($args['paragraph']); ?>
            </p>
        </div>
        <div class="d-flex align-items-center mt-3">
            <?php echo do_shortcode('[button variant="outline-primary" link="' . esc_url($args['link_to_service_page']) . '"]Learn More[/button]'); ?>
        </div>
    </div>
</div>