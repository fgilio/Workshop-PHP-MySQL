<?php
/**
 * TIP
 * Un servidos de Bases de Datos puede contener más de una Base de Datos
 * Por eso siempre especificamos a cual nos queremos conectar
 */



function conectar_Base_de_Datos()
{
  // Primero guardamos en variables la información de nuestra Base de Datos
  // La direccion del servidor y el puerto
  $mysql_hostname = "localhost:3306";
  // El user
  $mysql_user = "root";
  // La contraseña
  $mysql_password = "";
  // El nombre de nuestra Base de Datos
  $database_name = "mis_notas_app";


  // mysqli_connect() se conecta con el servidor de la Base de Datos y selecciona una Base de Datos
  // Luego guarda la referencia de la conexion en la variable $conexion
  $conexion =  mysqli_connect( $mysql_hostname, $mysql_user, $mysql_password, $database_name );
  mysqli_set_charset( $conexion, "utf8" );

  // Comprobamos si hubo un error
  if ( mysqli_connect_errno() ) {
    // Si hubo un error, hacemos un echo
    echo "No se pudo conectar a la Base de Datos.";
    echo "MySQL Error: ". mysqli_connect_error();
  } else {
    // Pero, si todo salio bien devolvemos la $conexion
    return $conexion;
  }

  // die('No se pudo seleccionar Base de Datos');
}





// Envia datos de la Base de Datos
function leer_datos( $sql )
{
  $conexion = conectar_Base_de_Datos();
  
  $resultado = mysqli_query( $conexion, $sql );

  if ( !$resultado ) {
      echo "No se pudo ejecutar Consulta";
      echo 'MySQL Error: ' . mysqli_error( $conexion );
      exit;
  }

  // print_r( mysqli_fetch_assoc( $resultado ) );

  $resultado_final = array();

  // echo count( mysqli_fetch_assoc( $resultado ));


  while ( $row = mysqli_fetch_assoc( $resultado ) )
  {
    array_push( $resultado_final, $row );
  }
  if ( count($resultado_final) === 1 ) {
    // echo "</br>";
    // print_r( $resultado_final );
    // echo "</br>";
    $resultado_final = $resultado_final[0];
    // $resultado_final = mysqli_fetch_assoc( $resultado );
  }
  

  // $resultado_final = mysqli_fetch_assoc( $resultado );

  mysqli_free_result( $resultado );
  mysqli_close( $conexion );
  return $resultado_final;
}





// Modificar datos de la Base de Datos
function modificar_datos( $sql )
{
  $conexion = conectar_Base_de_Datos();
  
  $resultado = mysqli_query( $conexion, $sql );

  if ( !$resultado ) {
    echo "No se pudo ejecutar Consulta";
    echo 'MySQL Error: ' . mysqli_error( $conexion );
    exit;
  } else {
    $id = mysqli_insert_id($conexion);
    mysqli_close( $conexion );
    return $id;
  }
}





// Eliminar datos de la Base de Datos
function eliminar_datos( $sql )
{
  $conexion = conectar_Base_de_Datos();
  
  $resultado = mysqli_query( $conexion, $sql );

  if ( !$resultado ) {
    echo "No se pudo ejecutar Consulta";
    echo 'MySQL Error: ' . mysqli_error( $conexion );
    exit;
  } else {
    $affected_rows = mysqli_affected_rows($conexion);
    mysqli_close( $conexion );
    return $affected_rows;
  }
}