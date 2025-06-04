<style>
.banner-inner {
    box-shadow: var(--shadow-light);
}
</style>
<section>
    <div class="container">
        <div
            class="banner-inner custom-rounded border-light-grey px-4 py-3 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="fw-semibold">Some stuff here for the banner</h3>
                <p class="mb-0">Some more stuf here as a paragraph to seee what it looks</p>
            </div>
        <?php
        echo do_shortcode('[button variant="outline-black" size="md" link="' . esc_url(get_field('hero_button_link_1')) . '" icon="bi-arrow-right"]Get it now[/button]');
      ?>
    </div>
</section>