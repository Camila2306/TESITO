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
    <link rel="stylesheet" href="css/principal.css?ver=1.2">
    <link rel="stylesheet" href="css/footer.css?ver=1.0">
    <link rel="stylesheet" href="css/resposive.css?ver=1.0">
    <link rel="shortcut icon" href="image/ico.ico">
    <title>¿Quienes somos?</title>
</head>
<body>
    <nav>
        <img src="image/Tesito2.png" alt="" class="imgtesito">
        <ul class="uln" id="ulnam">
        <li><a href="index.php" class="links" style="color:#4df577;" >¿Quienes somos?</a></li>
        <li><a href="secundaria.php" class="links">Nuestros planos</a></li>
        <li><a href="opcional.php" class="links">Contacto</a></li>
        <li><a href="iniciarsere.php" class="links">Inicio de sesión</a></li>
        </ul>
        <ul class="uln2">
        <li><a href="javascript:void(0);" onclick="menu();" class="menudesple"><img src="image/menu.png" alt="" class="meunusde"></a></li>
        </ul>
    </nav>

    <div class="contenedor"></div>
    <div class="contenidos">
    <div class="cosas centro">
        <div><h1 class="titulo1">¿Quiénes somos?</h1></div>
    </div>
    <div class="cosas centro">
        <div><p class="presentacion">Hola, Bienvenid@ a nuestra página y empresa llamada TESI-TO.  </p></div>
        
    </div>
    <div class="cosas centro">
        <div><p class="presentacion">Somos <strong>Camila Hernandez</strong> y <strong>Samantha Luna</strong> alumnas del Tecnológico de Estudios Superiores de Ixtapaluca. En este proyecto mostraremos como fue el proceso de la instalación de la red en nuestra institución, así como los planos elaborados; con el fin de mostrar y buscar una manera más óptima de implementar la red y que esta tenga el mayor aprovechamiento posible para docentes y alumnos.</p></div>
    </div>
    <div class="cosas centro">
        <div><p class="presentacion2">Objetivos</p></div>
        
    </div>
    <div class="cosas centro">
        <div>
            <ul class="presentacion3">
                <li>Establecer una buena comunicación dentro del plantel.</li>
                <li>Beneficiar las labores del personal, así como del alumnado.</li>
                <li>Tener una mayor productividad. </li>
                <li>Emplear la innovación educativa. </li>
                <li>Favorecer el desarrollo profesional de los estudiantes</li>
            </ul>
        </div>
    </div>
    <div class="cosas centro">
        <div><img src="image/CSE.png" alt="" class="nosotras"></div>
    </div>

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