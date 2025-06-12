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

.jf-automation-header {
    margin-top: -6px;
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
.footer-blog-posts li:first-child,
.contact-info-list li:first-child {
    margin-top: 1.75rem;
}

.footer-links a {
    color: var(--color-grey-text-on-black);
    text-decoration: none;
}

.footer-blog-posts a {
    text-decoration: none;
}

.footer-blog-posts a:hover {
    text-decoration: underline;
}

.contact-info-list {
    font-size: 0.9rem;
}

.contact-info-icon {
    /* color: var(--color-text-primary); */
    font-size: 0.9rem;
}

.bottom-footer {
    background-color: var(--color-black);
}
        </style>

        <?php
$globals_id = 578;
?>

        <?php
$footer_links = array(
    array(
        'text' => get_field('link_1_text', $globals_id),
        'url'  => get_field('link_1_link', $globals_id),
    ),
    array(
        'text' => get_field('link_2_text', $globals_id),
        'url'  => get_field('link_2_link', $globals_id),
    ),
    array(
        'text' => get_field('link_3_text', $globals_id),
        'url'  => get_field('link_3_link', $globals_id),
    ),
    array(
        'text' => get_field('link_4_text', $globals_id),
        'url'  => get_field('link_4_link', $globals_id),
    ),
);
?>

        <?php
$contact_items = [
    [
        'icon'  => get_field('phone_icon', $globals_id),
        'label' => get_field('phone_number', $globals_id),
    ],
    [
        'icon'  => get_field('address_icon', $globals_id),
        'label' => get_field('address', $globals_id),
    ],
    [
        'icon'  => get_field('email_icon', $globals_id),
        'label' => get_field('email', $globals_id),
    ],
];
?>







        <div class="footer-container bg-dark">
            <div class="container py-5">


                <div class="row text-light gx-5">
                    <div class="footer-section col">
                        <div>
                            <h3 class="fw-semibold jf-automation-header">
                                <?php echo esc_html(get_field('jf_automation_header', $globals_id)); ?></h3>
                            <p class="footer-section-margin footer-paragraph">
                                <?php echo esc_html(get_field('jf_automation_paragraph', $globals_id)); ?></p>
                        </div>
                    </div>
                    <div class="footer-section col">
                        <div>
                            <h6 class="fw-semibold"><?php echo esc_html(get_field('quick_links_title', $globals_id)); ?>
                            </h6>
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
                            <h6 class="fw-semibold"><?php echo esc_html(get_field('blog_footer_title', $globals_id)); ?>
                            </h6>

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
                                <a class="fw-semibold text-light" href="<?php the_permalink(); ?>"
                                    class="fw-semibold d-block">
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
                            <ul class="list-unstyled contact-info-list">
                                <?php foreach ($contact_items as $item) : ?>
                                <?php if (!empty($item['label'])) : ?>
                                <li class="text-grey-on-black d-flex align-items-center mb-2">
                                    <?php if (!empty($item['icon'])) : ?>
                                    <i
                                        class="text-primary contact-info-icon me-3 bi <?php echo esc_attr($item['icon']); ?> me-2"></i>
                                    <?php endif; ?>
                                    <span><?php echo esc_html($item['label']); ?></span>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- <p>&copy; <?php echo date("Y"); ?> JF Automation Inc.</p> -->

            </div>
        </div>
        <div class="bottom-footer">
            <div class="container py-3 d-flex justify-content-between">
                <p class="mb-0">&copy; <?php echo date("Y"); ?> All right reserved. <span
                        class="ms-1 text-primary fw-semibold">JF Automation</span></p>
                <div class="d-flex gap-3 text-light"><i
                        class="bi fs-5 <?php echo esc_attr(get_field('social_icon_1')); ?>"></i>
                    <i class="bi fs-5 <?php echo esc_attr(get_field('social_icon_2')); ?>"></i>
                </div>

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