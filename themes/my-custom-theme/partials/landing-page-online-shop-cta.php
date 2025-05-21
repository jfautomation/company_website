<style>
.shop-section {
    background-color: #e3e3e3;
}
</style>


<section class="shop-section mt-5">
    <div class="container">
        <?php
    $args = array(
        'h5_text' => get_field('online_shop_subheader'),
        'h2_text' => get_field('online_shop_header'),
    );

    get_template_part('partials/section-header', null, $args);
    ?>
        <?php get_template_part('partials/product-carousel')?>
    </div>
</section>