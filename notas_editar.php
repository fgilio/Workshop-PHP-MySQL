<?php
  // Incluimos el archivo que contiene utilidades generales
  include '_common.php';





  if ( !empty($_GET['nota_ID']) ) {

    if ( !empty($_GET['nota_titulo']) && !empty($_GET['nota_contenido'])) {

        $editar = editar_nota( $_GET['nota_ID'], $_GET['nota_titulo'], $_GET['nota_contenido'] );

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
      <h1 class="m--1 g--4 g-s--12">Editar Nota</h1>
    </header>
    <div class="g--10 m--1 container container--wrap--s">

      <?php

        $nota = traer_nota( $_GET['nota_ID'] );

      ?>

      <form class="card g--6 g-m--9 g-s--12 g-t--12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="g--12 no-margin-vertical">
          <input class="no-margin-vertical" type="text" name="nota_titulo" placeholder="Título" required value="<?php echo $nota['nota_titulo']; ?>" />
          <textarea class="g--10" name="nota_contenido" placeholder="Ingrese su aquí su Nota" required><?php echo $nota['nota_contenido']; ?></textarea>
        </div>
        <div class="g--12 no-margin-bottom">
          <input type="hidden" name="nota_ID" value="<?php echo $nota['nota_ID'] ?>" />
          <input class="btn--raised btn--primary" type='submit' name='submit' value='Guardar' />
        </div>
      </form>
    </div>

  </main>

</body>
</hmtl>
