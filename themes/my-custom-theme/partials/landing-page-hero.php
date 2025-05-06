<?php
$hero_bg_image = get_field('hero_background_image'); // make sure this field exists in ACF
$siemens_authorized_distributer = get_field('siemens_authorized_distributer'); // make sure this field exists in ACF
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
                            <h5 class="fw-semibold">JF Automation</h5>
                            <!-- <div>
                                <img class="siemens-authorized-dealer-img" src="<?php echo esc_url($siemens_authorized_distributer); ?>" alt="Siemens Authorized Distributor"/>
                            </div> -->




                            <h1 class="hero-header text-start text-gradient-blue fw-semibold w-75 mt-1">
                                <?php echo esc_html( get_field('hero_header_text') ); ?>
                            </h1>
                            <p class="mt-3 hero-paragraph">
                                <?php echo esc_html( get_field('hero_paragraph_text') ); ?>
                            </p>
                            <div class="d-flex gap-2 mt-4">
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
                    <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center mt-5">

                        <div id="product-images-carousel" class="carousel w-75 slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <?php foreach ($carousel_images as $index => $image) : ?>
                                <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                                    <img class="d-block w-100" src="<?php echo esc_url($image); ?>"
                                        alt="Slide <?php echo $index + 1; ?>">
                                    <div
                                        class="d-flex justify-content-center align-items-center text-align-left pt-4 gap-5">
                                        <div class="d-flex flex-column justify-content-center align-items-end">
                                            <h6
                                                class="mt-3 fw-semibold bg-light py-1 ps-3 pe-2 rounded-pill d-flex gap-2 align-items-center">
                                                <small class="">Seiemens PLC G68DS</small>
                                                <div
                                                    class="text-light fs-4 arrow-circle-link d-flex justify-content-center align-items-center bg-gradient-blue">
                                                    <i class="bi bi-arrow-right-short"></i>
                                                </div>
                                            </h6>
                                            <h4 class="fw-semibold">$653.00</h4>


                                        </div>

                                        <!-- <div class="d-flex">
                                            <h5 class="mt-1 fw-semibold">$653.00</h5>
                                        </div> -->

                                    </div>
                                    <!-- <div
                                            class="text-light fs-3 arrow-circle-link d-flex justify-content-center align-items-center bg-gradient-blue">
                                            <i class="bi bi-arrow-right-short"></i></div>


                                    </div> -->
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