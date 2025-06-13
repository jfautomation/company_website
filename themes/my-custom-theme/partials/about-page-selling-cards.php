<style>
.stat-card:not(:last-child) {
    border-right: 1px solid #d9d5d5;

}

.stat-card:not(:first-child) {

    padding-left: 1.5rem;
}
</style>



<section>
    <?php
$selling_points = [];

for ($i = 1; $i <= 3; $i++) {
    $icon  = get_field("about_page_selling_point_{$i}_icon");
    $title = get_field("about_page_selling_point_{$i}_title");
    $text  = get_field("about_page_selling_point_{$i}_text");

    // Only push if title or text exists
    if ($icon || $title || $text) {
        $selling_points[] = [
            'icon'  => $icon,
            'title' => $title,
            'text'  => $text,
        ];
    }
}
?>
    <div class="container">
        <div class="row gx-5">
            <div class="col d-flex flex-column justify-content-between">
                <div class="row">

                    <h4 class="fw-semibold mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </h4>

                </div>
                <div>
                    <div class="row">

                        <?php
    for ($i = 1; $i <= 3; $i++) {
        $icon  = get_field("about_page_selling_point_{$i}_icon");
        $title = get_field("about_page_selling_point_{$i}_title");
        $text  = get_field("about_page_selling_point_{$i}_text");

        if ($icon || $title || $text): ?>
                        <div class="col stat-card">
                            <div class="">
                                <?php if ($title): ?>
                                <h2 class="fw-bold"><?php echo esc_html($title); ?></h2>
                                <?php endif; ?>

                                <?php if ($text): ?>
                                <p class="stats-card-text mb-0"><?php echo esc_html($text); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif;
    }
    ?>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="light-grey-container custom-rounded p-4">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex align-items-center gap-3">
                            <span class="fs-5 fw-semibold">About us</span><i class="bi bi-gear-wide-connected fs-3"></i>
                        </div>
                    </div>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <div class="d-flex gap-2 mt-4 pt-2">
                        <?php
    echo do_shortcode('[button variant="primary" link="' . esc_url(get_field('hero_button_link_1')) . '" icon="bi-arrow-right"]Get a FREE estimate[/button]');
    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <h2 class="fw-bold mb-0 w-75 pe-5"><?php echo esc_html($args['h2_text']); ?></h2> -->
    </div>
</section>

<!-- <style>
.selling-points-img {
    max-width: 100%;
    max-height: 100%;
}
</style>

<?php
$selling_points = [];

for ($i = 1; $i <= 4; $i++) {
    $icon  = get_field("about_page_selling_point_{$i}_icon");
    $title = get_field("about_page_selling_point_{$i}_title");
    $text  = get_field("about_page_selling_point_{$i}_text");

    // Only push if title or text exists
    if ($icon || $title || $text) {
        $selling_points[] = [
            'icon'  => $icon,
            'title' => $title,
            'text'  => $text,
        ];
    }
}
?>

<div class="mt-5">
    <div class="container">
        <?php
get_template_part('partials/section-header', null, array(
    'h5_text' => 'Numbers',
    'h2_text' => 'Our stats',
    'see_all_link' => '/#',
    'see_all_text' => 'See all'
));
?>


        <div class="row mt-4 pt-1">
            <div class="col">
                <div class="row">
                    <?php
    for ($i = 1; $i <= 4; $i++) {
        $icon  = get_field("about_page_selling_point_{$i}_icon");
        $title = get_field("about_page_selling_point_{$i}_title");
        $text  = get_field("about_page_selling_point_{$i}_text");

        if ($icon || $title || $text): ?>
                    <div class="col-6 mb-4">
                        <div class="">
                            <?php if ($title): ?>
                            <h2 class="fw-bold"><?php echo esc_html($title); ?></h2>
                            <?php endif; ?>

                            <?php if ($text): ?>
                            <p class="stats-card-text"><?php echo esc_html($text); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif;
    }
    ?>
                </div>


            </div>



        </div>


    </div>

</div> -->