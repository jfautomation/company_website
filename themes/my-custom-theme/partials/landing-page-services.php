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
    <div class="row mt-4 pb-1">
        <?php foreach ($services as $service) : ?>
        <?php get_template_part('partials/service-card', null, array(
        'icon' => $service['icon'],
        'service_heading' => $service['header'],
        'link_to_service_page' => $service['link'],
    )); ?>
        <?php endforeach; ?>
    </div>




</section>