<?php
/**
 * TIP
 * Un servidor de Bases de Datos puede contener más de una Base de Datos
 * Por eso siempre especificamos a cual nos queremos conectar
 */


/**
 * Conectar con la Base de Datos
 */
function conectar_Base_de_Datos() {
  // Primero guardamos en variables la información de nuestra Base de Datos
  // La direccion del servidor
  $mysql_hostname = "localhost";
  // El user
  $mysql_user = "root";
  // La contraseña
  $mysql_password = "root";
  // El nombre de nuestra Base de Datos
  $database_name = "mis_notas_app";


  // mysqli_connect() se conecta con el servidor de la Base de Datos y selecciona una Base de Datos
  // Luego guarda la referencia de la conexion en la variable $conexion
  $conexion =  mysqli_connect( $mysql_hostname, $mysql_user, $mysql_password, $database_name );

  // Comprobamos si hubo un error
  if ( mysqli_connect_errno() ) {
    // Si hubo un error, hacemos un echo
    echo "No se pudo conectar a la Base de Datos.";
    echo "MySQL Error: ". mysqli_connect_error();
  } else {
    // Pero, si todo salio bien configuramos la conexion para que utilice el formato utf8, para poder usar acentos y demás caracteres especiales
    mysqli_set_charset( $conexion, "utf8" );
    // Y devolvemos la $conexion
    return $conexion;
  }
}




/**
 * Trae datos de la Base de Datos
 */
function leer_datos( $sql ) {
  // Nos conectamos a la Base de Datos y guardamos la referencia en la variable $conexion
  $conexion = conectar_Base_de_Datos();

  // Ejecutamos la consulta, y guardamos el resultado en la variable $resultado
  $resultado = mysqli_query( $conexion, $sql );

  // Comprobamos que la variable $resultado no esté vacía
  if ( !$resultado ) {
    // Si hubo un error, hacemos un echo
    echo "No se pudo ejecutar Consulta";
    echo 'MySQL Error: ' . mysqli_error( $conexion );
    // Y cerramos todo
    exit;
  } else {

    // Creamos la variable $resultado_final, va a ser un Array
    $resultado_final = array();

    // Cargamos los datos desde $resultado en $resultado_final
    while ( $row = mysqli_fetch_assoc( $resultado ) )
    {
      array_push( $resultado_final, $row );
    }
    if ( count($resultado_final) === 1 ) {
      $resultado_final = $resultado_final[0];
    }

    // Limpiamos la memoria
    mysqli_free_result( $resultado );
    // Cerramos la conexion a la Base de Datos
    mysqli_close( $conexion );
    // Devolvemos $resultado_final
    return $resultado_final;
  }
}




/**
 * Modificar datos de la Base de Datos
 */
function modificar_datos( $sql ) {
  // Nos conectamos a la Base de Datos y guardamos la referencia en la variable $conexion
  $conexion = conectar_Base_de_Datos();

  // Ejecutamos la consulta, y guardamos el resultado en la variable $resultado
  $resultado = mysqli_query( $conexion, $sql );

  // Comprobamos que la variable $resultado no esté vacia
  if ( !$resultado ) {
    // Si hubo un error, hacemos un echo
    echo "No se pudo ejecutar Consulta";
    echo 'MySQL Error: ' . mysqli_error( $conexion );
    // Y cerramos todo
    exit;
  } else {
    // Guardamos el ID de las rows modificadas
    $ID_row_modificada = mysqli_insert_id($conexion);
    // Cerramos la conexion a la Base de Datos
    mysqli_close( $conexion );
    // Devolvemos el ID de las rows modificadas
    return $ID_row_modificada;
  }
}




/**
 * Eliminar datos de la Base de Datos
 */
function eliminar_datos( $sql ) {
  // Nos conectamos a la Base de Datos y guardamos la referencia en la variable $conexion
  $conexion = conectar_Base_de_Datos();

  // Ejecutamos la consulta, y guardamos el resultado en la variable $resultado
  $resultado = mysqli_query( $conexion, $sql );

  // Comprobamos que la variable $resultado no esté vacia
  if ( !$resultado ) {
    // Si hubo un error, hacemos un echo
    echo "No se pudo ejecutar Consulta";
    echo 'MySQL Error: ' . mysqli_error( $conexion );
    // Y cerramos todo
    exit;
  } else {
    // Guardamos el ID de las rows eliminadas
    $ID_rows_eliminadas = mysqli_affected_rows($conexion);
    // Cerramos la conexion a la Base de Datos
    mysqli_close( $conexion );
    // Devolvemos el ID de las rows eliminadas
    return $ID_rows_eliminadas;
  }
}