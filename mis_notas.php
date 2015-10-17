<?php
  // Incluimos el archivo que contiene utilidades generales
  include '_common.php';

?>
<!DOCTYPE html>
<html>

  <?php include 'modulos/_head.php' ?>

<body>

  <?php include 'modulos/_menu.php' ?>

  <main class="g--10 g-m--12 m--2 m-m--0 no-margin-vertical">
    <header class="container--wrap">
      <h1 class="m--1 g--4 g-s--12">Mis Notas</h1>
    </header>
    <div class="g--10 m--1 container container--wrap--s">
      <?php

        $notas = traer_notas_user( $_SESSION['user_ID'] );
        $html = '';


        if ( mas_de_una_nota($notas) ) {
          foreach ( $notas as $nota ) {
            $html .='<div class="g--4 g-s--12 fade-in-from-top card">';
            $html .='<h3>'. $nota['nota_titulo'] .'</h3>';
            $html .='<p>'. $nota['nota_contenido'] .'</p>';
            $html .='<a class="btn--flat" href="notas_editar.php?nota_ID='. $nota['nota_ID'] .'">Editar</a>';
            $html .='<a class="btn--flat" href="notas_eliminar.php?nota_ID='. $nota['nota_ID'] .'">Borrar</a>';
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
        // Hacemos el echo del HTML
        echo $html;      
      ?>
    </div>

  </main>

</body>
</hmtl>
