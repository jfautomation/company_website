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
                    class="custom-rounded card-gradient box-shadow h-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="brand-card-img-wrapper p-3">
                        <img src="<?php echo esc_url($brand['logo']); ?>" alt="<?php echo esc_attr($brand['name']); ?>"
                            class="img-fluid h-100 w-100" />
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