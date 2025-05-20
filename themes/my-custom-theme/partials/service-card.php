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

<!-- 'icon' => $service['icon'],
        'service_heading' => $service['header'],
        'link_to_service_page' => $service['link'],
        'paragraph' => $service['paragraph'],
        'span' => $service['span'],
        'image' => $service['image'],
    )); ?> -->





<div class="col-12 col-md-3 mb-5">
    <div class="d-flex flex-column gap-3 justify-content-between h-100 border-light-grey px-3 pt-2 pb-3 custom-rounded">
        <div class="d-flex flex-column mt-1">
            <?php if (!empty($args['icon'])): ?>
            <i class="bi fs-4 <?php echo esc_attr($args['icon']); ?>"></i>
            <?php endif; ?>


            <h5 class="fw-bold card-header mt-2"><?php echo esc_html($args['service_heading']); ?></h5>
            <small class="mt-3 service-description fs-6 text-grey"><?php echo esc_html($args['paragraph']); ?></small>
        </div>

        <?php if (!empty($args['link'])): ?>
        <a href="<?php echo esc_url($args['link']); ?>"
            class="text-blue fw-semibold text-decoration-underline d-flex align-items-center gap-1 small">
            Learn more
            <i class="bi bi-arrow-right"></i>
        </a>
        <?php endif; ?>

    </div>





</div>