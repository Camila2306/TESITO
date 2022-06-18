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
    <title>Registro</title>
</head>
<body>
    <div class="title">
        <h1>REGISTRO</h1>
    </div>
   <div class="centro">
       
       <form action="registros.php" method="post" enctype="application/x-www-form-urlencoded"  id="formpass">
        <a href="index.php"><img src="image/ttt3.png" alt=""></a>
        <?php if (!empty($errores)) : ?>
       
       <?php echo $errores; ?>

       <?php endif; ?>
           <input type="text" name="nombrecompleto" id="inputcamps" placeholder="INGRESA TU NOMBRE COMPLETO" required>
           <input type="email" name="correo" id="inputcamps" placeholder="INGRESA TU CORREO ELECTRONICO" required>
           <input type="password" name="contrasena" id="passwordregister" placeholder="INGRESA TU CONTRASEÑA" required>
           <span name="" id="passstrength" ></span>
           <input type="button" name="" class="buttonpass" value="REGISTRARSE">
           <a href="iniciarsere.php" class="mesajederegis">Si ya tienes cuenta inicia sesión aqui.</a>
       </form>
   </div>
 

   <script src="js/query.js?ver=1.0"></script>
   <script src="js/validacion.js?ver=1.0"></script>
</body>
</html>