<?php
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