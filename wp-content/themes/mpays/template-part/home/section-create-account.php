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
