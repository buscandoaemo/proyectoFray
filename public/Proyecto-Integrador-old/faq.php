<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>FAQ | The Boarding House Snow & Skate</title>
  <meta charset="utf-8">
  <meta lang="es-ar">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link href="css/estilos.css" rel="stylesheet" type="text/css">
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

      <!-- titulo seccion -->
      <div class="titulo-seccion">
        <h2>Preguntas frecuentes</h2>
      </div>

      <!-- preguntas -->
      <div class="contenedor-preguntas">
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="fas fa-exchange-alt"></i>
          </div>
          <div class="side2">
            <h3>¿Puedo cambiar mi producto?</h3>
            <p>Si, tenés hasta 30 días desde que lo compraste para hacerlo. Una vez pasado ese plazo ya no se podrá efectuar dicha devolución.</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="far fa-comments"></i>
          </div>
          <div class="side2">
            <h3>¿Con quién y como me puedo asesorar a la hora de comprar?</h3>
            <p>Contamos con los mejores especialistas que te ayudarán a seleccionar el equipo adecuado a tus necesidades y gustos. Podés hacerlo a travez de asesor@snowboardinghouse.com</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="far fa-credit-card"></i>
          </div>
          <div class="side2">
            <h3>¿Cuales son los medios de pago?</h3>
            <p>Se puede abonar con VISA, AMEX, MASTERCARD y PAYPAL.</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="far fa-thumbs-up"></i>
          </div>
          <div class="side2">
            <h3>¿Es seguro operar online en este sitio dando mis datos personales?</h3>
            <p>Por supuesto, contamos con la mejor seguridad informática y las normas ISO sean cuales sean que lo avalan.</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="far fa-handshake"></i>
          </div>
          <div class="side2">
            <h3>¿Cuantos productos ofrecen en el store?</h3>
            <p>Contamos con más de 300 productos de las mejores marcas.</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="far fa-lightbulb"></i>
          </div>
          <div class="side2">
            <h3>¿Todos los productos tienen garantía?</h3>
            <p>Efectivamente, todos nuestros productos poseen garantía internacional. Trabajamos con las primeras marcas del mundo de los deportes de invierno.</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="fas fa-truck"></i>
          </div>
          <div class="side2">
            <h3>¿Hacemos envíos?</h3>
            <p>Si, por supuesto. Comprando de manera online, el pedido se enviará a la puerta de tu casa una vez que se acredite el pago.</p>
          </div>
        </div>
        <!-- preguntas -->
        <div class="pregunta">
          <div class="side1">
            <i class="fas fa-globe"></i>
          </div>
          <div class="side2">
            <h3>¿Hacemos envíos afuera de Capital Federal?</h3>
            <p>Efectivamente, hacemos envíos a toda Argentina y a países limítrofes.</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->
    <?php  include ("./php/footer.php"); ?>
  </div>
</body>
</html>
