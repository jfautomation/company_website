<?php
$hero_bg_image = get_field('hero_background_image');

$products = array(
    array(
        'image' => get_field('product_shot_1'),
        'name'  => get_field('product_1_text'),
        'price' => get_field('product_1_price'),
        'sale_price' => get_field('product_1_sale_price'),
        'link'  => get_field('product_1_link'),
    ),
    array(
        'image' => get_field('product_shot_2'),
        'name'  => get_field('product_2_text'),
        'price' => get_field('product_2_price'),
        'sale_price' => get_field('product_2_sale_price'),
        'link'  => get_field('product_2_link'),
    ),
    array(
        'image' => get_field('product_shot_3'),
        'name'  => get_field('product_3_text'),
        'price' => get_field('product_3_price'),
        'sale_price' => get_field('product_3_sale_price'),
        'link'  => get_field('product_3_link'),
    ),
    array(
        'image' => get_field('product_shot_4'),
        'name'  => get_field('product_4_text'),
        'price' => get_field('product_4_price'),
        'sale_price' => get_field('product_4_sale_price'),
        'link'  => get_field('product_4_link'),
    ),
);

$carousel_images = array_filter(array_column($products, 'image'));
?>

<div>
    <div class="hero d-flex flex-column justify-content-center align-items-center"
        style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center;">
        <div class="container h-100">
            <div class="row mt-3 h-100">
                <div class="col-lg-6 col-md-12">
                    <div class="content-wrapper h-100 d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <span
                                class="fs-5 text-gradient-blue fw-semibold"><?php echo esc_html(get_field('hero_subheader')); ?></span>
                            <h1 class="hero-header text-start fw-semibold w-75 mt-2">
                                Complete Automation Motor Repair<span class="text-gradient-blue"> Solutions</span>
                            </h1>
                            <p class="mt-2 pt-1 hero-paragraph">
                                <?php echo esc_html(get_field('hero_paragraph_text')); ?>
                            </p>

                            <div class="d-flex gap-2 mt-4">
                                <?php
                               
                               echo do_shortcode('[button variant="primary" link="' . esc_url(get_field('hero_button_link_1')) . '" icon="bi-arrow-right"]' . esc_html(get_field('hero_button_text_1')) . '[/button]');

                                ?>
                            </div>
                            <div class="d-flex align-items-center text-grey mt-4 small-text gap-1">
                                <span><?php echo esc_html(get_field('hero_span_1')); ?></span>|</span><span
                                    class="ms-1"> <i
                                        class="bi <?php echo esc_attr(get_field('span_icon')); ?> me-1"></i>
                                    <?php echo esc_html(get_field('hero_span_1')); ?><span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($carousel_images)) : ?>
                <div class="col-lg-6 col-md-12">
                    <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center mt-5">
                        <div id="product-images-carousel" class="carousel slide">
                            <div class="carousel-inner hero-carousel-inner">
                                <?php foreach ($products as $index => $product) : ?>
                                <?php if (!empty($product['image'])) : ?>
                                <div class="h-100 w-100 carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                    <img class="d-block w-100" src="<?php echo esc_url($product['image']); ?>"
                                        alt="Slide <?php echo esc_attr($index + 1); ?>">
                                    <div
                                        class="product-info d-flex justify-content-center align-items-center text-align-left pt-4 gap-5">
                                        <div class="d-flex flex-column justify-content-center align-items-end">
                                            <h6 class="mt-3 text-gradient-blue fw-semibold">
                                                <small><?php echo esc_html($product['name']); ?></small>

                                            </h6>



                                            <?php if (!empty($product['sale_price'])) : ?>
                                            <div class="d-flex gap-2 align-items-center">
                                                <h3 class="fw-semibold mb-0">
                                                    $<?php echo esc_html($product['sale_price']); ?></h3>
                                                <span
                                                    class="fw-semibold fs-6 text-red text-decoration-line-through mt-1">
                                                    $<?php echo esc_html($product['price']); ?>
                                                </span>
                                            </div>



                                            <?php else: ?>
                                            <h3 class="fw-semibold mb-0">$<?php echo esc_html($product['price']); ?>
                                            </h3>
                                            <?php endif; ?>
                                            </h4>
                                            <div class="d-flex align-items-center gap-2 mt-1"><i
                                                    class="cursor-pointer bi bi-cart4"></i><i
                                                    class="cursor-pointer bi bi-arrow-right-square"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>

                            <div class="mt-3">
                                <?php render_custom_carousel_indicators('product-images-carousel', $products); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>