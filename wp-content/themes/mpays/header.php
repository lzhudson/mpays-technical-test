<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="container header__container">
      <button class="header__hamburguer-menu" title="Abrir menu">
        <img src="<?php echo PATH_TO_IMAGES . 'hamburguer-icon.svg';?>" alt="Ícone do menu hamburger">
      </button>
      <div class="header__logo-container">
        <img class="header__logo" src="<?php echo PATH_TO_IMAGES . 'logo-mpays-header.svg';?>" alt="MPays Logo">
      </div>
      <nav class="header__nav">
        <button class="header__close-menu" title="Fechar menu">
          <img src="<?php echo PATH_TO_IMAGES . 'close-icon.svg';?>" alt="Ícone de fechar o menu">
        </button>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'menu_id' => 'main-menu',
            'menu_class' => 'menu',
            'container' => false
          ));
        ?>
        <a class="header__link" href="">
          Entrar
        </a>
      </nav>
      <a class="header__link-user" href="">
        <img src="<?php echo PATH_TO_IMAGES . 'user-icon.svg';?>" alt="Ícone de usuário">
      </a>
    </div>
  </header>
