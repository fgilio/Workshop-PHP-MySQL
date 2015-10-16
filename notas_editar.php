<?php
include_once '_common.php';

$header_titulo = 'Editar Nota';





if ( !empty($_GET['nota_ID']) ) {

  if ( !empty($_GET['nota_titulo']) && !empty($_GET['nota_contenido'])) {

      $editar = editar_nota( $_GET['nota_ID'], $_GET['nota_titulo'], $_GET['nota_contenido'] );

  }

}

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

<?php include_once 'modulos/_footer.php' ?>

</body>
</hmtl>
