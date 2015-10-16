<?php
include_once 'DB/DB_funciones.php';
session_start();

function logged_in() {
  if ( isset($_SESSION['user_ID']) && isset($_SESSION['user_email']) ) {
    return true;
  } else {
    return false;
  }
}

function redirect_to( $url ) {
  header("Location: $url");
}