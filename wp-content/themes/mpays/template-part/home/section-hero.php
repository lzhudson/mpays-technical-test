<?php
    $mainSectionGroup = get_field('main_section');
    $mainSectionTitle = $mainSectionGroup['title'];
    $mainSectionInformation = $mainSectionGroup['info'];
  ?>
  <section class="hero">
    <div class="container hero__container">
      <div class="hero__content">
        <h1 class="hero__title"><?php echo $mainSectionTitle;?></h1>
        <p class="hero__info">
          <?php echo $mainSectionInformation;?>
        </p>
      </div>
      <div class="hero__image-container">
        <img class="hero__image" src="<?php echo PATH_TO_IMAGES . 'hero-pc.png';?>"
          alt="Computador com o sistema Dippi">
      </div>
    </div>
  </section>
