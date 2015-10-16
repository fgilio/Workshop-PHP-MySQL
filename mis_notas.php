<?php
include_once '_common.php';

$header_titulo = 'Mis Notas';

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

      include_once 'DB/DB_funciones.php';

      $notas = traer_notas_user( $_SESSION['user_ID'] );
      $html = '';


      if ( isset($notas[0]) ) {
        foreach ( $notas as $key => $value ) {
          $html .='<div class="g--4 g-s--12 fade-in-from-top card">';
            $html .='<h3>'. $value['nota_titulo'] .'</h3>';
            $html .='<p>'. $value['nota_contenido'] .'</p>';
            $html .='<a class="btn--flat" href="notas_editar.php?nota_ID='. $value['nota_ID'] .'">Editar</a>';
            $html .='<a class="btn--flat" href="notas_eliminar.php?nota_ID='. $value['nota_ID'] .'">Borrar</a>';
          $html .='</div>';
        }
      } else {
          $html .='<div class="g--4 g-s--12 fade-in-from-top card">';
            $html .='<h3>'. $notas['nota_titulo'] .'</h3>';
            $html .='<p>'. $notas['nota_contenido'] .'</p>';
            $html .='<a class="btn--flat" href="notas_editar.php?nota_ID='. $notas['nota_ID'] .'">Editar</a>';
            $html .='<a class="btn--flat" href="notas_eliminar.php?nota_ID='. $notas['nota_ID'] .'">Borrar</a>';
          $html .='</div>';        
      }
      echo $html;
      
      ?>
    </div>

  </main>

<?php include_once 'modulos/_footer.php' ?>

</body>
</hmtl>
