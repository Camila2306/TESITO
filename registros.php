
<?php
error_reporting(0); 
session_start();
if (isset($_SESSION['correo'])) {
    require "conectar.php";$email =$_SESSION['correo'];
    $sql="SELECT * FROM registros WHERE correo='$email'";
    $result = $conexion->query($sql);
    $row = $result->fetch_assoc();   
    if($row['rol'] == 'cliente'){echo '<script>window.location = "cliente.php";</script>';
    }elseif($row['rol'] == 'administrador'){echo '<script>window.location = "administrador.php";</script>';
    }else{
}} 

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
    header('Location:registro.php');
}
session_start();
  require 'configuracion.php';
  require 'funcion.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre = $_POST['nombrecompleto'];
$correo = limpiarDatos($_POST['correo']);
$pass = $_POST['contrasena'];
$password = limpiarDatos(hash('sha512', $pass));
$rol = 'cliente';

$errores = '';

      // validacion de que el usuario no exista
   if(empty($nombre) || empty($correo) || empty($pass)){
    $errores .= '<h3 class=mensajealerta2>Rellena todos los campos.</h3>';
   }else{
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('SELECT * FROM registros WHERE correo = :corr LIMIT 1');
    $statement->execute(array(
      ':corr' => $correo
    ));
    $resultado = $statement->fetch();

    if ($resultado != False) {
      $errores .= '<h3 class=mensajealerta>Este correo esta registrado.</h3>';
    }
   }
 
    require "registro.php";
    if ($errores == '') {
      $conexion = conexion($bd_config);
      $statement = $conexion->prepare('INSERT INTO registros (nombre, correo, rol, contrasena) VALUES(:nom, :corr, :rol, :con)');
      $statement->execute(
        array(
          ':nom' => $nombre,
          ':corr' => $correo,
          ':rol' => $rol,
          ':con' => $password

        )
      );


      echo '<script>window.alert("Felicidades ya estas registrado en el sistema.");
      window.location = "iniciarsere.php";</script>';
    }
  }


 
?>
</body>
</html>