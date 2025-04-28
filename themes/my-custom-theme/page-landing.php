<?php
/**
 * Template Name: Landing Page
 */
?>

<?php get_template_part( 'partials/header' ); ?>
<?php
$hero_bg_image = get_field('hero_background_image'); // make sure this field exists in ACF
?>
<?php
$images = [
    get_field('product_shot_1'),
    get_field('product_shot_2'),
    get_field('product_shot_3'),
    get_field('product_shot_4'),

];

// foreach ($images as $image) {
//     if ($image) {
//         echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
//     }
// }
?>

<div class="landing-page-content">
    <?php
    // Use WordPress loop to pull content from the CMS
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // Display the content of the page
        endwhile;
    endif;
    ?>
    <div>
        <section class="hero d-flex flex-column justify-content-center align-items-center"
            style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center;">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-lg-6 col-md-12">
                        <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex flex-column align-items-start w-75">


                                <h2 class="text-gradient-blue"><?php echo esc_html( get_field('hero_header_text') ); ?>
                                </h2>
                                <p class="text-grey mt-2">
                                    <?php echo esc_html( get_field('hero_paragraph_text') ); ?>
                                </p>
                                <div class="d-flex gap-2 mt-3">
                                    <?php echo do_shortcode('[button variant="outline-primary" link="' . esc_url( get_field('hero_button_link_2') ) . '"]' . esc_html( get_field('hero_button_text_2') ) . '[/button]'); ?>
                                    <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('hero_button_link_1') ) . '"]' . esc_html( get_field('hero_button_text_1') ) . '[/button]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

// Fetch the product images
$carousel_images = array_filter(array(
  get_field('product_shot_1'),
  get_field('product_shot_2'),
  get_field('product_shot_3'),
  get_field('product_shot_4'),
));

// Check if there are images
if (!empty($carousel_images)) :
?>
  <div class="col-lg-6 col-md-12">
    <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
      <div id="product-images-carousel" class="carousel w-75 slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <!-- <ol class="carousel-indicators">
          <?php foreach ($carousel_images as $index => $image) : ?>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo ($index === 0) ? 'active' : ''; ?>"></li>
          <?php endforeach; ?>
        </ol> -->

        <!-- Carousel Items -->
        <div class="carousel-inner">
          <?php foreach ($carousel_images as $index => $image) : ?>
            <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
              <img class="d-block w-100" src="<?php echo esc_url($image); ?>" alt="Slide <?php echo $index + 1; ?>">
              <span><?php echo $index ?></span>
            </div>
           
          <?php endforeach; ?>
        </div>

        <!-- Carousel Controls -->
        <?php render_custom_carousel_indicators('product-images-carousel', $carousel_images); ?>
      
        <!-- <div class="custom-carousel-indicators" data-target="#product-images-carousel">
    <?php foreach ($carousel_images as $index => $image) : ?>
        <button 
            class="custom-indicator <?php echo ($index === 0) ? 'active' : ''; ?>" 
            data-bs-target="#product-images-carousel" 
            data-bs-slide-to="<?php echo $index; ?>">
        </button>
    <?php endforeach; ?>
</div> -->
      </div>
    </div>
  </div>
<?php endif; ?>



                    <!-- <h1><?php echo esc_html( get_field('hero_header_text') ); ?></h1>
                    <p><?php echo esc_html( get_field('hero_paragraph_text') ); ?></p>


                    <a href="<?php echo esc_url( get_field('hero_button_link_1') ); ?>" class="btn btn-primary">
                        <?php echo esc_html( get_field('hero_button_text_1') ); ?>
                    </a>
                    <a href="<?php echo esc_url( get_field('hero_button_link_2') ); ?>" class="btn btn-secondary">
                        <?php echo esc_html( get_field('hero_button_text_2') ); ?>
                    </a> -->
                </div>
            </div>
        </section>
        <section>
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make
            a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions
            of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at
            its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
            opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
            packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
            ipsum'
            will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes
            by
            accident, sometimes on purpose (injected humour and the like).


            Where does it come from?
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin
            literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney
            College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
            and
            going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum
            comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
            by
            Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
            Renaissance.
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original
            form, accompanied by English versions from the 1914 translation by H. Rackham.

            Where can I get some?
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you are
            going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
            of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
            this
            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
            handful
            of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
            therefore always free from repetition
        </section>
        <section>
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make
            a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions
            of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at
            its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
            opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
            packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
            ipsum'
            will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes
            by
            accident, sometimes on purpose (injected humour and the like).


            Where does it come from?
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
            Latin
            literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
            Hampden-Sydney
            College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
            and
            going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum
            comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
            by
            Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
            Renaissance.
            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact
            original
            form, accompanied by English versions from the 1914 translation by H. Rackham.

            Where can I get some?
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable. If you are
            going
            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
            of
            text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
            this
            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
            handful
            of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
            therefore always free from repetition
        </section>
    </div>

    <?php get_template_part( 'partials/footer' ); ?>