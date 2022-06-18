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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/iniciarsere.css?ver=1.2">
    <link rel="stylesheet" href="css/footer.css?ver=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/ico.ico">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="title">
        <h1>INICIO DE SESIÓN</h1>
    </div>
   <div class="centro">
       <form action="iniciarseres.php" method="post" enctype="application/x-www-form-urlencoded">
           <a href="index.php"><img src="image/ttt3.png" alt=""></a>
           <?php if (!empty($errores)) : ?>
       
       <?php echo $errores; ?>

       <?php endif; ?>
           <input type="email" name="correo" id="" placeholder="INGRESA TU CORREO ELECTRONICO" required >
           <input type="password" name="contrasena" id="" placeholder="INGRESA TU CORREO CONTRASEÑA" required>
           <input type="submit" name="" id="" value="INGRESAR">
           <a href="registro.php" class="mesajederegis">Si no tienes cuenta registrate aqui.</a>
       </form>
   </div>
  
</body>
</html>