<style>
.services-extend {
    background-color: grey;
}

.header-icon {
    width: 3.5rem;
    background: var(---blue-gradient-background);
}

.stat-number {
    color: blue;
}

.icon-wrapper {
    border: 1px solid var(--color-light-grey-border);
    height: 5rem;
    width: 5rem;
}
</style>


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
<div class="">
    <section>
        <div class="container">

            <!-- <small class="fw-semibold">Trusted Experts</small> -->


            <div class="row pb-1 mt-2">
                <div class="col">
                    <h3 class="mt-2 fw-semibold"> <?php echo esc_html( get_field('services_paragraph') ); ?></h3>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">


                            <div class="icon-wrapper d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 16 16">
                                    <defs>
                                        <linearGradient id="gradient-boxes" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#3a7bd5" />
                                            <stop offset="100%" stop-color="#1600a0" />
                                        </linearGradient>
                                    </defs>

                                    <path fill="url(#gradient-boxes)"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                                </svg>
                            </div>

                        </div>
                        <?php foreach ($stats as $stat): ?>
                        <div class="col">
                            <div class="d-flex flex-column h-100 justify-content-center align-items-start">
                                <h2 class="fw-semibold mb-1">
                                    <?php echo esc_html($stat['number']) . '+'; ?>
                                </h2>
                                <small class="text-grey">
                                    <?php echo esc_html($stat['text']); ?>
                                </small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mt-4">
                    <?php echo do_shortcode('[button variant="outline-primary" link="' . esc_url( get_field('hero_button_link_2') ) . '"]Get a Quote[/button]'); ?>
                </div>
                <!-- <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16">
                        <defs>
                            <linearGradient id="gradient-phone-fill" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#3a7bd5" />
                                <stop offset="100%" stop-color="#1600a0" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-phone-fill)" fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>

                    <small class="mt-2 text-decoration-underline">Get a quote</small>

                </div> -->



            </div>
    </section>
</div>
</div>