<input type="checkbox" id="nav--super-vertical-responsive">
<label for="nav--super-vertical-responsive">MENU</label>
<aside class="nav--super-vertical g--2 g-m--3 g-s--6 g-t--12 no-margin-vertical">
  <div class="g--12 logo-area no-margin-vertical">
    <a href="index.php"><h2 class="color--pink no-margin-vertical">Mis Notas App!</h2></a>
  </div>
  <nav class="g--12 no-margin-vertical">
    <a href="index.php">Home</a>
    <?php
      // Creamos una variable vacia para contener el HTML
      $html = '';
      // Comprovamos si el usuario está logueado
      if ( logged_in() ) {
        // Si está logueado mostramos los botones correspondientes
        $html .= '<a href="mis_notas.php">Mis Notas</a>';
        $html .= '<a href="notas_crear.php">Nueva Nota</a>';
        $html .= '<a href="user_logout.php">Cerrar Sesión</a>';
        $html .= '<p class="m--1 g--4 g-s--12 subtitle fade-in-from-left">User: </br>'. $_SESSION['user_email'] .'</p>';
      } else {
        // Si no está logueado, lo invitamos a Registrarse o Iniciar Sesión
        $html .= '<a href="user_register.php">Registrarse</a>';
        $html .= '<a href="user_login.php">Iniciar Sesión</a>';
      }
      // Hacemos el echo del HTML
      echo $html;
    ?>
  </nav>
</aside>