<style>
.custom-carousel-container {
    overflow: hidden;
    padding: 2rem 0;
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

.custom-carousel-indicators {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
}

.carousel-dot {
    width: 12px;
    height: 12px;
    background: #fff;
    border-radius: 50%;
    border: 2px solid #000;
    cursor: pointer;
    opacity: 0.5;
}

.carousel-dot.active {
    opacity: 1;
}

.arrow-btn {
    height: 1.75rem;
    width: 2rem;
    border-radius: 4.6px;
}
</style>

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
<div class="custom-carousel-container position-relative">
    <div class="custom-carousel-track" id="customCarouselTrack">

        <?php foreach ($products as $index => $product): ?>
        <?php if ($index % 2 === 0): ?>
        <!-- EVEN INDEX CARD TEMPLATE (e.g., white bg, one layout) -->
        <!-- /// change class name of custom carousel card, add 'even' -->
        <!-- /// change this styling to odd  -->
        <div class="custom-carousel-card custom-rounded p-3 me-3 d-flex flex-column text-dark text-center">
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
                                    <div class="d-flex gap-2 align-items-center">


                                        <h4 class="mb-0 fw-semibold">$<?php echo esc_html($product['price']); ?></h4>


                                        <?php
$price = floatval($product['price']);
$sale_price = $product['sale_price'];
?>

                                        <?php if (!empty($sale_price)): ?>
                                        <span class="fw-semibold fs-6 text-red text-decoration-line-through">
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
        <div class="custom-carousel-card custom-rounded p-3 me-3 d-flex flex-column text-dark text-center">
            <div class="custom-carousel-card-inner-wrapper custom-rounded">
                <div class="row h-100">
                    <div class="col card-col black-bg text-light p-3">
                        <div class="w-100 d-flex flex-column justify-content-between gap-3">
                            <div>
                                <div class="mt-2">
                                    <small class="text-light"><?php echo esc_html($product['span']); ?></small>
                                </div>
                                <h4 class="text-light fw-semibold mt-2"><?php echo esc_html($product['name']); ?></h4>

                                <div class="product-card-transparent-image-wrapper">
                                    <img class="product-card-transparent-image"
                                        src="<?php echo esc_url($product['image']); ?>" />
                                </div>

                            </div>
                            <div class="btn-container d-flex justify-content-center align-items-center w-100 mt-1 pb-3">
                                <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('link_to_item') ) . '"]$7564[/button]'); ?>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>

        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>





<!-- <div class="custom-carousel-container position-relative">
    <div class="custom-carousel-track" id="customCarouselTrack">
        <?php foreach ($products as $product): ?>
        <div class="custom-carousel-card custom-rounded p-2 me-3 d-flex flex-column text-dark text-center">
            <div class="custom-carousel-card-inner-wrapper custom-rounded">
                <div class="row h-100">
                    <div class="col-4">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <img class="w-100" src="<?php echo esc_url($product['image']); ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column pt-2 px-3 pb-4 h-100">
                            <div class="d-flex justify-content-end h-100">
                                <?php
$price = floatval($product['price']);
$sale_price = floatval($product['sale_price']);
$discount = 0;

if (!empty($sale_price) && $price > 0) {
    $raw_discount = (($price - $sale_price) / $price) * 100;
    $discount = ceil($raw_discount / 25) * 25; 
}
?>

                                <span
                                    class="badge rounded-pill bg-red px-2 <?php echo !empty($sale_price) ? 'bg-red text-white' : 'invisible'; ?>">
                                    <?php echo !empty($sale_price) ? $discount . '%' : ''; ?>

                                </span>
                            </div>
                            <div class="d-flex flex-column align-items-start">
                                <h5 class="fw-semibold"><?php echo esc_html($product['name']); ?></h5>
                                <h3 class="fw-semibold">$<?php echo esc_html($product['price']); ?></h3>
                                <hr class="w-100" />
                                <p class="text-grey text-start">
                                    <?php echo esc_html($product['description']); ?></p>
                                <div class="mt-3">
                                    <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('link_to_item') ) . '"]Visit[/button]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div> -->

<div class="custom-carousel-indicators mt-3 d-flex align-items-center justify-content-center gap-3 pb-5">
    <i id="carouselPrev" class="carousel-arrow indicator-chevron fas fa-chevron-left me-2">
    </i>
    <?php foreach (array_keys($products) as $index): ?>
    <div class="custom-slider-carousel-dot <?php echo $index === 0 ? 'active' : ''; ?>"
        data-slide="<?php echo $index; ?>"></div>
    <?php endforeach; ?>
    <i id="carouselNext" class="carousel-arrow indicator-chevron fas fa-chevron-right ms-2">
    </i>
</div>