<section class="light-grey-container">
        <div class="container">
            <?php
    $args = array(
        'h5_text' => 'Shop',
        'h2_text' => 'visit our online shop'
    );

    get_template_part('partials/section-header', null, $args);
    ?>
            <?php get_template_part('partials/product-carousel')?>
        </div>
    </section>