<style>
.brands-img-container {
    max-width: 800px;
    padding: 3rem 3rem 3rem 0;
}
</style>

<section>
    <div class="container">
        <?php
        $args = array(
            'h5_text' => 'Brands',
            'h2_text' => 'Brands we repair'
        );
        get_template_part('partials/section-header', null, $args);
        ?>


        <div class="brands-img-container">
            <?php
            $image = get_field('brands_image');
            if ($image):
            ?>
            <img class="img-fluid logo-brand-img w-100" src="<?php echo esc_url($image); ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
</section>