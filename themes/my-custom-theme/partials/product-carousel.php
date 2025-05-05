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
    flex: 0 0 65%;
    max-width: 100%;
    box-sizing: border-box;
}

.custom-carousel-card-inner-wrapper {
    background-color: #fff;
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
</style>

<?php 
$products = array(
    array('name' => get_field('product_1_name'), 'price' => get_field('product_1_price'), 'sale_price' => get_field('product_1_sale_price'), 'description' => get_field('product_1_description'), 'link_to_item' => get_field('product_1_link_to_item'), 'image' => get_field('product_1_image'), ),
    array('name' => get_field('product_2_name'), 'price' => get_field('product_2_price'), 'sale_price' => get_field('product_2_sale_price'), 'description' => get_field('product_2_description'), 'link_to_item' => get_field('product_2_link_to_item'), 'image' => get_field('product_2_image'), ),
    array('name' => get_field('product_3_name'), 'price' => get_field('product_3_price'), 'sale_price' => get_field('product_3_sale_price'), 'description' => get_field('product_3_description'), 'link_to_item' => get_field('product_3_link_to_item'), 'image' => get_field('product_3_image'), ),
    array('name' => get_field('product_4_name'), 'price' => get_field('product_4_price'), 'sale_price' => get_field('product_4_sale_price'), 'description' => get_field('product_4_description'), 'link_to_item' => get_field('product_4_link_to_item'), 'image' => get_field('product_4_image'), ),
   
);

$products = array_filter($products, function($product) {
    return !empty($product['name']);
});
  
?>



<div class="custom-carousel-container position-relative">
    <div class="custom-carousel-track" id="customCarouselTrack">
        <?php foreach ($products as $product): ?>
        <div class="custom-carousel-card me-3 d-flex flex-column text-dark text-center">
            <div class="custom-carousel-card-inner-wrapper custom-rounded flex-grow-1">
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
                                    class="badge bg-red <?php echo !empty($sale_price) ? 'bg-red text-white' : 'invisible'; ?>">
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
                                    <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('link_to_item') ) . '"]Buy[/button]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="custom-carousel-indicators mt-5 d-flex align-items-center justify-content-center gap-3">
    <i id="carouselPrev" class="carousel-arrow indicator-chevron fas fa-chevron-left me-2">
    </i>
    <?php foreach (array_keys($products) as $index): ?>
    <div class="custom-slider-carousel-dot <?php echo $index === 0 ? 'active' : ''; ?>"
        data-slide="<?php echo $index; ?>"></div>
    <?php endforeach; ?>
    <i id="carouselNext" class="carousel-arrow indicator-chevron fas fa-chevron-right ms-2">
    </i>
</div>