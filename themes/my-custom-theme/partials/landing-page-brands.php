<style>
.brands-img-container {
    max-width: 800px;
}

.brands-container-wrapper {}
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


        <div class="box-shadow brands-img-container mt-4 p-4">
            <?php
                $image = get_field('brands_image');
                if ($image):
                ?>
            <img class="fluid logo-brand-img w-100" src="<?php echo esc_url($image); ?>" alt="">
            <?php endif; ?>
        </div>

    </div> <!-- ✅ Closing container div -->
</section>