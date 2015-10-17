<?php
  // Incluimos el archivo que contiene utilidades generales
  include '_common.php';





  if ( !empty($_GET['nota_titulo']) && !empty($_GET['nota_contenido'])) {

    include 'DB/DB_funciones.php';

    $nueva_nota_ID = crear_nota( $_SESSION['user_ID'], $_GET['nota_titulo'], $_GET['nota_contenido'] );

    if ( $nueva_nota_ID ) {

      redirect_to( '/mis_notas_app/notas_editar.php?nota_ID='. $nueva_nota_ID );

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
      <h1 class="m--1 g--4 g-s--12">Nueva Nota</h1>
    </header>
    <div class="g--10 m--1 container container--wrap--s">

      <form class="card g--6 g-m--9 g-s--12 g-t--12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="g--12 no-margin-vertical">
          <input class="no-margin-vertical" type="text" name="nota_titulo" placeholder="Título" required />
          <textarea class="g--10" name="nota_contenido" placeholder="Ingrese su aquí su Nota" required></textarea>
        </div>
        <div class="g--12 no-margin-bottom">
          <input class="btn--raised btn--primary" type='submit' name='submit' value='Guardar' />
        </div>
      </form>
    </div>

  </main>

</body>
</hmtl>
