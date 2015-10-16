<?php

// Primero incluimos el archivo que contiene las funciones para intereactuar con la Base de Datos
include_once 'DB_conexion.php';



/**
 * Trae la lista de Usuarios
 * Usa:     
 * Retorna: Users
 */
function traer_usuarios() {
  return leer_datos( 'SELECT * FROM usuarios;' );
}

/**
 * Trae un Usuario
 * Usa:     $user_email y $user_pass
 * Retorna: User
 */
function traer_usuario( $user_email, $user_pass ) {
  return leer_datos( "SELECT * FROM usuarios WHERE user_email='$user_email' AND user_pass='$user_pass';" );
}

/**
 * Comprueba que exista un Usuario
 * Usa:     $user_email
 * Retorna: user_ID
 */
function existe_usuario( $user_email ) {
  return leer_datos( "SELECT user_ID FROM usuarios WHERE user_email='$user_email';" );
}

/**
 * Crea un Usuario
 * Usa:     $user_email y $user_pass
 * Retorna: user_ID
 */
function crear_usuario( $user_email, $user_pass ) {
  return modificar_datos( "INSERT INTO usuarios ( user_email, user_pass ) VALUES ('$user_email', '$user_pass' );" );
}

/**
 * Eliminar un Usuario
 * Usa:     $user_ID
 * Retorna: user_ID
 */
function eliminar_usuario( $user_ID ) {
  return eliminar_datos( "DELETE FROM usuarios WHERE user_ID=$user_ID;" );
}

/**
 * Edita un Usuario
 * Usa:     $user_ID, $user_email y $user_pass
 * Retorna: user_ID
 */
function editar_usuario( $user_ID, $user_email, $user_pass ) {
  return modificar_datos( "UPDATE usuarios SET user_email='$user_email', user_pass='$user_pass' WHERE user_ID=$user_ID;" );
}





/**
 * Trae la lista de Notas
 * Usa:     
 * Retorna: Notas
 */
function traer_notas() {
  return leer_datos( 'SELECT * FROM notas;' );
}

/**
 * Trae la lista de Notas Públicas
 * Usa:     
 * Retorna: Notas
 */
function traer_notas_publicas() {
  return leer_datos( "SELECT * FROM notas WHERE nota_privacidad='publica';" );
}

/**
 * Trae la lista de Notas del Usuario
 * Usa:     $user_ID
 * Retorna: Notas
 */
function traer_notas_user( $user_ID ) {
  return leer_datos( "SELECT * FROM notas WHERE user_ID=$user_ID;" );
}

/**
 * Trae una Nota
 * Usa:     $nota_ID
 * Retorna: Notas
 */
function traer_nota( $nota_ID ) {
  return leer_datos( "SELECT * FROM notas WHERE nota_ID=$nota_ID;" );
}

/**
 * Crea una Nota
 * Usa:     $nota_titulo y $nota_contenido
 * Retorna: nota_ID
 */
function crear_nota( $user_ID, $nota_titulo, $nota_contenido ) {
  return modificar_datos( "INSERT INTO notas ( user_ID, nota_titulo, nota_contenido ) VALUES ( $user_ID, '$nota_titulo', '$nota_contenido' );" );
}

/**
 * Eliminar una Nota
 * Usa:     $user_ID
 * Retorna: nota_ID
 */
function eliminar_nota( $nota_ID ) {
  return eliminar_datos( "DELETE FROM notas WHERE nota_ID=$nota_ID;" );
}

/**
 * Edita una Nota
 * Usa:     $nota_ID, $nota_titulo y $nota_contenido
 * Retorna: nota_ID
 */
function editar_nota( $nota_ID, $nota_titulo, $nota_contenido ) {
  return modificar_datos( "UPDATE notas SET nota_titulo='$nota_titulo', nota_contenido='$nota_contenido' WHERE nota_ID=$nota_ID;" );
}