<style>
.star {
    color: #ccc;
    font-size: 1.5rem;
    margin-right: 2px;
}

.star.filled {
    color: #FFD700;
}

.star.half-filled {
    color: #FFD700;
    position: relative;
    display: inline-block;
}

.star.half-filled::after {
    content: '★';
    color: #ccc;
    position: absolute;
    left: 50%;
    overflow: hidden;
    width: 50%;
}

.card-blue {
    background: var(--blue-gradient-background);
    color: white;
}

.card-white {
    background-color: white;
    color: var(--color-bs-dark);
}

.card-white .review-body,
.card-white .reviewer-company {
    color: var(--color-grey-text);
}


.card-white h5 {
    color: var(--color-bs-dark);
}

.card-gray {
    background-color: var(--color-black);
    color: white;
}

.avatar-img {
    width: 47px;
    height: 47px;
    border-radius: 50%;
    object-fit: cover;

}
</style>


<section class="light-grey-container">
    <div class="container">
        <?php
    $args = array(
        'h5_text' => 'Reviews',
        'h2_text' => 'What people are saying'
    );

    get_template_part('partials/section-header', null, $args);
    ?>
        <?php

$reviews = array(
    array('stars' => get_field('star_rating_1'), 'name' => get_field('reviewer_name_1'), 'company' => get_field('reviewer_company_1'), 'review' => get_field('review_body_1')),
    array('stars' => get_field('star_rating_2'), 'name' => get_field('reviewer_name_2'), 'company' => get_field('reviewer_company_2'), 'review' => get_field('review_body_2')),
    array('stars' => get_field('star_rating_3'), 'name' => get_field('reviewer_name_3'), 'company' => get_field('reviewer_company_3'), 'review' => get_field('review_body_3')),
    array('stars' => get_field('star_rating_4'), 'name' => get_field('reviewer_name_4'), 'company' => get_field('reviewer_company_4'), 'review' => get_field('review_body_4')),
);
?>
        <?php
$totalStars = 0;
$reviewCount = 0;

foreach ($reviews as $review) {
    if (!empty($review['stars'])) {
        $totalStars += floatval($review['stars']);
        $reviewCount++;
    }
}

$averageRating = $reviewCount > 0 ? round($totalStars / $reviewCount, 1) : 0;
$testAvgRating = 2.3
?>


        <?php
function render_stars($stars) {
    $roundedRating = round($stars * 2) / 2;
    $output = '';

    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $roundedRating) {
            $output .= '<span class="star filled">★</span>';
        } elseif ($i - 0.5 == $roundedRating) {
            $output .= '<span class="star half-filled">★</span>';
        } else {
            $output .= '<span class="star">☆</span>';
        }
    }

    return $output;
}
?>
        <div class="row mt-3">
            <div class="col">
                <div class="d-flex align-items-center justify-content-start gap-3">
                    <span class="fw-semibold fs-3"><?php echo $averageRating; ?></span>
                    <span><?php echo render_stars($averageRating); ?></span>


                </div>

            </div>
            <div class="col">
                <div class="d-flex align-items-center justify-content-end">
                    <?php echo do_shortcode('[button variant="primary" link="' . esc_url( get_field('link_to_item') ) . '"]Review[/button]'); ?>

                </div>
            </div>
        </div>



        <?php 
$card_variants = [
    'card-blue',
    'card-white',
    'card-white',
    'card-gray',
];
?>
        <div class="row mt-3">
            <?php
    // Loop through reviews, two cards per column
    for ($i = 0; $i < count($reviews); $i += 2):
        // Get the first and second reviews for the current column (per row)
        $review1 = $reviews[$i];
        $review2 = isset($reviews[$i + 1]) ? $reviews[$i + 1] : null; // Handle case when there is an odd number of reviews

        // Generate avatar URLs
        $avatar1 = 'https://ui-avatars.com/api/?name=' . urlencode($review1['name']) . '&background=random&size=64';
        $avatar2 = $review2 ? 'https://ui-avatars.com/api/?name=' . urlencode($review2['name']) . '&background=random&size=64' : null;
    ?>
            <div class="col">
                <!-- Column 1 -->
                <div
                    class="review-card custom-rounded pt-3 pb-4 px-4 mb-4 <?php echo esc_attr($card_variants[$i % count($card_variants)]); ?>">

                    <span><?php echo render_stars($review1['stars']); ?></span>

                    <p class="review-body fw-normal mt-2">&ldquo;<?php echo esc_html($review1['review']); ?>&rdquo;</p>
                    <div class="d-flex gap-3 mt-4">
                        <img src="<?php echo esc_url($avatar1); ?>" alt="<?php echo esc_attr($review1['name']); ?>"
                            class="avatar-img" />
                        <div class="d-flex flex-column">
                            <h6 class="fw-bold mb-1"><?php echo esc_html($review1['name']); ?></h6>
                            <small class="reviewer-company">
                                <?php echo esc_html($review1['company']); ?>
                            </small>
                        </div>

                    </div>

                </div>

                <?php if ($review2): ?>
                <!-- Second review card in the same column -->
                <div
                    class="review-card custom-rounded pt-3 pb-4 px-4 mb-4 <?php echo esc_attr($card_variants[($i + 1) % count($card_variants)]); ?>">
                    <span><?php echo render_stars($review1['stars']); ?></span>


                    <p class="review-body fw-normal mt-2">&ldquo;<?php echo esc_html($review2['review']); ?>&rdquo;</p>
                    <div class="d-flex gap-3 mt-4">
                        <img src="<?php echo esc_url($avatar2); ?>" alt="<?php echo esc_attr($review2['name']); ?>"
                            class="avatar-img" />
                        <div class="d-flex flex-column">
                            <h6 class="fw-bold mb-1"><?php echo esc_html($review2['name']); ?></h6>
                            <small class="reviewer-company">
                                <?php echo esc_html($review2['company']); ?>
                            </small>
                        </div>

                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endfor; ?>
        </div>
    </div>












</section>