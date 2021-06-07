<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bikcraft - Bicicletas Personalizadas</title>

  <!-- Tags de SEO-->
  <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Bikcraft - Bicicletas Personalizadas"/>
  <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
  <meta property="og:url" content="http://bikcraft.com"/>
  <meta property="og:image" content="http://bikcraft.com/img/og-image.png"/>


  <!-- Estilos CSS-->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  
  <link rel="shortcut icon" href="./img/favicon.ico">

   <!-- SCRIPTS-->
    <script>
      document.documentElement.classList.add("js");
    </script>
</head>
<body>

  <!-- HEADER -->
  <header class="header">
    <div class="container">
      <a href="index.html" class="grid-4">
        <img src="img/bikcraft.svg" alt="Bikcraft">
      </a>
      <nav class="grid-12 header_menu">
        <ul>
          <li><a href="index.html" class="active_menu">Home</a></li>
          <li><a href="about.html">Sobre</a></li>
          <li><a href="products.html">Produtos</a></li>
          <li><a href="portfolio.html">Portfólio</a></li>
          <li><a href="contact.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- INTRODUCTION -->
  <section class="introduction">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
      <blockquote data-anime="800"  class="fadeInDown quote-external">
        <p>
          "não tenha nada em sua casa que você nâo considere útil ou acredite ser bonito"
        </p>
        <cite>WILLIAM MORRIS</cite>
      </blockquote>
      <a data-anime="1200" href="products.html" class="btn">Orçamento</a>
    </div>
  </section>

   <!-- PRODUCTS -->
  <section class="products container fadeInDown" data-anime="1600"> 
    <h2 class="subtitle">Produtos</h2>
    <ul class="products_list">
      
      <!-- List of walking products -->
      <li class="grid-1-3">
        <div class="products_icone">
          <img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
        </div>
        <h3>Passeio</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>

      <!-- List of sport products -->
      <li class="grid-1-3">
        <div class="products_icone"> 
          <img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
        </div>
        <h3>Esporte</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>

      <!-- List of retro products -->
      <li class="grid-1-3">
        <div class="products_icone">
          <img src="img/produtos/retro.svg" alt="Bikcraft Retro">
        </div>
        <h3>Retro</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
    </ul>

    <div class="call-to-action">
      <p>clique aqui para os detalhes dos produtos</p>
      <a href="products.html" class="btn btn-dark" >Produtos</a>
    </div>
  </section>

  <!-- PORTFOLIO -->
  <section class="portfolio">
    <div class="container">
      <h2 class="subtitle">Portfólio</h2>
      <ul class="portfolio_list">
        <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
        <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
        <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
      </ul>

      <div class="call-to-action">
        <p>conheça mais o nosso portfólio</p>
        <a href="portfolio.html" class="btn" >Portfólio</a>
      </div>
    </div>
  </section>

  <!-- QUALITY -->
  <section class="quality container">
    <h2 class="subtitle">Qualidade</h2>
    <img src="img/bikcraft-qualidade.svg" alt="Bikcraft Qualidade">
    <ul class="quality_list">
      <!-- Durability -->
      <li class="grid-1-3">
        <h3>Durabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>

      <!-- Desing -->
      <li class="grid-1-3">
        <h3>Desing</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>

      <!-- Sustainability -->
      <li class="grid-1-3">
        <h3>Sustentabilidade</h3>
        <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
      </li>
    </ul>

    <div class="call-to-action">
      <p>conheça mais a nossa história</p>
      <a href="about.html" class="btn btn-dark" >Sobre</a>
    </div>
  </section>
  
  <section class="break">
    <blockquote class="quote-external container">
      <p>
        "o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana"
      </p>
      <cite>WILLIAM MORRIS</cite>
    </blockquote>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer">
      <div class="container">

        <!-- About Us -->
        <div class="grid-8 footer_about">
          <h3>Nossa História</h3>
          <p>
            o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.
            Interrese por todos os detalher da vida cotidiana.
          </p>
        </div>

        <!-- Contact -->
        <div class="grid-4 footer_contact">
          <h3>Contato</h3>
          <ul>
            <li>- 21 23232-4343</li>
            <li>- contato@bikcraft.com</li>
            <li>- Botafogo - RJ</li>
          </ul>
        </div>

        <!-- Social Medias -->
        <div class="grid-4 footer_midias">
          <h3>Contato</h3>
          <ul>
            <!-- Facebook -->
            <li>
              <a href="http://facebook.com" target="_blank">
                <img src="img/redes-sociais/facebook.svg" alt="Facebook">
              </a>
            </li>

            <!-- Instagram -->
            <li>
              <a href="http://instagram.com" target="_blank">
                <img src="img/redes-sociais/instagram.svg" alt="Instagram">
              </a>
            </li>

            <!-- Twitter -->
            <li>
              <a href="http://twitter.com" target="_blank">
                <img src="img/redes-sociais/twitter.svg" alt="Twitter">
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="copy">
      <div class="container">
        <p class="grid-16">Bikcraft 2015 - Alguns direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="./js/simple-anime.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>