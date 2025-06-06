<style>
.brands-img-container {
    max-width: 800px;
    padding: 3rem 3rem 3rem 0;
}

.logo-brand-img {
    max-width: 700px;
}
</style>

<section id="brands">
    <div class="container pb-4">
        <?php
        $args = array(
            'h5_text' =>
    get_field('brands_subheader'), 'h2_text' => get_field('brands_header'), );
    get_template_part('partials/section-header', null, $args); ?>
        <div class="row mt-3">
            <div class="col d-flex flex-column align-items-start">
                <div><?php echo esc_html(get_field('brand_paragraph')); ?></div>
            </div>
        </div>
        <div class="">
            <?php
            $image = get_field('brands_image');
            if ($image):
            ?>
            <img class="img-fluid logo-brand-img w-100" src="<?php echo esc_url($image); ?>" alt="" />
            <?php endif; ?>
        </div>
        <?php
        get_template_part('partials/brands-carousel');
         ?>
    </div>
</section>