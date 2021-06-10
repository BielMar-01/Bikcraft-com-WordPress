<?php
// Template Name: Produtos
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?> 

  <!-- PRODUCTS TOUR  -->
  <section class="container products_item fadeInDown" data-anime="1200">
    <div class="grid-11">
      <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
      <h2>Passeio</h2>
    </div>
    <div class="grid-5 products_icon"> 
      <img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
    </div>
    <div class="grid-8">
      <img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
    </div>
    <div class="grid-8 products_info">
      <p>
        No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula da gestão inovadora de qual fazemos parte.
      </p>
      <ul>
        <li>Conforto</li>
        <li>Velocidade</li>
        <li>Desing</li>
        <li>Versatilidade</li>
      </ul>
    </div>
  </section>

  <!-- PRODUCTS SPORT  -->
  <section class="container products_item">
    <div class="grid-11">
      <img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
      <h2>ESPORTE</h2>
    </div>
    <div class="grid-5 products_icon"> 
      <img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
    </div>
    <div class="grid-8">
      <img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte">
    </div>
    <div class="grid-8 products_info">
      <p>
        No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula da gestão inovadora de qual fazemos parte.
      </p>
      <ul>
        <li>Conforto</li>
        <li>Velocidade</li>
        <li>Desing</li>
        <li>Versatilidade</li>
      </ul>
    </div>
  </section>

  <!-- PRODUCTS RETRO  -->
  <section class="container products_item">
    <div class="grid-11">
      <img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retro">
      <h2>Retro</h2>
    </div>
    <div class="grid-5 products_icon"> 
      <img src="img/produtos/retro.svg" alt="Bikcraft Retro">
    </div>
    <div class="grid-8">
      <img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retro">
    </div>
    <div class="grid-8 products_info">
      <p>
        No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formula da gestão inovadora de qual fazemos parte.
      </p>
      <ul>
        <li>Conforto</li>
        <li>Velocidade</li>
        <li>Desing</li>
        <li>Versatilidade</li>
      </ul>
    </div>
  </section>

  <!-- BUDEGT -->
  <section class="budget">
    <div class="container">
      <h2 class="subtitle">Orçamento</h2>
      <form id="form_budget" method="POST" action="./enviar-sendgrid.php" class="form_budget grid-8 formphp">

        <!-- Name -->
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>

      <!-- E-mail -->
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required>

      <!-- Telephone -->
      <label for="telefone">Telefone</label>
      <input type="text" id="telefone" name="telefone">

      <!-- Anti Robs -->
      <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
      <input type="text" name="leaveblank" class="nao-aparece">

      <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
      <input type="text" name="dontchange" value="http://" class="nao-aparece">

      <!-- Specifications -->
      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" required></textarea>

      <button id="enviar" name="enviar" type="submit" class="btn ">Enviar</button>
      </form>

      <!-- BUDGET DATA -->
      <div class="budget_data grid-8">
        <h3>Dados</h3>
        <span>+55 21 93223 3232</span>
        <span>orcamento@bikcraft.com</span>
        <h3>Monte a sua Bikcraft</h3>
        <p>Escolha as especificações:</p>
        <ul>
          <li>- Cores</li>
          <li>- Estilo</li>
          <li>- Medidas</li>
          <li>- Acessórios</li>
          <li>- E Outros</li>
        </ul>
      </div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>
  
  <?php get_footer(); ?>