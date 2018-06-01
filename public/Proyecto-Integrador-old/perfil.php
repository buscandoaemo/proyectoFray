<?php

	include('./php/funciones.php');

	session_start();

	if (!existeParametro('usuario',$_SESSION)) {
		header("Location: login.php");
		exit;
	}

	$usuario = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenido <?= $usuario['nombre'] ?> | The Boarding House Snow & Skate</title>
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
        <h2>Bienvenido <?= $usuario['nombre'] ?></h2>
      </div>

      <!-- formulario -->
      <div class="modulo-form trama">
        <div class="formulario perfil">
          <div class="avatar" style="background-image: url(<?= $usuario['imagen']?>);"></div>
          <div class="datos">
            <p>Nombre:<br> <?= $usuario['nombre'] ?> <?= $usuario['apellido'] ?></p>
            <p>Email:<br> <?= $usuario['email'] ?></p>
						<p>Domicilio:<br> <?= $usuario['domicilio'] ?>,<br><?= $usuario['localidad'] ?></p>
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
