<section>
    <div class="container">
        <?php
    $args = array(
        'h5_text' => get_field('services_subheader'),
        'h2_text' => get_field('services_header'),
    );

    get_template_part('partials/section-header', null, $args);
    ?>

        <!-- <div class="mt-3 paragraph-container">
            <?php
get_template_part('partials/paragraph', null, array(
    'paragraph_text' => get_field('services_paragraph')
));
?>
        </div> -->

        <?php

            // Service data organized properly
$services = array(
  array(
      'icon'   => get_field('service_icon_1'),
      'header' => get_field('service_header_1'),
      'link'   => get_field('service_link_1'),
      'paragraph' => get_field('service_1_paragraph'),
      'span' => get_field('service_1_span'),
      'image' => get_field('service_1_image'),
  ),
  array(
      'icon'   => get_field('service_icon_2'),
      'header' => get_field('service_header_2'),
      'link'   => get_field('service_link_2'),
      'paragraph' => get_field('service_2_paragraph'),
      'span' => get_field('service_2_span'),
       'image' => get_field('service_2_image'),
  ),
  array(
      'icon'   => get_field('service_icon_3'),
      'header' => get_field('service_header_3'),
      'link'   => get_field('service_link_3'),
      'paragraph' => get_field('service_3_paragraph'),
      'span' => get_field('service_3_span'),
      'image' => get_field('service_3_image'),
  ),
  array(
      'icon'   => get_field('service_icon_4'),
      'header' => get_field('service_header_4'),
      'link'   => get_field('service_link_4'),
      'paragraph' => get_field('service_4_paragraph'),
      'span' => get_field('service_4_span'),
      'image' => get_field('service_4_image'),
  ),
);

// Filter out empty services
$services = array_filter($services, function($service) {
  return !empty($service['header']); // Only keep services with a header
});

?>
        <div class="row pt-1 mt-3">
            <?php foreach ($services as $service) : ?>
            <?php get_template_part('partials/service-card', null, array(
        'icon' => $service['icon'],
        'service_heading' => $service['header'],
        'link_to_service_page' => $service['link'],
        'paragraph' => $service['paragraph'],
        'span' => $service['span'],
        'image' => $service['image'],
    )); ?>
            <?php endforeach; ?>
        </div>
    </div>





</section>