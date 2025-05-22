<?php
$hero_bg_image = get_field('hero_background_image');

$products = array(
    array(
        'image' => get_field('product_shot_1'),
        'name'  => get_field('product_1_text'),
        'price' => get_field('product_1_price'),
        'link'  => get_field('product_1_link'),
    ),
    array(
        'image' => get_field('product_shot_2'),
        'name'  => get_field('product_2_text'),
        'price' => get_field('product_2_price'),
        'link'  => get_field('product_2_link'),
    ),
    array(
        'image' => get_field('product_shot_3'),
        'name'  => get_field('product_3_text'),
        'price' => get_field('product_3_price'),
        'link'  => get_field('product_3_link'),
    ),
    array(
        'image' => get_field('product_shot_4'),
        'name'  => get_field('product_4_text'),
        'price' => get_field('product_4_price'),
        'link'  => get_field('product_4_link'),
    ),
);

$carousel_images = array_filter(array_column($products, 'image'));
?>

<div>
    <div class="hero d-flex flex-column justify-content-center align-items-center"
        style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <h1 class="hero-header text-start text-gradient-blue fw-semibold w-75 mt-1">
                                <?php echo esc_html(get_field('hero_header_text')); ?>
                            </h1>
                            <p class="mt-3 hero-paragraph">
                                <?php echo esc_html(get_field('hero_paragraph_text')); ?>
                            </p>
                            <div class="d-flex gap-2 mt-4">
                                <?php
                                echo do_shortcode('[button variant="outline-primary" link="' . esc_url(get_field('hero_button_link_2')) . '"]' . esc_html(get_field('hero_button_text_2')) . '[/button]');
                                echo do_shortcode('[button variant="primary" link="' . esc_url(get_field('hero_button_link_1')) . '"]' . esc_html(get_field('hero_button_text_1')) . '[/button]');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($carousel_images)) : ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center mt-5">
                            <div id="product-images-carousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <?php foreach ($products as $index => $product) : ?>
                                        <?php if (!empty($product['image'])) : ?>
                                            <div class="h-100 w-100 carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                                <img class="d-block w-100" src="<?php echo esc_url($product['image']); ?>"
                                                    alt="Slide <?php echo esc_attr($index + 1); ?>">
                                                <div class="product-info d-flex justify-content-center align-items-center text-align-left pt-4 gap-5">
                                                    <div class="d-flex flex-column justify-content-center align-items-end">
                                                        <h6 class="mt-3 fw-semibold bg-light py-1 ps-3 pe-1 rounded-pill d-flex gap-2 align-items-center">
                                                            <small><?php echo esc_html($product['name']); ?></small>
                                                            <div class="text-light fs-4 arrow-circle-link d-flex justify-content-center align-items-center bg-gradient-blue">
                                                                <i class="bi bi-arrow-right-short"></i>
                                                            </div>
                                                        </h6>
                                                        <h4 class="fw-semibold">$<?php echo esc_html($product['price']); ?></h4>
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
