<?php
include_once '_common.php';

if ( !empty($_GET['nota_ID']) ) {

  $nota_ID_eliminada = eliminar_nota( $_GET['nota_ID'] );

  if ( $nota_ID_eliminada ) {

    redirect_to( '/taller_php/index.php' );

  }

}
