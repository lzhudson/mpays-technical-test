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
