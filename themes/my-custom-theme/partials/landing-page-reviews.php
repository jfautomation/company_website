<section class="container">
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
?>

   
     <h1><?php echo $averageRating ?></h1>
  

</section>