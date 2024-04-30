<?php
  $groupFooter = get_field('footer', 'option');
  $copyrightText = $groupFooter['copyright_text'];
  $address = $groupFooter['address'];
  $socialLinks = $groupFooter['social_links'];
?>
  <footer class="footer">
    <div class="container">
      <div class="footer__info">
        <div class="footer__menus">
          <div class="footer-menu">
            <span class="footer-menu__title">
              Endereço
            </span>
            <address class="footer-menu__address">
              <?php echo $address;?>
            </address>
          </div>
          <div class="footer-menu">
            <span class="footer-menu__title">
              Legal
            </span>
            <?php
              wp_nav_menu( array(
                'theme_location' => 'legal-menu',
                'menu_id' => 'legal-menu',
                'menu_class' => 'footer-menu__list',
                'container' => false
              ));
            ?>
          </div>
          <div class="footer-menu">
            <span class="footer-menu__title">
              Contato
            </span>
            <?php
              wp_nav_menu( array(
                'theme_location' => 'contact-menu',
                'menu_id' => 'contact-menu',
                'menu_class' => 'footer-menu__list',
                'container' => false
              ));
            ?>
            <ul class="footer-menu__social-list">
              <?php foreach($socialLinks as $socialLink) : ?>
                <?php
                  $socialLinkName = $socialLink['name'];
                  $socialLinkNameInLowerCase = strtolower($socialLinkName);
                  $socialLinkUrl = $socialLink['link'];
                ?>
                <li class="footer-menu__item">
                  <a href="<?php echo $socialLinkUrl;?>" title="MPays <?php echo $socialLinkName;?> Link">
                    <img src="<?php echo PATH_TO_IMAGES . $socialLinkNameInLowerCase . '.svg';?>" alt="MPays <?php echo $socialLinkName;?>">
                  </a>
                </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="footer-menu">
            <span class="footer-menu__title">
              Aceitamos
            </span>
            <ul class="footer-menu__list-credit-card">
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'visa.svg';?>" alt="Bandeira Visa">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'mastercard.svg';?>" alt="Bandeira Mastercard">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'american-express.svg';?>" alt="Bandeira American Express">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'hipercard.svg';?>" alt="Bandeira Hipercard">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'elo.svg';?>" alt="Bandeira Elo">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'banes-card.svg';?>" alt="Bandeira Banes Crd">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'jcb.svg';?>" alt="Bandeira JCB">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'diners-club.svg';?>" alt="Bandeira Diners Club">
              </li>
              <li class="footer-menu__item">
                <img src="<?php echo PATH_TO_IMAGES . 'pix.svg';?>" alt="Logo Pix">
              </li>
            </ul>
            <span class="footer-menu__credit-info">*Demais cartões sob contratação.</span>
          </div>
        </div>
        <div class="footer__ratings">
          <img src="<?php echo PATH_TO_IMAGES . 'pci-compliant.png';?>" alt="PCI Compliant">
          <img src="<?php echo PATH_TO_IMAGES . 'reclame-aqui-rating.png';?>" alt="ReclameAqui Avaliação">
        </div>
      </div>

      <div class="footer__pre-copyright">
        <span class="footer__copyright-date">Copyright @ 2022 - <?php echo date("Y"); ?> mpays</span>
        <img src="<?php echo PATH_TO_IMAGES . 'logo-mpays-footer.svg';?>" alt="MPays Logo Footer">
      </div>
      <p class="footer__copyright">
        <?php echo $copyrightText;?>
      </p>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>
