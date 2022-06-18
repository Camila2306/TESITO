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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/opcional.css?ver=1.0">
    <link rel="stylesheet" href="css/resposive.css?ver=1.0">
    <link rel="shortcut icon" href="image/ico.ico">
    <title>Contacto</title>
</head>
<body>
    <nav>
        <img src="image/Tesito2.png" alt="" class="imgtesito">
        <ul class="uln" id="ulnam">
        <li><a href="index.php" class="links" >¿Quienes somos?</a></li>
        <li><a href="secundaria.php" class="links">Nuestros planos</a></li>
        <link rel="stylesheet" href="css/footer.css?ver=1.0">
        <li><a href="opcional.php" class="links" style="color:#4df577;">Contacto</a></li>
        <li><a href="iniciarsere.php" class="links">Inicio de sesión</a></li>
        </ul>
        <ul class="uln2">
        <li><a href="javascript:void(0);" onclick="menu();" class="menudesple"><img src="image/menu.png" alt="" class="meunusde"></a></li>
        </ul>
    </nav>

    <div class="contenedor">
<table class="tabla">
    <caption><img src="image/ttt3.png" alt=""></caption>
    <thead>
     
    </thead>
    <tbody>
        <tr>
            <th scope="row">Domicilio: </th>
            <td>Eje 3 Oriente 1761 </td>
        </tr>
        <tr>
            <th scope="row">Colonia: </th>
            <td>Coapa</td>
        </tr>
        <tr>
            <th scope="row">Delegación: </th>
            <td>Coyoacán</td>
        </tr>
        <tr>
            <th scope="row">C.P.</th>
            <td>04980</td>
        </tr>
        <tr>
            <th scope="row">Entidad:</th>
            <td>Ciudad De México</td>
        </tr>
        <tr>
            <th scope="row">Teléfono:</th>
            <td>55-76-84-74-81</td>
        </tr>
        <tr>
            <th scope="row">Correo:</th>
            <td>contratatesito@hotmail.com</td>
        </tr>
    </tbody>
</table>
    </div>
    <footer>
        <h3>COPYRIGHT ©</h3>
        <ul class="ulfooter">
            <li><a href="#" title="Facebook/tesitoface"><img src="image/f.png" alt="/tesitoface" class="reso"></a></li>
            <li><a href="#" title="Intagram/tesitointa"><img src="image/i.png" alt="/tesitointa" class="reso"></a></li>
            <li><a href="#" title="Youtube/tesitoyou"><img src="image/y.png" alt="/tesitoyou" class="reso"></a></li>
            <li><a href="#" title="LinkIned/tesitolin"><img src="image/l.png" alt="/tesitolin" class="reso"></a></li>
        </ul>
    </footer>
    <script src="js/mosocul.js"></script>
</body>
</html>