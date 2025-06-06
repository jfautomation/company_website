        <style>
.larger-map-link {
    bottom: 10px;
    left: 10px;
    z-index: 5;
    background: rgba(255, 255, 255, 0.8);
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.875rem;
}

.footer-container {
    color: #2A2A2A;
}

.footer-paragraph {
    font-size: 0.9rem;
    line-height: 1.5rem;
}

.footer-section-margin {
    margin-top: 1.75rem;
}

.footer-section {
    padding-inline-end: 2.5rem;
}

.footer-links li:first-child,
.footer-blog-posts li:first-child {
    margin-top: 1.75rem;
}

.footer-links a {
    color: var(--color-grey-text-on-black);
    text-decoration: none;
}
        </style>

        <?php
$footer_links = array(
    array(
        'text' => get_field('link_1_text'),
        'url'  => get_field('link_1_link'),
    ),
    array(
        'text' => get_field('link_2_text'),
        'url'  => get_field('link_2_link'),
    ),
    array(
        'text' => get_field('link_3_text'),
        'url'  => get_field('link_3_link'),
    ),
    array(
        'text' => get_field('link_4_text'),
        'url'  => get_field('link_4_link'),
    ),
);
?>



        <footer class="py-4 text-light">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.977936550798!2d-79.62397892337076!3d43.62781815407149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b389c10874e7f%3A0x89b360f99d52ebdb!2s1155%20Fewster%20Dr%2C%20Mississauga%2C%20ON%20L4W%201A2!5e0!3m2!1sen!2sca!4v1749232259674!5m2!1sen!2sca"
                style="width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>


            <div class="footer-container bg-dark">
                <div class="container py-5">


                    <div class="row text-light gx-5">
                        <div class="footer-section col">
                            <div>
                                <h3 class="fw-semibold"><?php echo esc_html(get_field('jf_automation_header')); ?></h3>
                                <p class="footer-section-margin footer-paragraph">
                                    <?php echo esc_html(get_field('jf_automation_paragraph')); ?></p>
                            </div>
                        </div>
                        <div class="footer-section col">
                            <div>
                                <h6 class="fw-semibold"><?php echo esc_html(get_field('quick_links_title')); ?></h6>
                                <ul class="footer-links d-flex flex-column list-unstyled gap-2">
                                    <?php foreach ($footer_links as $link) : ?>
                                    <?php if (!empty($link['text']) && !empty($link['url'])) : ?>
                                    <li>
                                        <a href="<?php echo esc_url($link['url']); ?>">
                                            <?php echo esc_html($link['text']); ?>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-section col">
                            <div>
                                <h6 class="fw-semibold"><?php echo esc_html(get_field('blog_footer_title')); ?></h6>

                                <?php
            $random_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'rand',
            ));

            if ($random_posts->have_posts()) :
                echo '<ul class="footer-blog-posts list-unstyled">';
                while ($random_posts->have_posts()) :
                    $random_posts->the_post();
                    ?>
                                <li class="mb-3 d-flex flex-column">
                                    <a class="text-decoration-none fw-semibold text-light" href="<?php the_permalink(); ?>" class="fw-semibold d-block">
                                        <?php the_title(); ?>
                                    </a>
                                    <small class="text-grey-on-black">
                                        <?php echo wp_trim_words(get_the_excerpt(), 5, '...'); ?>
                                    </small>
                                </li>
                                <?php
                endwhile;
                echo '</ul>';
                wp_reset_postdata();
            endif;
            ?>

                            </div>
                        </div>

                        <div class="footer-section col">
                            <div>
                                <h6 class="fw-semibold"><?php echo esc_html(get_field('contact_info_title')); ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- <p>&copy; <?php echo date("Y"); ?> JF Automation Inc.</p> -->

                </div>
            </div>


        </footer>

        <?php wp_footer(); ?>

        <script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('main-navbar') || document.querySelector('.navbar');
    const hero = document.querySelector('.hero');

    function setHeroHeight() {
        const navbarHeight = navbar.offsetHeight;
        const viewportHeight = window.innerHeight;
        const heroHeight = viewportHeight + navbarHeight - 60;

        hero.style.height = `${heroHeight}px`;
        console.log(navbarHeight, 'navbar height')
        console.log(viewportHeight, 'viewport height')
        console.log(heroHeight, 'heroHeight')
    }

    setHeroHeight();
    window.addEventListener('resize', setHeroHeight);

    window.addEventListener('scroll', () => {
        const heroHeight = 300;
        console.log('ScrollY:', window.scrollY, 'HeroHeight:', heroHeight);

        if (window.scrollY > heroHeight) {
            navbar.classList.add('scrolled');

        } else {
            navbar.classList.remove('scrolled');

        }
    });
});


function initCarousel(carouselId) {
    const track = document.getElementById(`${carouselId}_track`);
    const slides = track?.children || [];
    const prevBtn = document.getElementById(`${carouselId}_prev`);
    const nextBtn = document.getElementById(`${carouselId}_next`);

    if (!track || slides.length === 0 || !prevBtn || !nextBtn) return;

    let currentIndex = 0;
    const maxIndex = slides.length - 1;

    function goToSlide(index) {
        index = Math.max(0, Math.min(index, maxIndex));
        const slideWidth = slides[0].getBoundingClientRect().width;
        track.style.transform = `translateX(-${index * slideWidth}px)`;
        currentIndex = index;
    }

    prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
    nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));
}
        </script>
        </body>

        </html>