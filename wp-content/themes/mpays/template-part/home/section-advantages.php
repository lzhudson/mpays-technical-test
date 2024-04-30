<section class="advantages">
    <div class="container">
      <div class="advantages__slider">
        <?php
          $advantagesSectionGroup = get_field('advantages_section');
          $advantages = $advantagesSectionGroup['advantages'];
        ?>
        <?php foreach($advantages as $advantage) : ?>
          <?php
            $advantageTitle = $advantage['title'];
            $advantageInformation = $advantage['information'];
            $advantageLink = $advantage['link'];
            $advantageLinkText = $advantageLink['text'];
            $advantageLinkUrl = $advantageLink['url'];
            $advantageImages = $advantage['images'];
            $advantageImageMobile = $advantageImages['image_mobile'];
            $advantageImageDesktop = $advantageImages['image_desktop'];
            $advantageMobileUrl = $advantageImageMobile['url'];
            $advantageMobileAlt = $advantageImageMobile['alt'];
            $advantageDesktopUrl = $advantageImageDesktop['url'];
            $advantageDesktopAlt = $advantageImageDesktop['alt'];
          ?>
          <div>
            <div class="advantage-card">
              <div class="advantage-card__content">
                <h2 class="advantage-card__title"><?php echo $advantageTitle;?></h2>
                <p class="advantage-card__info">
                  <?php echo $advantageInformation;?>
                </p>
                <a class="advantage-card__link" href="<?php echo $advantageLinkUrl;?>"><?php echo $advantageLinkText;?></a>
              </div>
              <div class="advantage-card__image-container">
                <picture>
                  <source media="(min-width: 769px)" srcset="<?php echo $advantageDesktopUrl;?>">
                  <source media="(max-width: 768px)"
                    srcset="<?php echo $advantageMobileUrl;?>">
                  <img class="advantage-card__image" src="<?php echo $advantageDesktopUrl;?>"
                    alt="<?php echo $advantageDesktopAlt;?>">
                </picture>
              </div>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>
