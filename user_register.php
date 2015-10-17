<?php
  // Incluimos el archivo que contiene utilidades generales
  include '_common.php';

  if ( !empty($_POST['user_email']) && !empty($_POST['user_pass'])) {

    // Comprobamos las variables antes de guardar en la Base de Datos
    $user_email = filter_var( $_POST['user_email'], FILTER_SANITIZE_EMAIL );
    $user_pass = filter_var( $_POST['user_pass'], FILTER_SANITIZE_STRING );

    $error = '';

    $user_ya_existe = existe_usuario( $user_email );

    if ( $user_ya_existe ) {
      $error = 'Ese email ya está en uso';
    } else {

      $nuevo_user_ID = crear_usuario( $user_email, $user_pass );

      if ( $nuevo_user_ID ) {

        redirect_to( '/taller_php/user_login.php' );

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
      <h1 class="m--1 g--4 g-s--12">Registrate</h1>
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
          <input class="btn--raised btn--primary" type='submit' name='submit' value='Registrate' />
        </div>
      </form>
    </div>

  </main>

</body>
</hmtl>
