<style>
.small-heading {
    font-size: 0.85rem;
}

.brand-preview-logo-wrapper {
    flex: 0 1 auto;
    width: 130px;
    position: relative;
    padding-bottom: 10%;
    overflow: hidden;
}

.brand-preview-logo-wrapper:first-child {
    margin-left: -2rem;
}



.brand-preview-logo-inner {
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
$brand_images = array_filter([
    get_field('seimens_logo'),
    get_field('fanuc_logo'),
    get_field('allen_bradley_logo'),
    get_field('yaskawa_logo'),
    get_field('rexroth_indramat_logo'),
]);

$brands_preview_banner = get_field('brands_preview_banner');
$brands_preview_header = get_field('brands_preview_header');
$brands_preview_subheader_number = get_field('brands_preview_subheader_number');
$brands_preview_subheader_text = get_field('brands_preview_subheader_text');
?>

<div class="container">
    <div class="brands-preview-wrapper mt-4 custom-rounded border-light-grey ps-3 pe-4">
        <div class="row w-100 align-items-center">
            <?php if ($brands_preview_banner): ?>
            <div class="col-lg-2">
                <div class="d-flex flex-column">
                    <span class="fw-bold mb-0"><?php echo esc_html($brands_preview_header); ?></span>
                    <small>
                        <span class="fw-bold"><?php echo esc_html($brands_preview_subheader_number); ?></span>
                        <span class="text-grey"><?php echo esc_html($brands_preview_subheader_text); ?></span>

                    </small>
                </div>
            </div>

            <div class="col-lg-9 d-flex justify-content-around">


                <?php foreach ($brand_images as $brand_image): ?>
                <?php if (!empty($brand_image)): ?>
                <div class="brand-preview-logo-wrapper">
                    <div class="brand-preview-logo-inner">
                        <img src="<?php echo esc_url($brand_image); ?>" alt="Brand Logo" class="brand-logo-img" />
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>

            </div>

            <div class="col-lg-1 d-flex align-items-center justify-content-center ps-4">

                <?php
echo do_shortcode('[button variant="outline-black" size="sm" link="#brands" icon="bi-arrow-right"]View all[/button]');
?>

            </div>
            <?php endif; ?>
        </div>

    </div>
</div>