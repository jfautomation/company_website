<?php
if (!isset($carousel_id)) return;
?>

<div class="custom-carousel-container position-relative">
    <div class="custom-carousel-track" id="<?php echo esc_attr($carousel_id); ?>_track">
        <?php if (isset($carousel_content)) echo $carousel_content; ?>
    </div>
</div>

<div class="w-100 d-flex justify-content-end gap-2 mt-2">
    <span id="<?php echo esc_attr($carousel_id); ?>_prev" class="indicator-container bg-light cursor-pointer">
        <i class="bi bi-arrow-left"></i>
    </span>
    <span id="<?php echo esc_attr($carousel_id); ?>_next" class="indicator-container bg-light cursor-pointer">
        <i class="bi bi-arrow-right"></i>
    </span>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    initCarousel('<?php echo esc_js($carousel_id); ?>');
});
</script>