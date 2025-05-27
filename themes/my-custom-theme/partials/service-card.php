<style>
.white-card-with-icon {
    transition: box-shadow 0.3s ease;
}

.card-header {
    font-size: 1.3rem;
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
    <div class="d-flex flex-column gap-3 justify-content-between h-100 border-light-grey px-3 pt-2 pb-3 custom-rounded">
        <div class="d-flex flex-column mt-1">
            <?php if (!empty($args['icon'])): ?>
            <i class="bi fs-4 <?php echo esc_attr($args['icon']); ?>"></i>
            <?php endif; ?>


            <h5 class="fw-bold card-header mt-2"><?php echo esc_html($args['service_heading']); ?></h5>
            <p class="mt-3 service-description text-grey"><?php echo esc_html($args['paragraph']); ?>
            </p>
        </div>

<?php get_template_part('partials/learn-more-link', null, [
    'link' => get_permalink(),  // or your custom link
    'label' => 'Learn more'     // optional, default is 'Learn more'
]); ?>

    </div>





</div>