<?php get_header(); ?>
<main>
  <section class="hero">
    <div class="container hero__container">
      <div class="hero__content">
        <h1 class="hero__title">Tecnologia e segurança pra você <strong>vender mais.</strong></h1>
        <p class="hero__info">
          Venda online com a segurança e tecnologia mpays. Soluções simples e
          flexíveis para digitalizar o seu negócio.
        </p>
      </div>
      <div class="hero__image-container">
        <img class="hero__image" src="<?php echo PATH_TO_IMAGES . 'hero-pc.png';?>"
          alt="Computador com o sistema Dippi">
      </div>
    </div>
  </section>
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
            var_dump($advantageImages);
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
  <?php
    $simulatorSectionGroup = get_field('simulator_section');
    $simulatorSectionTitle = $simulatorSectionGroup['title'];
    $simulatorSectionInformation = $simulatorSectionGroup['info'];
  ?>
  <section class="sales-simulator">
    <div class="container sales-simulator__container">
      <div class="sales-simulator__content">
        <h2 class="title">
          <?php echo $simulatorSectionTitle;?>
        </h2>
        <p class="section-info"><?php echo $simulatorSectionInformation;?></p>
      </div>
      <div class="simulator">
        <form class="simulator__form" action="">
          <div class="form-group">
            <label class="form-label" for="amount">
              Valor
            </label>
            <input class="form-input" id="amount" type="text" placeholder="R$ 1.000,00">
          </div>
          <div class="form-group">
            <label class="form-label" for="paymentMethod">
              Forma de pagamento
            </label>
            <select class="form-select" id="paymentMethod">
              <option value="">Crédito á vista</option>
              <option value="">Crédito á parcelado</option>
              <option value="">Pix</option>
            </select>
          </div>
        </form>
        <div class="simulator__results-container">
          <h3 class="simulator__title">Você recebe:</h3>
          <div class="simulator__results">
            <div class="simulator__result">
              <span class="simulator__result-label">Na hora</span>
              <span class="simulator__result-value">Não disponível</span>
            </div>
            <div class="simulator__result">
              <span class="simulator__result-label">Em 10 dias</span>
              <span class="simulator__result-value">R$ 949,70</span>
            </div>
            <div class="simulator__result">
              <span class="simulator__result-label">Em 30 dias</span>
              <span class="simulator__result-value">R$ 959,70</span>
            </div>
            <p class="simulator__result-info">
              Todas as simulações usam as taxas iniciais informadas no site.
              <img src="<?php echo PATH_TO_IMAGES . 'help-circle.svg';?>" alt="">
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
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

  <section class="create-account">
    <?php
      $createAccount = get_field('create_account_section');
      $createAccountTitle = $createAccount['title'];
      $createAccountInfo = $createAccount['info'];
    ?>
    <div class="container">
      <div class="create-account__content">
        <div>
          <h2 class="create-account__title title"><?php echo $createAccountTitle;?></h2>
          <p class="create-account__info section-info">
            <?php echo $createAccountInfo;?>
          </p>
        </div>
        <form class="create-account__form">
          <div class="form-group">
            <label class="form-label" for="full-name">
              Nome e sobrenome *
            </label>
            <input class="form-input" id="full-name" type="text" placeholder="Nome">
          </div>
          <div class="form-group">
            <label class="form-label" for="email">
              E-mail *
            </label>
            <input class="form-input" id="email" type="email" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label class="form-label" for="phone">
              Telefone *
            </label>
            <input class="form-input" id="phone" type="text" placeholder="Telefone">
          </div>
          <div class="form-group">
            <label class="form-label" for="password">
              Senha *
            </label>
            <input class="form-input" id="password" type="password" placeholder="⚉ ⚉ ⚉ ⚉ ⚉ ⚉ ⚉ ⚉">
          </div>
          <button class="create-account__form-submit" type="submit">Cadastrar</button>
        </form>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
