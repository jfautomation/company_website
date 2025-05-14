<style>
.brands-img-container {
    max-width: 800px;
    padding: 3rem 3rem 3rem 0;
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
        <!-- <p class="w-75 mt-3">
            Lorem ipsum is a dummy or placeholder text commonly used in graphic design, publishing, and web development.
            Its purpose is to permit a page layout to be designed, independently of the copy that will subsequently
            populate it
        </p>
        <div class="mt-4">
          <?php echo do_shortcode('[button link="#" variant="outline-primary" icon="fa-solid fa-arrow-right"]Get a quote[/button]'); ?>
        </div> -->

  


        <div class="brands-img-container">
            <?php
                $image = get_field('brands_image');
                if ($image):
                ?>
            <img class="fluid logo-brand-img w-100" src="<?php echo esc_url($image); ?>" alt="">
            <?php endif; ?>
        </div>

    </div> <!-- ✅ Closing container div -->
</section>