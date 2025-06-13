<style>
.category-badge-container {
    position: absolute;
    top: 6px;
    right: 6px;
}
</style>

<section class="blog-section pb-5">

    <div class="container">

        <?php
        $args = array(
            'h5_text' => get_field('blog_subheader'),
            'h2_text' => get_field('blog_header'),
             'see_all_link' => get_field('blog_cta_link'),
    'see_all_text' => get_field('blog_cta_text'),
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
                        <div class="position-relative">
                            <div class="category-badge-container"> <span class="badge custom-badge">Category</span>
                            </div>

                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                class="card-img-top custom-rounded" alt="<?php echo esc_attr(get_the_title()); ?>">
                        </div>
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
                                <?php get_template_part('partials/learn-more-link', null, [
    'link' => get_permalink(),  
    'label' => 'Read more'    
]); ?>

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