<style>
.custom-carousel-container {
    overflow: hidden;
    padding: 1rem 0;
}

.custom-carousel-track {
    display: flex;
    transition: transform 0.6s ease;
}

.custom-carousel-card {
    flex: 0 0 30%;
    max-width: 100%;
    box-sizing: border-box;
    border-radius: 10px;
}

.custom-carousel-card:not(:first-child) {
  margin-inline-start: 0.8rem;
}

.custom-carousel-card-inner-wrapper {
    height: 100% !important;
}

.card-col {
    border-radius: 10px;
}

.product-card-image-container {
    position: relative;
    width: 100%;
    padding-top: 60%;
    border-radius: 12px;
    overflow: hidden;
}

.product-card-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: inherit;
}

.btn-container {
    width: fit-content;
}

.product-card-transparent-image {
    height: 10rem;
}

.product-card-description {
    font-size: 0.85rem !important;
}


.arrow-btn {
    height: 1.75rem;
    width: 2rem;
    border-radius: 4.6px;
}
</style>

<?php
$carousel_id = 'carousel_' . uniqid();

ob_start();
?>

<?php 
$products = array(
    array('name' => get_field('product_1_name'), 'price' => get_field('product_1_price'), 'sale_price' => get_field('product_1_sale_price'), 'description' => get_field('product_1_description'), 'link_to_item' => get_field('product_1_link_to_item'), 'image' => get_field('product_1_image'), 'span' => get_field('product_1_span')),
    array('name' => get_field('product_2_name'), 'price' => get_field('product_2_price'), 'sale_price' => get_field('product_2_sale_price'), 'description' => get_field('product_2_description'), 'link_to_item' => get_field('product_2_link_to_item'), 'image' => get_field('product_2_image'), 'span' => get_field('product_2_span')),
    array('name' => get_field('product_3_name'), 'price' => get_field('product_3_price'), 'sale_price' => get_field('product_3_sale_price'), 'description' => get_field('product_3_description'), 'link_to_item' => get_field('product_3_link_to_item'), 'image' => get_field('product_3_image'), 'span' => get_field('product_2_span')),
    array('name' => get_field('product_4_name'), 'price' => get_field('product_4_price'), 'sale_price' => get_field('product_4_sale_price'), 'description' => get_field('product_4_description'), 'link_to_item' => get_field('product_4_link_to_item'), 'image' => get_field('product_4_image'), 'span' => get_field('product_4_span')),
    array('name' => get_field('product_5_name'), 'price' => get_field('product_5_price'), 'sale_price' => get_field('product_5_sale_price'), 'description' => get_field('product_5_description'), 'link_to_item' => get_field('product_5_link_to_item'), 'image' => get_field('product_5_image'), 'span' => get_field('product_5_span')),
    array('name' => get_field('product_6_name'), 'price' => get_field('product_6_price'), 'sale_price' => get_field('product_6_sale_price'), 'description' => get_field('product_6_description'), 'link_to_item' => get_field('product_6_link_to_item'), 'image' => get_field('product_6_image'), 'span' => get_field('product_6_span')),
);

$products = array_filter($products, function($product) {
    return !empty($product['name']);
});
  
?>


        <?php foreach ($products as $index => $product): ?>
        <?php if ($index % 2 === 0): ?>

        <div class="custom-carousel-card custom-rounded p-3 d-flex flex-column text-dark text-center">
            <div class="custom-carousel-card-inner-wrapper custom-rounded">
                <div class="row h-100">
                    <div class="col p-2 card-col bg-light">
                        <div class="w-100 h-100 d-flex flex-column">
                            <div class="product-card-image-container">
                                <img class="product-card-image" src="<?php echo esc_url($product['image']); ?>" />
                            </div>
                            <div class="d-flex text-start flex-column align-items-start justify-content-start">
                                <h5 class="fw-semibold mt-3"><?php echo esc_html($product['name']); ?></h5>
                                <p class="product-card-description text-grey">
                                    <?php echo esc_html($product['description']); ?></p>
                                <div class="w-100 d-flex justify-content-between">
                                    <div class="d-flex gap-2 align-items-center pb-2">
                                        <h4 class="mb-0 fw-semibold">$<?php echo esc_html($product['price']); ?></h4>
                                        <?php
$price = floatval($product['price']);
$sale_price = $product['sale_price'];
?>

                                        <?php if (!empty($sale_price)): ?>
                                        <span class="fw-semibold fs-6 text-red text-decoration-line-through mt-1">
                                            $<?php echo esc_html($sale_price); ?>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <span
                                        class="d-flex justify-content-center align-items-center arrow-btn bg-gradient-blue text-light"><i
                                            class="bi bi-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="custom-carousel-card custom-rounded p-3 d-flex flex-column text-dark text-center">
            <div class="custom-carousel-card-inner-wrapper custom-rounded">
                <div class="row h-100">
                    <div class="col card-col black-bg text-light p-3">
                        <div class="w-100 d-flex flex-column justify-content-between h-100 gap-3">
                            <div>
                                <div class="mt-2">
                                    <small class="text-light"><?php echo esc_html($product['span']); ?></small>
                                </div>
                                <h5 class="text-light fw-bold mt-2"><?php echo esc_html($product['name']); ?></h5>
                                <div class="product-card-transparent-image-wrapper mt-2">
                                    <img class="product-card-transparent-image"
                                        src="<?php echo esc_url($product['image']); ?>" />
                                </div>
                            </div>
                            <div class="btn-container d-flex justify-content-center align-items-center w-100 mt-1 pb-2">
                                <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('link_to_item') ) . '"]$7564[/button]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>
        <?php endforeach; ?>

<?php
$carousel_content = ob_get_clean();
include get_template_directory() . '/partials/carousel-wrapper.php';
?>