<section class="blog-section pb-5">

    <div class="container">
        <?php
        $args = array(
            'h5_text' => 'Blog',
            'h2_text' => 'Recent posts'
        );
        get_template_part('partials/section-header', null, $args);
        ?>


        <div class="row mt-4">
            <?php
    $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
    ]);

    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="h-100 d-flex flex-column">
                    <div class="d-flex flex-column flex-grow-1">

                        <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                            class="card-img-top" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>

                        <div class="h-100 d-flex flex-column">
                            <div class="d-flex flex-column">
                                <h5 class="fw-semibold text-decoration-underline mt-3">
                                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-underline">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>
                            </div>
                            <div class="d-flex h-100 flex-column justify-content-between mt-2">
                                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="text-primary">Read more</a>

                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <?php endwhile;
        wp_reset_postdata();
    else: ?>
            <p>No blog posts found.</p>
            <?php endif; ?>
        </div>

</section>