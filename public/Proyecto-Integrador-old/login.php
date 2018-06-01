<?php

	include('./php/funciones.php');

	session_start();

	if (existeParametro('usuario',$_SESSION)) {
		header("Location: perfil.php");
		exit;
	}

	$email = valorParametro('email',$_POST);
	$password = valorParametro('password',$_POST);
	$infoUsuario = [];
	$error = false;
	$passwordError = false;

	if (existeParametro('submit', $_POST)) {
		if($email && $password) {
			$infoUsuario = infoUsuario($email);
			if ($infoUsuario['existe']) {
				if (password_verify($password, $infoUsuario['usuario']['password'] )) {
					$_SESSION['usuario'] = $infoUsuario['usuario'];
					if (existeParametro('recordarusuario', $_POST)) {
						setcookie('email',$email);
					} else {
						setcookie('email',$email, time()-3600);
					}
					header("Location: perfil.php");
					exit;
				} else {
					$error = true;
					$passwordError = true;
				}
			} else {
				$error = true;
			}
		} else {
			$error = true;
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión | The Boarding House Snow & Skate</title>
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
        <h2>Iniciar sesión</h2>
      </div>

      <!-- formulario -->
      <div class="modulo-form login">
        <div class="formulario">
          <form method="POST">
            <?php if($error && array_key_exists('existe', $infoUsuario) && !$infoUsuario['existe']): ?>
              <span class="error errorusuario"><i class="fas fa-exclamation-triangle"></i> Usuario no registrado</span>
            <?php endif; ?>
            <?php if($error && $passwordError): ?>
              <span class="error errorusuario"><i class="fas fa-exclamation-triangle"></i> Contraseña incorrecta</span>
            <?php endif; ?>
            <?php if($error && !$email):?>
      				<span class="error"> <i class="fas fa-exclamation-triangle"></i> Ingresar un email</span>
      			<?php endif; ?>
            <input type="email" name="email" value="<?= existeParametro('email', $_COOKIE) ? valorParametro('email', $_COOKIE) : $email ?>" class="<?= ($error && !$email) ? 'error':null ?>" placeholder="Email">
            <?php if($error && !$password):?>
      				<span class="error"><i class="fas fa-exclamation-triangle"></i> Ingresar una contraseña</span>
      			<?php endif; ?>
            <input type="password" name="password" value="" class="<?= ($error && !$password) ? 'error':null ?>"  placeholder="Contraseña">
						<label for="recordarusuario"><input type="checkbox" name="recordarusuario" value="recordar"><span class="ref">Recordar usuario</span></label>
            <button type="submit" name="submit">Ingresar</button>
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
