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

<div class="mt-5">
    <div class="container">
        <div class="row">
            <?php
    for ($i = 1; $i <= 3; $i++) {
        $icon  = get_field("about_page_selling_point_{$i}_icon");
        $title = get_field("about_page_selling_point_{$i}_title");
        $text  = get_field("about_page_selling_point_{$i}_text");

        if ($icon || $title || $text): ?>
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="">


                        <?php if ($title): ?>
                        <h2 class="fw-semibold text-gradient-blue"><?php echo esc_html($title); ?></h2>
                        <?php endif; ?>

                        <?php if ($text): ?>
                        <p class="stats-card-text mb-0"><?php echo esc_html($text); ?></p>
                        <?php endif; ?>
                    </div>

                    <a href="#"
                        class="text-blue fw-semibold text-decoration-underline d-flex align-items-center gap-1 small">
                        Request a quote
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <hr>
                </hr>



            </div>

            <?php
        endif;
    }
    ?>
        </div>


    </div>

</div>