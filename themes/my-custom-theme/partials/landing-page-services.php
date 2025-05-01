<style>
.header-icon {
    width: 3.5rem;
    background: var(---blue-gradient-background);
}

.stat-number {
    color: blue;
}

.icon-wrapper {
    border: 1px solid var(--color-light-grey-border);
    /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); */
    height: 5rem;
    width: 5rem;
}
</style>


<section class="container">
    <?php
    $args = array(
        'h5_text' => 'Services',
        'h2_text' => 'What we do'
    );

    get_template_part('partials/section-header', null, $args);
    ?>

    <?php

            // Service data organized properly
$services = array(
  array(
      'icon'   => get_field('service_icon_1'),
      'header' => get_field('service_header_1'),
      'link'   => get_field('service_link_1'),
  ),
  array(
      'icon'   => get_field('service_icon_2'),
      'header' => get_field('service_header_2'),
      'link'   => get_field('service_link_2'),
  ),
  array(
      'icon'   => get_field('service_icon_3'),
      'header' => get_field('service_header_3'),
      'link'   => get_field('service_link_3'),
  ),
  array(
      'icon'   => get_field('service_icon_4'),
      'header' => get_field('service_header_4'),
      'link'   => get_field('service_link_4'),
  ),
);

// Filter out empty services
$services = array_filter($services, function($service) {
  return !empty($service['header']); // Only keep services with a header
});

?>
    <div class="row mt-4 pb-3">
        <?php foreach ($services as $service) : ?>
        <?php get_template_part('partials/service-card', null, array(
        'icon' => $service['icon'],
        'service_heading' => $service['header'],
        'link_to_service_page' => $service['link'],
    )); ?>
        <?php endforeach; ?>
    </div>
    <hr />
    <div class="mt-4 w-50">
        <div class="d-flex gap-2 align-items-center">

            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"/>
</svg> -->
            <!-- <div class="icon-wrapper d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <defs>
                        <linearGradient id="gradient-boxes" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#3a7bd5" />
                            <stop offset="100%" stop-color="#1600a0" />
                        </linearGradient>
                    </defs>

                    <path fill="url(#gradient-boxes)"
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                </svg>
            </div> -->


            <!-- <span class="text-dark-lighter">We repair and ship</span> -->



        </div>
        <h3 class="mt-2 fw-semibold">We specialize in repairing and shipping industrial electronics and motors,
            while also providing fast access to quality parts for your operation.</h3>
        <div class="d-flex pe-5 mt-4 pt-3 justify-content-between align-items-center">
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
            <div class="d-flex flex-column">
                <h4 class="text-gradient-blue fw-semibold">
                    1500+
                </h4>
                <small class="text-dark-lighter">Projects done</small>
            </div>
            <div class="d-flex flex-column">
                <h4 class="text-gradient-blue fw-semibold">
                    20+
                </h4>
                <small class="text-dark-lighter">Brands serviced</small>
            </div>
            <div class="d-flex flex-column">
                <h4 class="text-gradient-blue fw-semibold">
                    1376+
                </h4>
                <small class="text-dark-lighter">Satisfied customers</small>
            </div>

        </div>

    </div>
</section>