<section class="blog-section">

    <div class="container">
        <?php
        $args = array(
            'h5_text' => 'Blog',
            'h2_text' => 'Recent posts'
        );
        get_template_part('partials/section-header', null, $args);
        ?>


        <div class="row mt-5">
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3, // Change to however many you want to show
            ]);

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>
            <div class="col-md-3 mb-4">
                <div>
                    <div class="">
                        <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                            class="card-img-top" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>


                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                        <div>

                        </div>
                    </div>
                    <?php endwhile;
                wp_reset_postdata();
            else: ?>
                    <p>No blog posts found.</p>
                    <?php endif; ?>
                </div>
            </div>
</section>