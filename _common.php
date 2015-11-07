<?php
  // Inicializa la Sesión de PHP
  session_start();

  // Primero incluimos el archivo que contiene las funciones para intereactuar con la Base de Datos
  include 'DB/DB_conexion.php';
  // Luego incluimos los archivos con las funciones especificas que necesitamos para manipular Usuarios y Notas
  include 'DB/DB_funciones_usuarios.php';
  include 'DB/DB_funciones_notas.php';


  // Redirige a una URL
  function redirect_to( $url ) {
    header("Location: $url");
  }


  // Comprueba que un usuario está logueado
  function logged_in() {
    if ( isset($_SESSION['user_ID']) && isset($_SESSION['user_email']) ) {
      return true;
    } else {
      return false;
    }
  }


  // Comprueba si el Array contiene más de 1 Nota
  function hay_mas_de_una_nota($notas) {
    if ( isset($notas[0]) ) {
      return true;
    } else {
      return false;
    }
  }