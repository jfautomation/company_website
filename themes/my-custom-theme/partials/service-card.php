<style>
/* .card-header {
    font-size: 1.4rem !important;
} */

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

.service-img {
    height: 6rem;
}
</style>



<div class="col-12 col-md-3 mb-5">
    <div class="d-flex flex-column border-light-grey px-3 pt-2 pb-3 custom-rounded">
        <i class="bi bi-cart4 fs-4"></i>
        <!-- <div class="w-100"> <img class="service-img w-100" src="<?php echo esc_url($args['image']); ?>" /></div> -->
        <h5 class="fw-bold card-header mt-2"><?php echo esc_html($args['service_heading']); ?></h5>
        <small class="mt-2 service-description fs-6 text-grey">Lorem ipsum is a dummy.</small>
        <small class="text-primary fw-semibold mt-2 text-decoration-underline">Learn more -></small>
    </div>





</div>