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
    <link rel="stylesheet" href="css/secundaria.css?ver=1.1">
    <link rel="stylesheet" href="css/footer.css?ver=1.1">
    <link rel="stylesheet" href="css/resposive.css?ver=1.0">
    <link rel="shortcut icon" href="image/ico.ico">
    <title>Nuestros planos</title>
</head>
<body>
    <nav>
        <img src="image/Tesito2.png" alt="" class="imgtesito">
        <ul class="uln" id="ulnam">
        <li><a href="index.php" class="links" >¿Quienes somos?</a></li>
        <li><a href="secundaria.php" class="links" style="color:#4df577;">Nuestros planos</a></li>
        <li><a href="opcional.php" class="links">Contacto</a></li>
        <li><a href="iniciarsere.php" class="links">Inicio de sesión</a></li>
        </ul>
        <ul class="uln2">
        <li><a href="javascript:void(0);" onclick="menu();" class="menudesple"><img src="image/menu.png" alt="" class="meunusde"></a></li>
        </ul>
    </nav>

    <div class="contenedor"></div>
    <div class="cosas centro">
        <div><h1 class="titulo1">Nuestros planos</h1></div>
    </div>
    <div class="cosas centro">
        <div><p class="presentacion2">Edificio H</p></div>
    </div>
    <div class="cosas">
        <div><figure>
            <a href="image/h-pb.png" target="_blank"><img src="image/h-pb.png" alt="" class="edificioh"></a>
            <figcaption>PLANTA BAJA</figcaption>
        </figure></div>
        <div><figure>
            <a href="image/h-pa.png" target="_blank"><img src="image/h-pa.png" alt="" class="edificioh"></a>
            <figcaption>PLANTA ALTA</figcaption>
        </figure></div>
    </div>
    <div class="cosas centro">
        <div><p class="presentacion2">Edificio E</p></div>
    </div>
    <div class="cosas">
        <div><figure>
            <a href="image/e-pb.png" target="_blank"><img src="image/e-pb.png" alt="" class="edificioh"></a>
            <figcaption>PLANTA BAJA</figcaption>
        </figure></div>
        <div><figure>
            <a href="image/e-pb.png" target="_blank"><img src="image/e-pb.png" alt="" class="edificioh"></a>
            <figcaption>PLANTA ALTA</figcaption>
        </figure></div>
    </div>
    <div class="cosas centro">
        <div><p class="presentacion2">Edificio K</p></div>
    </div>
    <div class="cosas">
        <div><figure>
            <a href="image/k-pb.jpg" target="_blank"><img src="image/k-pb.jpg" alt="" class="edificioh"></a>
            <figcaption>PLANTA BAJA</figcaption>
        </figure></div>
        <div><figure>
            <a href="image/k-pa.jpg" target="_blank"><img src="image/k-pa.jpg" alt="" class="edificioh"></a>
            <figcaption>PLANTA ALTA</figcaption>
        </figure></div>
    </div>
    <div class="cosas centro">
        <div><p class="presentacion2">Edificio Nuevo</p></div>
    </div>
    <div class="cosas centro">
        <div><figure>
            <a href="image/edificionuevo.jpg" target="_blank"><img src="image/edificionuevo.jpg" alt="" class="edificioh"></a>
            <figcaption>PLANTA BAJA</figcaption>
        </figure></div>
       
    </div>
    <div class="contenerdorcon">
       <div class="contenedor2"><h5>Para visualizar los planos de este proyecto necesita iniciar sesión.</h5><br>
        <div><p>Para iniciar sesión presiona el siguiete boton.</p><br>
            <a href="iniciarsere.php" class="butondeinici">INICIAR</a>
    </div>
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