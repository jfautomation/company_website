<section class="bg-gradient-blue">

    <?php

            
$stats = array(
  array(
      'number' => get_field('stat_1_number'),
      'text' => get_field('stat_1_text'),
  ),
  array(
    'number' => get_field('stat_2_number'),
    'text' => get_field('stat_2_text'),
),
array(
    'number' => get_field('stat_3_number'),
    'text' => get_field('stat_3_text'),
),
);

// Filter out empty services
$stats = array_filter($stats, function($stat) {
  return !empty($stat['number']); // Only keep services with a header
});

?>

    <div class="container text-light">
        <div class="row h-100">
            <div class="col-lg-6 col-md-12">
                <div class="h-100 d-flex flex-column justify-content-center align-items-center">

                    <img src="<?php echo esc_url(get_field('landing_page_cta_image')); ?>" alt="Banner Image"
                        class="img-fluid w-100">

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="h-100 d-flex flex-column align-items-start justify-content-center">
                    <h5 class="fw-semibold"><?php echo esc_html(get_field('landing_page_cta_subheading')); ?>
                    </h5>
                    <h2 class="mt-2"><?php echo esc_html(get_field('landing_page_cta_header')); ?></h2>
                    <p class="mt-3">With 25+ years of trusted service, we back every repair with expert craftsmanship, thorough testing, and a commitment to minimizing your downtime.</p>



                    <!-- <div class="row w-100 mt-3 pt-3">
                        <?php foreach ($stats as $stat): ?>
                        <div class="col">
                            <div class="d-flex flex-column h-100 justify-content-center align-items-start">
                                <h2 class="fw-semibold mb-1">
                                    <?php echo esc_html($stat['number']) . '+'; ?>
                                </h2>
                                <small class="text-light mb-0">
                                    <?php echo esc_html($stat['text']); ?>
                                </small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div> -->
                    <div class="mt-4">

                        <!-- <?php echo do_shortcode('[button variant="outline-white" link="' . esc_url( get_field('landing_page_cta_button_link') ) . '"]' . esc_html( get_field('landing_page_cta_button_text') ) . '[/button]'); ?> -->
                        <?php echo do_shortcode('[button link="#" variant="outline-white" icon="fa-solid fa-arrow-right"]Get a quote[/button]'); ?>

                    </div>


                </div>
            </div>
        </div>


</section>