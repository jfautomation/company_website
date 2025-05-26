<section class="blog-section">
    <div class="container">
        <h2 class="mb-4">Latest from the Blog</h2>

        <div class="row">
            <?php
            $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3, // Change to however many you want to show
            ]);

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                            </div>
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
