<?php

error_reporting(0);
session_start();
if (isset($_SESSION['correo'])) {
    require "conectar.php";$email =$_SESSION['correo'];
    $sql="SELECT * FROM registros WHERE correo='$email'";
    $result = $conexion->query($sql);$row = $result->fetch_assoc();   
    if($row['rol'] == 'cliente'){
        echo '<script>window.location = "cliente.php";</script>';
    }else{
        echo '<script>window.location = "administrador.php";</script>';
}
} 



if($_GET){
    header('location: iniciarsere.php');
}
session_start();

require 'configuracion.php';
require 'funcion.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $correo = $_POST['correo'];
  $password = $_POST['contrasena'];
  $password = hash('sha512', $password);


  $conexion = conexion($bd_config);
  $statement = $conexion->prepare('SELECT * FROM registros WHERE correo= :email  AND contrasena = :pass');
  $statement->execute(
    array(
        ':email' => $correo,
        ':pass' => $password    
    )    
);


  $resultado = $statement->fetch();

 
if ($resultado !== false) {
    $_SESSION['correo'] = $correo;
      
    header('Location: '.RUTA.'verficar.php');
}else {
    $errores .= '<h3 class=mensajealerta>Las credenciales que ingresaste son invalidas.</h3>';
    }
  

 
}
require 'iniciarsere.php';

?>