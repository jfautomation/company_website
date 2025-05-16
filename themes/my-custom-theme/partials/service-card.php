<style>
.card-header {
    font-size: 1.4rem !important;
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

.card-container {
    height: 3rem;
    width: 3rem;
    border-radius: 50%;
    background-color: #efeeee;

}
</style>



<div class="col-12 col-md-4 mb-5">

    <div
        class="border-light-grey px-3 py-3 d-flex flex-column align-items-start h-100 justify-content-between custom-rounded">
        <div class="d-flex flex-column align-items-start">
            <div class="d-flex gap-2 align-items-center">
                <div class="card-container d-flex align-items-center justify-content-center">
                    <i class="bi fs-3 text-gradient-blue  <?php echo esc_attr($args['icon']); ?>"></i>
                </div>

                
            </div>
            <h5 class="fw-bold card-header mt-3"><?php echo esc_html($args['service_heading']); ?></h5>


            <p class="mt-3 service-description fs-6 text-grey">Lorem ipsum is a dummy or placeholder text commonly used
                in graphic
                design, publishing, and web development. Its purpose is to permit a page layout to be designed,
                independently of the copy that will subsequently populate it
            </p>
        </div>
        <div class="d-flex align-items-center mt-4">
            <?php echo do_shortcode('[button variant="primary" link="' . esc_url($args['link_to_service_page']) . '"]Learn More[/button]'); ?>
        </div>

    </div>
</div>