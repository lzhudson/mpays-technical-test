<?php get_header(); ?>
<main>
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
