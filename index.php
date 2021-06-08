<?php get_header(); ?>

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
  
  <?php get_footer(); ?>