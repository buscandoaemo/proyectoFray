<?php

	include('./php/funciones.php');

	session_start();

	if (existeParametro('usuario',$_SESSION)) {
		header("Location: perfil.php");
		exit;
	}

	$nombre = valorParametro('nombre',$_POST);
  $apellido = valorParametro('apellido',$_POST);
	$email = valorParametro('email',$_POST);
	$password = valorParametro('password',$_POST);
	$domicilio = valorParametro('domicilio',$_POST);
	$localidad = valorParametro('localidad',$_POST);
	$existeFile = existeFileSinError('imagen');
	$infoUsuario = [];
	$error = false;

	if (existeParametro('submit', $_POST)) {
		if ($nombre && $apellido && $email && $password && $domicilio && $localidad && $existeFile) {
			$infoUsuario = infoUsuario($email);
			if ($infoUsuario['existe']) {
				$error = true;
			} else{
				guardarUsuario([
					'nombre'=>$nombre,
          'apellido'=>$apellido,
					'email' => $email,
					'password' => password_hash($password,PASSWORD_DEFAULT),
					'domicilio' => $domicilio,
					'localidad' => $localidad,
					'id' => $infoUsuario['proximoId']+1,
					'imagen' => guardarAvatar('imagen')
				]);
				header("Location: login.php");
				exit;
			}
		} else {
			$error = true;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro | The Boarding House Snow & Skate</title>
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
        <h2>Nuevo usuario</h2>
      </div>

      <!-- formulario -->
      <div class="modulo-form registro">
        <div class="formulario">
            <p>Complete con sus datos el siguiente formulario</p>
          <form method="POST" enctype="multipart/form-data">
            <?php if($error && array_key_exists('existe', $infoUsuario) && $infoUsuario['existe']): ?>
              <span class="error errorusuario"><i class="fas fa-exclamation-triangle"></i> El usuario ya existe</span>
            <?php endif; ?>
            <?php if($error && !$nombre):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar un nombre</span>
      			<?php endif; ?>
            <input type="text" name="nombre" value="<?= $nombre ?>" class="<?= ($error && !$nombre) ? 'error':null ?>" placeholder="Nombre*">
            <?php if($error && !$apellido):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar un apellido</span>
      			<?php endif; ?>
            <input type="text" name="apellido" value="<?= $apellido ?>" class="<?= ($error && !$apellido) ? 'error':null ?>"   placeholder="Apellido*">
            <?php if($error && !$email):?>
      				<span class="error"> <i class="fas fa-exclamation-triangle"></i> Ingresar un email</span>
      			<?php endif; ?>
            <input type="email" name="email" value="<?= $email ?>" class="<?= ($error && !$email) ? 'error':null ?>" placeholder="Email*">
            <?php if($error && !$password):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar una contraseña</span>
      			<?php endif; ?>
            <input type="password" name="password" value="" class="<?= ($error && !$password) ? 'error':null ?>"  placeholder="Contraseña*">
						<?php if($error && !$domicilio):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar un domicilio</span>
      			<?php endif; ?>
						<input type="text" name="domicilio" value="<?= $domicilio ?>" class="<?= ($error && !$domicilio) ? 'error':null ?>" placeholder="Domicilio*">
						<?php if($error && !$localidad):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar una localidad</span>
      			<?php endif; ?>
						<input type="text" name="localidad" value="<?= $localidad ?>" class="<?= ($error && !$localidad) ? 'error':null ?>"  placeholder="Localidad*">
            <?php if($error && !$existeFile):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar una imagen de perfil</span>
      			<?php endif; ?>
            <input type="file" name="imagen" class="file custom-file-input <?= ($error && !$existeFile) ? 'error':null ?>">
            <button type="submit" name="submit">Registrarse</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Fin Contenido -->

    <!-- Incluir Footer por PHP -->
    <?php  include ("./php/footer.php"); ?>
  </div>
</body>
</html>
