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
        <img class="hero__image" src="<?php echo PATH_TO_IMAGES . 'hero-pc.png';?>" alt="Computador com o sistema Dippi">
      </div>
    </div>
  </section>
  <section class="advantages">
    <div class="container">
      <div class="advantages__slider">
        <div>
          <div class="advantage-card">
            <div class="advantage-card__content">
              <h2 class="advantage-card__title">Pagamentos com máxima aprovação</h2>
              <p class="advantage-card__info">
                Venda online com a maior taxa de aprovação possível. Reduza o número de vendas recusadas, autorize o
                maior
                número de pagamentos, receba e gerencie seu dinheiro de forma flexível.
              </p>
              <a class="advantage-card__link" href="">Cadastre-se</a>
            </div>
            <div class="advantage-card__image-container">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo PATH_TO_IMAGES . 'background-slider.png';?>">
                <source media="(max-width: 768px)"
                  srcset="<?php echo PATH_TO_IMAGES . 'background-slider-mobile.png';?>">
                <img class="advantage-card__image" src="<?php echo PATH_TO_IMAGES . 'background-slider.png';?>"
                  alt="Homem utilizando computador">
              </picture>
            </div>
          </div>
        </div>
        <div>
          <div class="advantage-card">
            <div class="advantage-card__content">
              <h2 class="advantage-card__title">Pagamentos com máxima aprovação</h2>
              <p class="advantage-card__info">
                Venda online com a maior taxa de aprovação possível. Reduza o número de vendas recusadas, autorize o
                maior
                número de pagamentos, receba e gerencie seu dinheiro de forma flexível.
              </p>
              <a class="advantage-card__link" href="">Cadastre-se</a>
            </div>
            <div class="advantage-card__image-container">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo PATH_TO_IMAGES . 'background-slider.png';?>">
                <source media="(max-width: 768px)"
                  srcset="<?php echo PATH_TO_IMAGES . 'background-slider-mobile.png';?>">
                <img class="advantage-card__image" src="<?php echo PATH_TO_IMAGES . 'background-slider.png';?>"
                  alt="Homem utilizando computador">
              </picture>
            </div>
          </div>
        </div>
        <div>
          <div class="advantage-card">
            <div class="advantage-card__content">
              <h2 class="advantage-card__title">Pagamentos com máxima aprovação</h2>
              <p class="advantage-card__info">
                Venda online com a maior taxa de aprovação possível. Reduza o número de vendas recusadas, autorize o
                maior
                número de pagamentos, receba e gerencie seu dinheiro de forma flexível.
              </p>
              <a class="advantage-card__link" href="">Cadastre-se</a>
            </div>
            <div class="advantage-card__image-container">
              <picture>
                <source media="(min-width: 769px)" srcset="<?php echo PATH_TO_IMAGES . 'background-slider.png';?>">
                <source media="(max-width: 768px)"
                  srcset="<?php echo PATH_TO_IMAGES . 'background-slider-mobile.png';?>">
                <img class="advantage-card__image" src="<?php echo PATH_TO_IMAGES . 'background-slider.png';?>"
                  alt="Homem utilizando computador">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sales-simulator">
    <div class="container sales-simulator__container">
      <div class="sales-simulator__content">
        <h2 class="title">
          Simulador de vendas mpays
        </h2>
        <p class="section-info">Veja quanto você recebe nas vendas no crédito, débito e parcelado.</p>
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
  <section class="testimonials">
    <div class="container">
      <h2 class="testimonials__title title">
        Depoimentos
      </h2>
      <p class="testimonials__info section-info">O suporte ao cliente é nossa primeira prioridade.</p>

      <div class="testimonials__slider">
        <div>
          <div class="testimonial-card">
            <img class="testimonial-card__image" src="<?php echo PATH_TO_IMAGES . 'carlos-eduardo-amaral.png';?>"
              alt="Foto do Carlos Eduardo Amaral">
            <div class="testimonial-card__content">
              <img class="testimonial-card__icon" src="<?php echo PATH_TO_IMAGES . 'quote.svg';?>" alt="Ícone de aspas">
              <q class="testimonial-card__quote">A mpays foi a plataforma onde eu tive a maior taxa de aprovação de
                crédito
                do mercado.</q>
              <h3 class="testimonial-card__name">Carlos Eduardo Amaral</h3>
              <span class="testimonial-card__position"><abbr title="Chief Executive Officer">CEO</abbr> da Amaral
                Mídia</span>
            </div>
          </div>
        </div>
        <div>
          <div class="testimonial-card">
            <img class="testimonial-card__image" src="<?php echo PATH_TO_IMAGES . 'carlos-eduardo-amaral.png';?>"
              alt="Foto do Carlos Eduardo Amaral">
            <div class="testimonial-card__content">
              <img class="testimonial-card__icon" src="<?php echo PATH_TO_IMAGES . 'quote.svg';?>" alt="Ícone de aspas">
              <q class="testimonial-card__quote">A mpays foi a plataforma onde eu tive a maior taxa de aprovação de
                crédito
                do mercado.</q>
              <h3 class="testimonial-card__name">Carlos Eduardo Amaral</h3>
              <span class="testimonial-card__position"><abbr title="Chief Executive Officer">CEO</abbr> da Amaral
                Mídia</span>
            </div>
          </div>
        </div>
        <div>
          <div class="testimonial-card">
            <img class="testimonial-card__image" src="<?php echo PATH_TO_IMAGES . 'carlos-eduardo-amaral.png';?>"
              alt="Foto do Carlos Eduardo Amaral">
            <div class="testimonial-card__content">
              <img class="testimonial-card__icon" src="<?php echo PATH_TO_IMAGES . 'quote.svg';?>" alt="Ícone de aspas">
              <q class="testimonial-card__quote">A mpays foi a plataforma onde eu tive a maior taxa de aprovação de
                crédito
                do mercado.</q>
              <h3 class="testimonial-card__name">Carlos Eduardo Amaral</h3>
              <span class="testimonial-card__position"><abbr title="Chief Executive Officer">CEO</abbr> da Amaral
                Mídia</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="create-account">
    <div class="container">
      <div class="create-account__content">
        <div>
          <h2 class="create-account__title">Criar sua conta</h2>
          <p class="create-account__info">
            Preencha o formulário ao lado para cadastrar-se no mpays.
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
