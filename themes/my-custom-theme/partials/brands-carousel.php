<?php
$carousel_id = 'carousel_' . uniqid();

ob_start();

$brands = array(
    array('brand_logo' => get_field('seimens_logo')), 
    array('brand_logo' => get_field('fanuc_logo')), 
    array('brand_logo' => get_field('allen_bradley_logo')), 
    array('brand_logo' => get_field('heidenhain_logo')), 
    array('brand_logo' => get_field('yaskawa_logo')), 
    array('brand_logo' => get_field('abb_logo')), 
    array('brand_logo' => get_field('rexroth_indramat_logo')), 
    array('brand_logo' => get_field('baumuller_logo')),
);

// Make sure $products is defined before filtering it, else define as empty array
if (!isset($products) || !is_array($products)) {
    $products = [];
}

$carousel_content = ob_get_clean();
include get_template_directory() . '/partials/carousel-wrapper.php';
?>

<div>i am brands carouel</div>