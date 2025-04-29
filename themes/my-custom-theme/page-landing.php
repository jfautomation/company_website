<?php
/**
 * Template Name: Landing Page
 */
?>

<?php get_template_part( 'partials/header' ); ?>
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

<div class="landing-page-content">
    <?php
    // Use WordPress loop to pull content from the CMS
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // Display the content of the page
        endwhile;
    endif;
    ?>
    <div>
        <div class="hero d-flex flex-column justify-content-center align-items-center"
            style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-6 col-md-12">
                        <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex flex-column align-items-start">
                                <h2 class="text-gradient-blue"><?php echo esc_html( get_field('hero_header_text') ); ?>
                                </h2>
                                <p class="text-grey mt-2">
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
        <section class="container">
            <?php
    $args = array(
        'h5_text' => 'Services',
        'h2_text' => 'What we do'
    );

    get_template_part('partials/section-header', null, $args);
    ?>

            <?php

            // Service data organized properly
$services = array(
  array(
      'icon'   => get_field('service_icon_1'),
      'header' => get_field('service_header_1'),
      'link'   => get_field('service_link_1'),
  ),
  array(
      'icon'   => get_field('service_icon_2'),
      'header' => get_field('service_header_2'),
      'link'   => get_field('service_link_2'),
  ),
  array(
      'icon'   => get_field('service_icon_3'),
      'header' => get_field('service_header_3'),
      'link'   => get_field('service_link_3'),
  ),
  array(
      'icon'   => get_field('service_icon_4'),
      'header' => get_field('service_header_4'),
      'link'   => get_field('service_link_4'),
  ),
  array(
    'icon'   => get_field('service_icon_5'),
    'header' => get_field('service_header_5'),
    'link'   => get_field('service_link_5'),
),
array(
  'icon'   => get_field('service_icon_6'),
  'header' => get_field('service_header_6'),
  'link'   => get_field('service_link_6'),
),
);

// Filter out empty services
$services = array_filter($services, function($service) {
  return !empty($service['header']); // Only keep services with a header
});

?>
            <div class="row mt-4">
                <?php foreach ($services as $service) : ?>
                <?php get_template_part('partials/service-card', null, array(
        'icon' => $service['icon'],
        'service_heading' => $service['header'],
        'link_to_service_page' => $service['link'],
    )); ?>
                <?php endforeach; ?>
            </div>
        </section>


        <?php
?>
        <section class="bg-gradient-blue">
            <!-- 
            <h1><?php echo esc_html(get_field('landing_page_cta_subheading')); ?></h1> -->

            <div class="container text-light">
                <div class="row h-100">
                    <div class="col-lg-6 col-md-12">
                        <div class="h-100 d-flex flex-column justify-content-center align-items-center">

                            <img src="<?php echo esc_url(get_field('landing_page_cta_image')); ?>" alt="Banner Image"
                                class="img-fluid w-100">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="h-100 d-flex flex-column align-items-start justify-content-center">
                            <h5 class="fw-semibold"><?php echo esc_html(get_field('landing_page_cta_subheading')); ?>
                            </h5>
                            <h2 class="mt-2"><?php echo esc_html(get_field('landing_page_cta_header')); ?></h2>
                            <p class="mt-3">
                                <?php echo esc_html(get_field('landing_page_cta_paragraph')); ?>
                            </p>
                            <div class="mt-3">
                                <?php echo do_shortcode('[button variant="outline-white" link="' . esc_url( get_field('landing_page_cta_button_link') ) . '"]' . esc_html( get_field('landing_page_cta_button_text') ) . '[/button]'); ?>
                            </div>
                        </div>
                    </div>
                </div>


        </section>
        <section>
            <div class="container">
                <?php
    $args = array(
        'h5_text' => 'Brands',
        'h2_text' => 'Brands we repair'
    );

    get_template_part('partials/section-header', null, $args);
    ?>

                <?php 
$brands = array(
    array('logo' => get_field('brand_1_logo'), 'name' => get_field('brand_1_name')),
    array('logo' => get_field('brand_2_logo'), 'name' => get_field('brand_2_name')),
    array('logo' => get_field('brand_3_logo'), 'name' => get_field('brand_3_name')),
    array('logo' => get_field('brand_4_logo'), 'name' => get_field('brand_4_name')),
    array('logo' => get_field('brand_5_logo'), 'name' => get_field('brand_5_name')),
    array('logo' => get_field('brand_6_logo'), 'name' => get_field('brand_6_name')),
);

// Filter out any empty brand names or logos
$brands = array_filter($brands, function($brand) {
    return !empty($brand['name']) && !empty($brand['logo']);
});
  
?>
                <div class="row mt-5">
                    <?php foreach ($brands as $brand): ?>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div
                            class="brand-card box-shadow h-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="brand-card-img-wrapper p-3">
                                <img src="<?php echo esc_url($brand['logo']); ?>"
                                    alt="<?php echo esc_attr($brand['name']); ?>" class="img-fluid h-100 w-100" />
                            </div>
                            <div class="py-3"><small class="brand-text fw-semibold">
                                    <?php echo esc_html($brand['name']); ?>
                                </small></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>


            </div>

        </section>

        <section class="light-grey-container">

            <div class="container">
                <?php
    $args = array(
        'h5_text' => 'Shop',
        'h2_text' => 'visit our online shop'
    );

    get_template_part('partials/section-header', null, $args);
    ?>

                <div class="d-flex justify-content-end">

                    <?php render_custom_carousel_indicators('product-images-carousel', $carousel_images); ?>

                </div>
                <?php 
$products = array(
    array('name' => get_field('product_1_name'), 'price' => get_field('product_1_price'), 'sale_price' => get_field('product_1_sale_price'), 'sale_price' => get_field('product_1_sale_price'), 'description' => get_field('product_1_description'), 'link_to_item' => get_field('product_1_link_to_item'), 'image' => get_field('product_1_image'), ),
    array('name' => get_field('product_2_name'), 'price' => get_field('product_2_price'), 'sale_price' => get_field('product_2_sale_price'), 'sale_price' => get_field('product_2_sale_price'), 'description' => get_field('product_2_description'), 'link_to_item' => get_field('product_2_link_to_item'), 'image' => get_field('product_2_image'), ),
    array('name' => get_field('product_3_name'), 'price' => get_field('product_3_price'), 'sale_price' => get_field('product_3_sale_price'), 'sale_price' => get_field('product_3_sale_price'), 'description' => get_field('product_3_description'), 'link_to_item' => get_field('product_3_link_to_item'), 'image' => get_field('product_3_image'), ),
    array('name' => get_field('product_4_name'), 'price' => get_field('product_4_price'), 'sale_price' => get_field('product_4_sale_price'), 'sale_price' => get_field('product_4_sale_price'), 'description' => get_field('product_4_description'), 'link_to_item' => get_field('product_4_link_to_item'), 'image' => get_field('product_4_image'), ),
   
);

// Filter out any empty brand names or logos
$products = array_filter($products, function($product) {
    return !empty($product['name']);
});
  
?>

                <!-- <img src="<?php echo esc_url($product['image']); ?>"
   <h5><?php echo esc_html($product['name']); ?></h5>
                            <p>Price: <?php echo esc_html($product['price']); ?></p>
                            <p>Sale: <?php echo esc_html($product['sale_price']); ?></p> -->

                <div class="custom-carousel-container position-relative">
                    <div class="custom-carousel-track" id="customCarouselTrack">
                        <?php foreach ($products as $product): ?>
                        <div class="custom-carousel-card d-flex flex-column text-dark text-center">
                            <div class="custom-carousel-card-inner-wrapper flex-grow-1">
                                <div class="row h-100">
                                    <div class="col-4">
                                        <div class="h-100">
                                        <img src="<?php echo esc_url($product['image']); ?>" />
                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="bg-danger p-3 h-100">col 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>



                <div class="custom-carousel-indicators mt-5">
                    <?php foreach (array_keys($products) as $index): ?>
                    <div class="custom-slider-carousel-dot <?php echo $index === 0 ? 'active' : ''; ?>"
                        data-slide="<?php echo $index; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php foreach ($products as $product): ?>
            <div class="product-card mb-4">

                <!-- <span><strong>Name:</strong> <?php echo esc_html($product['name']); ?></span><br>
                    <span><strong>Price:</strong> <?php echo esc_html($product['price']); ?></span><br>
                    <span><strong>Sale Price:</strong> <?php echo esc_html($product['sale_price']); ?></span><br>
                    <span><strong>Description:</strong> <?php echo esc_html($product['description']); ?></span><br>
                    <span><strong>Link:</strong> <a href="<?php echo esc_url($product['link_to_item']); ?>">View
                            Product</a></span><br>
                    <?php if (!empty($product['image'])): ?>
                    <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['name']); ?>"
                        style="max-width: 200px; margin-top: 10px;" />
                    <?php endif; ?> -->
            </div>
            <?php endforeach; ?>


    </div>

    </section>

</div>

<?php get_template_part( 'partials/footer' ); ?>