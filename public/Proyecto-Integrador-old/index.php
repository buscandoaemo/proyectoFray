<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>The Boarding House Snow & Skate</title>
  <meta charset="utf-8">
  <meta lang="es-ar">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link href="./css/estilos.css" rel="stylesheet" type="text/css">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
  <link id="favicon" rel="shortcut icon" href="img/favicon.png" type="image/png" />
</head>
<body>
  <div class="container">
    <!-- Incluir Header por PHP -->
    <?php  include ("./php/header.php"); ?>

    <!-- Contenido -->
    <div class="sub-container">
      <!-- Item -->
      <article>
        <div class="contenedor-producto">
          <div class="producto-side1">
            <img src="img/casco.jpg" alt="Casco">
          </div>
          <div class="producto-side2">
            <h3>Cascos</h3>
            <p>Varios modelos con sus accesorios correspondientes</p>
            <div class="botones">
              <a href="#"><i class="fas fa-shopping-cart"></i> Comprar</a>
              <a href="#">Ver más</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Item -->
      <article>
        <div class="contenedor-producto">
          <div class="producto-side1">
            <img src="img/tabla.jpg" alt="Casco">
          </div>
          <div class="producto-side2 order-1">
            <h3>Tablas</h3>
            <p>Las ultimas tablas en un solo lugar</p>
            <div class="botones">
              <a href="#"><i class="fas fa-shopping-cart"></i> Comprar</a>
              <a href="#">Ver más</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Item -->
      <article>
        <div class="contenedor-producto">
          <div class="producto-side1">
            <img src="img/gopro.jpg" alt="Casco">
          </div>
          <div class="producto-side2">
            <h3>Accesorios</h3>
            <p>Todos los accesorios necesarios para ir a la montaña</p>
            <div class="botones">
              <a href="#"><i class="fas fa-shopping-cart"></i> Comprar</a>
              <a href="#">Ver más</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Marcas -->
      <div class="subtitulo">
        <h2>Nuestras marcas</h2>
      </div>
      <div class="marcas">
        <div class="fila-marcas">
          <img src="img/logo-burton.png" alt="Burton" class="marca">
          <img src="img/logo-ripcurl.png" alt="Rip Curl" class="marca">
          <img src="img/logo-vans.png" alt="Vans" class="marca">
          <img src="img/logo-volcom.png" alt="Volcom" class="marca">
        </div>
        <div class="fila-marcas">
          <img src="img/logo-gopro.png" alt="Go Pro" class="marca">
          <img src="img/logo-quicksilver.png" alt="Quick Silver" class="marca">
          <img src="img/logo-patagonia.png" alt="Patagonia" class="marca">
          <img src="img/logo-oakley.png" alt="Oakley" class="marca">
        </div>
        <div class="fila-marcas">
          <img src="img/logo-skullcandy.png" alt="Skullcandy" class="marca">
          <img src="img/logo-dc.png" alt="DC" class="marca">
          <img src="img/logo-salomon.png" alt="Salomon" class="marca">
          <img src="img/logo-oneill.png" alt="Oneill" class="marca">
        </div>
      </div>
    </div>

    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->
    <?php  include ("./php/footer.php"); ?>
  </div>
</body>
</html>
