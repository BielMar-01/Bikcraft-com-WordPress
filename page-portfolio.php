<?php
// Template Name: Portfolio
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

  <!-- BLOCKQUOTE -->
  <section class="container fadeInDown" data-slide="quote" data-anime="1200">
    <blockquote class="quote_portfolio">
      <p>"No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte."</p>
      <cite>Barbara Moss</cite>
    </blockquote>

    <blockquote class="quote_portfolio">
    <p>"Nada melhor do que dar um rolê com a minha Bikcraft na orla.
      Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição."</p>
      <cite>Jhony Rato</cite>
    </blockquote>

    <blockquote class="quote_portfolio">
    <p>"Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental. Nunca vi nada igual."</p>
      <cite>Bernardo</cite>
    </blockquote>
  </section>

  <!-- PORTFOLIO -->
  <section class="portfolio fadeInDown" data-anime="1600">
    <div class="container" data-slide="portfolio" >
      <ul class="portfolio_list">
        <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
        <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
        <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
      </ul>

      <ul class="portfolio_list">
        <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
        <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
        <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
      </ul>
    </div>
  </section>

  <?php endwhile; else: endif; ?>
  
  <?php get_footer(); ?>