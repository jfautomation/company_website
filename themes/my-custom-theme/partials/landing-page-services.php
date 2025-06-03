<style>
.small-services-paragraph {
    font-size: 0.93rem !important;
}

.active-service {
    border: 1px solid #c1c1c1;
}
</style>

<section>
    <div class="container">
        <?php
        // Section header
        get_template_part('partials/section-header', null, array(
            'h5_text' => get_field('services_subheader'),
            'h2_text' => get_field('services_header'),
        ));
     

       
        ?>
    

        <?php
        // Collect services data
        $services = array_filter([
            array(
                'icon'      => get_field('service_icon_1'),
                'header'    => get_field('service_header_1'),
                'link'      => get_field('service_1_link'),
                'paragraph' => get_field('service_paragraph_1'),
                'span'      => get_field('service_1_span'),
                'image'     => get_field('service_1_image'),
            ),
            array(
                'icon'      => get_field('service_icon_2'),
                'header'    => get_field('service_header_2'),
                'link'      => get_field('service_2_link'),
                'paragraph' => get_field('service_paragraph_2'),
                'span'      => get_field('service_2_span'),
                'image'     => get_field('service_2_image'),
            ),
            array(
                'icon'      => get_field('service_icon_3'),
                'header'    => get_field('service_header_3'),
                'link'      => get_field('service_3_link'),
                'paragraph' => get_field('service_paragraph_3'),
                'span'      => get_field('service_3_span'),
                'image'     => get_field('service_3_image'),
            ),
            array(
                'icon'      => get_field('service_icon_4'),
                'header'    => get_field('service_header_4'),
                'link'      => get_field('service_4_link'),
                'paragraph' => get_field('service_paragraph_4'),
                'span'      => get_field('service_4_span'),
                'image'     => get_field('service_4_image'),
            ),
        ], function($service) {
            return !empty($service['header']);
        });
        ?>

        <div class="row gx-4 pt-1 mt-4">

            <?php foreach ($services as $service) : ?>
            <?php get_template_part('partials/service-card', null, array(
                                'icon' => $service['icon'],
                                'service_heading' => $service['header'],
                                'link_to_service_page' => $service['link'],
                                'paragraph' => $service['paragraph'],
                                'span' => $service['span'],
                                'image' => $service['image'],
                                'link' => $service['link']
                            )); ?>
            <?php endforeach; ?>

        </div>
    </div>
</section>