<style>
.white-card-with-icon {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    /* Stronger shadow */
    transition: box-shadow 0.3s ease;
}

.white-card-with-icon:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    /* Even stronger shadow on hover */
}

img {
    width: 4rem;
}

a {
    font-size: 0.9rem; 
}
</style>

<div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="white-card-with-icon d-flex flex-column align-items-start p-4">
        <img src="<?php echo esc_url($args['icon']); ?>" alt="" />
        <h5 class="text-gradient-blue mt-3 fw-semibold"><?php echo esc_html($args['service_heading']); ?></h5>
        <a class="text-dark" href="<?php echo esc_url($args['link_to_service_page']); ?>">Learn More</a>
    </div>
</div>