<style>
.header-icon {
    /* width: 1.5rem; */
    background: var(---blue-gradient-background); 
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
    <div class="row mt-4">
        <?php foreach ($services as $service) : ?>
        <?php get_template_part('partials/service-card', null, array(
        'icon' => $service['icon'],
        'service_heading' => $service['header'],
        'link_to_service_page' => $service['link'],
    )); ?>
        <?php endforeach; ?>
    </div>  
    <div class="">
        <div class="d-flex">

        <i class="header-icon fa-solid fa-bolt"></i>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M349.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224c-10 8.8-13.6 22.9-8.9 35.3S50.7 288 64 288l111.5 0L98.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7l-111.5 0L349.4 44.6z"/></svg>
        <span>Concept is what we do</span>
       
            <!-- <img class="header-icon" src="<?php echo esc_url(get_field('service_icon_4')); ?>" alt="Service Icon" /> -->
        </div>

    </div>
</section>