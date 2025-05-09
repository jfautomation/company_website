<section>
    <div class="container">
        <div class="row">
            <!-- <div class="col"> -->
            <?php
    $args = array(
        'h5_text' => 'Brands',
        'h2_text' => 'Brands we repair'
    );

    get_template_part('partials/section-header', null, $args);
    ?>

            <!-- <div class="mt-3 paragraph-container">
                <?php
get_template_part('partials/paragraph', null, array(
    'paragraph_text' => get_field('services_paragraph')
));
?>
            </div>

            <div class="mt-4">
                <?php echo do_shortcode('[button variant="outline-primary" link="#"]Learn More[/button]'); ?>
            </div> -->
         


            <?php 
$brands = array(
    array('logo' => get_field('brand_1_logo'), 'name' => get_field('brand_1_name')),
    array('logo' => get_field('brand_2_logo'), 'name' => get_field('brand_2_name')),
    array('logo' => get_field('brand_3_logo'), 'name' => get_field('brand_3_name')),
    array('logo' => get_field('brand_4_logo'), 'name' => get_field('brand_4_name')),
    array('logo' => get_field('brand_5_logo'), 'name' => get_field('brand_5_name')),
    array('logo' => get_field('brand_6_logo'), 'name' => get_field('brand_6_name')),
    array('logo' => get_field('brand_7_logo'), 'name' => get_field('brand_7_name')),
    array('logo' => get_field('brand_8_logo'), 'name' => get_field('brand_8_name')),
);

// Filter out any empty brand names or logos
$brands = array_filter($brands, function($brand) {
    return !empty($brand['name']) && !empty($brand['logo']);
});
  
?>


            <div class="row mt-5 box-shadow p-3 custom-rounded">
            <?php foreach ($brands as $brand): ?>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-4">
                <div
                    class="h-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="brand-card-img-wrapper">
                        <img src="<?php echo esc_url($brand['logo']); ?>" alt="<?php echo esc_attr($brand['name']); ?>"
                            class="img-fluid h-100 w-100" />
                    </div>
                 
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
</section>