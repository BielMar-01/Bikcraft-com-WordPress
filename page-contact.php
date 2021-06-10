<?php
// Template Name: Contato
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- BUDEGT -->
  <section class="contact container fadeInDown" data-anime="1200">
    <form id="form_contact" method="POST" action="./enviar-sendgrid.php" class="form_contact grid-8 formphp">

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

      <button id="enviar" name="enviar" type="submit" class="btn btn-dark">Enviar</button>
    </form>

    <!-- BUDGET DATA -->
    <div class="contact_data contact_midias grid-8">
      <h3>Dados</h3>
      <span>+55 21 93223 3232</span>
      <span>orcamento@bikcraft.com</span>
      <span>Rua Ali Perto - Botafofo</span>
      <span>Rio de Janeiro - RJ - Brasil</span>
      <h3>Redes Sociais</h3>
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
  </section>
  
  <!-- MAPS -->
  <section class="container mapa_contact">
    <a class="grid-16" href="http://google.com" target="_blank"><img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
  </section>

  <?php endwhile; else: endif; ?>

<?php get_footer(); ?>