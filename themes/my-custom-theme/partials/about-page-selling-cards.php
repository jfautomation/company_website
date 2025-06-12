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
          <div class="col-md-4 mb-4">
            <div class="light-grey-container custom-rounded p-4 h-100">
              <!-- <?php if ($icon): ?>
                <div class="">
                  <i class="fs-3 text-gradient-blue <?php echo esc_attr($icon); ?>"></i>
                </div>
              <?php endif; ?> -->

              <?php if ($title): ?>
                <h2 class="fw-semibold text-primary"><?php echo esc_html($title); ?></h2>
              <?php endif; ?>

              <?php if ($text): ?>
                <p class="stats-card-text mb-0"><?php echo esc_html($text); ?></p>
              <?php endif; ?>
            </div>
          </div>
    <?php
        endif;
    }
    ?>
  </div>
</div>

</div>