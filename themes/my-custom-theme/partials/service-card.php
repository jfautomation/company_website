<style>
  .white-card-with-icon {
    transition: box-shadow 0.3s ease;
  }

  .white-card-with-icon:hover {
    cursor: pointer;
  }

  .service-description {
    font-size: 0.9rem !important;
  }

  .card-header {
    font-size: 1.1rem !important;
    cursor: pointer;
  }

  .service-card-badge {
    position: absolute;
    right: 0;
    font-size: 0.8rem;
  }

  .arrow-container {
    margin-top: 2px;
  }

  .card-container {
    height: 3rem;
    width: 3rem;
    border-radius: 50%;
    background-color: #efeeee;
  }

  .service-img {
    height: 6rem;
  }

  .service-inner-span {
    cursor: pointer;
    position: absolute;
    z-index: 10;
    bottom: 0;
    background: linear-gradient(
      to right,
      rgba(58, 123, 213, 0.7),
      /* #3a7bd5 at 70% opacity */ rgba(22, 0, 160, 0.7)
        /* #1600a0 at 70% opacity */
    );
  }

  .service-image-container {
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem;
  }

  .service-image-container img {
    transition: transform 0.5s ease;
    display: block;
    width: 100%;
    height: auto;
    cursor: pointer;
  }

  .service-image-container .arrow-container {
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none; /* prevents arrow blocking hover */
  }

  .service-image-container:hover .arrow-container {
    opacity: 1;
    pointer-events: auto;
  }

  .service-image-container:hover img {
    transform: scale(1.1);
  }
</style>

<div class="col-12 col-md-4 mb-4 d-flex flex-column h-100">
  <div class="d-flex flex-column h-100">
    <?php if (!empty($args['image'])): ?>
    <div class="w-100 mb-3 position-relative service-image-container">
      <div
        class="service-inner-span d-flex gap-1 w-100 px-2 py-1 text-light fs-4"
      >
        <span class="service-inner-span-text"
          ><?php echo esc_html($args['service_heading']); ?>
        </span>
        <div class="arrow-container">
          <i class="bi bi-arrow-right-short"></i>
        </div>
      </div>
      <img
        src="<?php echo esc_url($args['image']); ?>"
        alt="<?php echo esc_attr($args['service_heading']); ?>"
        class="img-fluid rounded"
      />
    </div>
    <?php endif; ?>

    <div class="d-flex flex-column flex-grow-1 justify-content-between">
      <h6 class="card-header mt-2 fw-semibold">
        <?php echo esc_html($args['service_heading']); ?>
      </h6>

      <p class="mt-2 service-description text-grey">
        <?php echo esc_html($args['paragraph']); ?>
      </p>
    </div>
  </div>
</div>
