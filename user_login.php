<?php
include_once '_common.php';

if ( !empty($_POST['user_email']) && !empty($_POST['user_pass'])) {

  # prepare data for insertion
  $user_email = filter_var( $_POST['user_email'], FILTER_SANITIZE_EMAIL );
  $user_pass = filter_var( $_POST['user_pass'], FILTER_SANITIZE_STRING );

  $error = '';

  $user = traer_usuario( $user_email, $user_pass );

  if ( !$user ) {
    $error = 'Email y/o Contraseña incorrectos';
  } else {

    $_SESSION['user_ID'] = $user['user_ID'];
    $_SESSION['user_email'] = $user['user_email'];

    redirect_to( '/taller_php/index.php' );

  }
}





$header_titulo = 'Iniciá Sesión';

?>
<!DOCTYPE html>
<html>

<?php include_once 'modulos/_head.php' ?>

<body>

<?php include_once 'modulos/_menu.php' ?>

  <main class="g--10 g-m--12 m--2 m-m--0 no-margin-vertical">

    <?php include_once 'modulos/_header.php' ?>

<!--    <div class="g--10 m--1">
      <h2 class="fade-in-from-top color--pink">Últimas Notas de la comunidad</h2>
    </div> -->

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

<?php include_once 'modulos/_footer.php' ?>

</body>
</hmtl>
