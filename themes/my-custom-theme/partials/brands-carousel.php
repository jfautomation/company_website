<style>
.brand-logo-wrapper {
    position: relative;
    width: 100%;
    padding-bottom: 10%;
    overflow: hidden;
    box-shadow: var(--shadow-med);
    margin-right: 1rem;
    min-width: 10rem;
}



.brand-logo-inner {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 1rem;
    box-sizing: border-box;
}

.brand-logo-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
</style>

<?php 
$carousel_id = 'carousel_' . uniqid();

ob_start();

$brands = array(
    array('brand_logo' =>
get_field('seimens_logo')), array('brand_logo' => get_field('fanuc_logo')),
array('brand_logo' => get_field('allen_bradley_logo')), array('brand_logo' =>
get_field('heidenhain_logo')), array('brand_logo' => get_field('yaskawa_logo')),
array('brand_logo' => get_field('abb_logo')), array('brand_logo' =>
get_field('rexroth_indramat_logo')), array('brand_logo' =>
get_field('baumuller_logo')), array('brand_logo' =>
get_field('mitsubishi_logo')), array('brand_logo' =>
get_field('schneider_electric_logo')), array('brand_logo' =>
get_field('okuma_logo')), array('brand_logo' => get_field('danfoss_logo')),
array('brand_logo' => get_field('omron_logo')), array('brand_logo' =>
get_field('keb_logo')), ); ?>

<?php foreach ($brands as $brand): ?>
<?php if (!empty($brand['brand_logo'])): ?>
<div class="brand-logo-wrapper custom-rounded border-light-grey">
    <div class="brand-logo-inner p-3">
        <img src="<?php echo esc_url($brand['brand_logo']); ?>" alt="Brand Logo" class="brand-logo-img" />
    </div>
</div>
<?php endif; ?>
<?php endforeach; ?>

<?php
$carousel_content = ob_get_clean();

include get_template_directory() . '/partials/carousel-wrapper.php';
?>