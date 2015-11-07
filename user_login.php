<?php
  // Incluimos el archivo que contiene utilidades generales
  include '_common.php';

  $error = '';

  if ( !empty($_POST['user_email']) && !empty($_POST['user_pass'])) {

    # prepare data for insertion
    $user_email = filter_var( $_POST['user_email'], FILTER_SANITIZE_EMAIL );
    $user_pass = filter_var( $_POST['user_pass'], FILTER_SANITIZE_STRING );

    if ( !filter_var($user_email, FILTER_VALIDATE_EMAIL) ) {
        $error = 'Ingresa un email válido';
    } else {

      $user = traer_usuario( $user_email, $user_pass );

      if ( !$user ) {
        $error = 'Email y/o Contraseña incorrectos';
        // Abajo, en el HTML, hacemos el echo de $error
      } else {

        $_SESSION['user_ID'] = $user['user_ID'];
        $_SESSION['user_email'] = $user['user_email'];

        redirect_to( '/mis_notas_app/index.php' );

      }

    }

  }

?>
<!DOCTYPE html>
<html>

  <?php include 'modulos/_head.php' ?>

<body>

  <?php include 'modulos/_menu.php' ?>

  <main class="g--10 g-m--12 m--2 m-m--0 no-margin-vertical">
    <header class="container--wrap">
      <h1 class="m--1 g--4 g-s--12">Iniciá Sesión</h1>
    </header>
    <div class="g--10 m--1 container container--wrap--s">
      <form class="card g--6 g-m--9 g-s--12 g-t--12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
          if ( isset($error) ) {
            echo $error;
          }
        ?>
        <div class="g--12 no-margin-vertical">
          <input  type="text" name="user_email" placeholder="Email" required>
          <input  type="password" name="user_pass" placeholder="Contraseña" required>
        </div>
        <div class="g--12 no-margin-bottom">
          <input class="btn--raised btn--primary" type='submit' name='submit' value='Iniciar Sesión' />
        </div>
      </form>
    </div>

  </main>

</body>
</hmtl>
