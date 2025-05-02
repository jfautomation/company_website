<?php
$hero_bg_image = get_field('hero_background_image'); // make sure this field exists in ACF
?>
<?php
$images = [
    get_field('product_shot_1'),
    get_field('product_shot_2'),
    get_field('product_shot_3'),
    get_field('product_shot_4'),

];
?>

<div>
    <div class="hero d-flex flex-column justify-content-center align-items-center"
        style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-12">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <h1 class="text-start text-gradient-blue fw-semibold w-75"><?php echo esc_html( get_field('hero_header_text') ); ?>
                            </h1>
                            <p class="mt-2 fs-5">
                                <?php echo esc_html( get_field('hero_paragraph_text') ); ?>
                            </p>
                            <div class="d-flex gap-2 mt-3">
                                <?php echo do_shortcode('[button variant="outline-primary" link="' . esc_url( get_field('hero_button_link_2') ) . '"]' . esc_html( get_field('hero_button_text_2') ) . '[/button]'); ?>
                                <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('hero_button_link_1') ) . '"]' . esc_html( get_field('hero_button_text_1') ) . '[/button]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

// Fetch the product images
$carousel_images = array_filter(array(
  get_field('product_shot_1'),
  get_field('product_shot_2'),
  get_field('product_shot_3'),
  get_field('product_shot_4'),
));

// Check if there are images
if (!empty($carousel_images)) :
?>
                <div class="col-lg-6 col-md-12">
                    <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">

                        <div id="product-images-carousel" class="carousel w-75 slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <?php foreach ($carousel_images as $index => $image) : ?>
                                <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                    <img class="d-block w-100" src="<?php echo esc_url($image); ?>"
                                        alt="Slide <?php echo $index + 1; ?>">
                                </div>

                                <?php endforeach; ?>
                            </div>

                            <!-- Carousel Controls -->
                            <div class="mt-5 pt-2">
                                <?php render_custom_carousel_indicators('product-images-carousel', $carousel_images); ?>
                            </div>




                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>