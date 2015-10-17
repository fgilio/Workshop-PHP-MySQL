<?php
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