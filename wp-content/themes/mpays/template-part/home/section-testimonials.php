<?php
    $testimonialSectionGroup = get_field('testimonials_section');
    $testimonialSectionTitle = $testimonialSectionGroup['title'];
    $testimonialSectionInformation = $testimonialSectionGroup['info'];
    $testimonials = $testimonialSectionGroup['testimonials'];
  ?>
  <section class="testimonials">
    <div class="container">
      <h2 class="testimonials__title title">
        <?php echo $testimonialSectionTitle;?>
      </h2>
      <p class="testimonials__info section-info"><?php echo $testimonialSectionInformation;?></p>

      <div class="testimonials__slider">
        <?php foreach($testimonials as $testimonial) : ?>
        <?php
          $testimonialImage = $testimonial['image'];
          $testimonialImageUrl = $testimonialImage['url'];
          $testimonialImageAlt = $testimonialImage['alt'];
          $testimonialText = $testimonial['testimonial'];
          $testimonialName = $testimonial['name'];
          $testimonialPosition = $testimonial['position'];
        ?>
        <div>
          <div class="testimonial-card">
            <img class="testimonial-card__image" src="<?php echo $testimonialImageUrl;?>"
              alt="<?php echo $testimonialImageAlt;?>">
            <div class="testimonial-card__content">
              <img class="testimonial-card__icon" src="<?php echo PATH_TO_IMAGES . 'quote.svg';?>" alt="Ícone de aspas">
              <q class="testimonial-card__quote"><?php echo $testimonialText;?></q>
              <h3 class="testimonial-card__name"><?php echo $testimonialName;?></h3>
              <span class="testimonial-card__position"><?php echo $testimonialPosition;?></span>
            </div>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>
