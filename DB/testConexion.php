<?php

include_once 'DB_conexion.php'; 

if( conectar() ) {
  echo "Connection established.<br />";     
} else {
  echo "Connection could not be established.<br />";     
}