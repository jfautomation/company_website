<style>
.small-heading {
    font-size: 0.85rem;
}
</style>

<?php 
$brand_images = array_filter([
    get_field('brand_1'),
    get_field('brand_2'),
    get_field('brand_3'),
    get_field('brand_4'),
    get_field('brand_5')
]);
?>



<div class="container">
    <div class="brands-preview-wrapper mt-4 custom-rounded border-light-grey">
        <div class="row w-100">

            <?php $brands_preview_banner = get_field('brands_preview_banner');
            $brands_preview_header = get_field('brands_preview_header');
            $brands_preview_banner = get_field('brands_preview_banner');
             $brands_preview_subheader_number = get_field('brands_preview_subheader_number');
             $brands_preview_subheader_text = get_field('brands_preview_subheader_text');

            
            ?>

            <?php if ($brands_preview_banner): ?>
            <div class="col-lg-2">
                <div class="d-flex flex-column ps-3 py-3">
                    <span class="fw-bold mb-0"><?php echo($brands_preview_header) ?></span>
                    <small class=""><span class="fw-bold"><?php echo($brands_preview_subheader_number) ?>
                        </span><?php echo($brands_preview_subheader_text) ?></small>


                </div>
            </div>
            <div class="col-lg-9">
                <div class="p-2 h-100 d-flex align-items-center"> <img
                        src="<?php echo esc_url($brands_preview_banner['url']); ?>"
                        alt="<?php echo esc_attr($brands_preview_banner['alt']); ?>"
                        class="img-fluid w-100 brand-preview-img" /></div>

            </div>
            <div class="col-lg-1 d-flex align-items-center justify-content-center">
                <?php echo do_shortcode('[button link="#" variant="black" size="sm" icon="fa-solid fa-arrow-right"]View all[/button]'); ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>