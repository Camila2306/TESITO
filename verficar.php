<?php session_start();

require 'configuracion.php';
require 'funcion.php';

// comprobar session
if (isset($_SESSION['correo'])) {
  // validar los datos por privilegio
  $conexion = conexion($bd_config);
  $id = iniciarSession('registros', $conexion);
  

 
  if ($id["rol"] == 'administrador') {
    header('Location: '.RUTA.'administrador.php');
  } elseif ($id['rol'] == 'cliente') {
    header('Location: '.RUTA.'redtesito.php');
  } else {
    header('Location: '.RUTA.'iniciarsere.php');
  }}
?>