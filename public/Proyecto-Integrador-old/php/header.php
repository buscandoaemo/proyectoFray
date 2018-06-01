    <header>
      <a href="index.php" class="logo"><img src="img/logo.png" alt="The Boarding House Snow & Skate"/></a>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <?php if(!array_key_exists('usuario', $_SESSION)):?>
          <li><a href="registro.php">Registrarse</a></li>
          <li><a href="login.php">Login</a></li>
          <?php else:?>
          <li><a href="perfil.php"><i class="fas fa-user-circle iconuser"></i> <?= $_SESSION['usuario']['nombre'] ?></a></li>
          <li><a href="logout.php">Logout</a></li>
          <li class="cart"><a href="login.php"><i class="icono fas fa-shopping-cart"></i></a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
