<?php
  // Incluimos el archivo que contiene utilidades generales
  include '_common.php';

  // Cerramos la Sesión de PHP
  session_destroy();

  // Redirigimos a la Home
  redirect_to( '/mis_notas_app/index.php' );