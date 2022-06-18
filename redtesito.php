<?php
session_start();
if (!isset($_SESSION['correo'])) {
	echo '
    <script>
	alert("Es necesario iniciar sesión para entrar al sistema");
	window.location = "iniciarsere.php";
	</script>';
	session_destroy();
	die();
}
require 'conectar.php';
$use = $_SESSION['correo'];
$sql = "SELECT * FROM registros where correo= '$use' ";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cliente.css?ver=1.0">
    <link rel="stylesheet" href="css/footer.css?ver=1.0">
    <link rel="stylesheet" href="css/resposive.css?ver=1.0">
    <link rel="shortcut icon" href="image/ico.ico">
    <title>RED TESITO</title>
</head>
<body>
    <nav>
        <img src="image/Tesito2.png" alt="" class="imgtesito">
        <ul class="uln" id="ulnam">
        <li><a href="redtesito.php" class="links" style="color:#4df577;" >Nuestra Red</a></li>
        <li><a href="cerrarsesion.php" class="links">Cerrar sesión</a></li>
        </ul>
        <ul class="uln2">
        <li><a href="javascript:void(0);" onclick="menu();" class="menudesple"><img src="image/menu.png" alt="" class="meunusde"></a></li>
        </ul>
    </nav>

    <div class="contenedor">
        <h1 class="bienevnida">BIENVENIDA (O) <?php echo strtoupper($row['nombre']);?></h1>
    </div>
    <div class="cosas centro">
        <div><h1 class="titulo1">Nuestra red</h1></div>
    </div>
   
    <div class="cosas2 centro">
        <div><p class="presentacion2">Edificio H Y E</p></div>
    </div>
    <div class="cosas2">
        <div><figure>
        <a href="javascript:void(0);" 
        onclick="window.open('edificiosh.php', 'popup', 
        'top=100, left=100, width=599, height=680, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')"
         rel="nofollow"><img src="image/HED.jpg" alt="" class="edificioh" id="edificio1"></a></p>
            <figcaption>EDIFICIO H</figcaption>
        </figure></div>
        <div><figure>
        <a href="javascript:void(0);" 
        onclick="window.open('edificiose.php', 'popup', 
        'top=100, left=100, width=599, height=680, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')"
         rel="nofollow"><img src="image/EED.jpg" alt="" class="edificioh" id="edificio2"></a></p>
            <figcaption>EDIFICIO E</figcaption>
        </figure></div>
    </div>
    <div class="cosas2 centro">
        <div><p class="presentacion2">Edificio K Y Nuevo</p></div>
    </div>
    <div class="cosas2">
        <div><figure>
        <a href="javascript:void(0);" 
        onclick="window.open('edificiosk.php', 'popup', 
        'top=100, left=100, width=599, height=680, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')"
         rel="nofollow"><img src="image/KED.jpg" alt="" class="edificioh" id="edificio3"></a></p>
            <figcaption>EDIFICIO K</figcaption>
        </figure></div>
        <div><figure>
        <a href="javascript:void(0);" 
        onclick="window.open('edificionue.php', 'popup', 
        'top=100, left=100, width=599, height=680, toolbar=NO, resizable=NO, Location=NO, Menubar=NO, Titlebar=No, Status=NO')"
         rel="nofollow"><img src="image/ENED.jpg" alt="" class="edificioh" id="edificio4"></a></p>
            <figcaption>EDIFICIO NUEVO</figcaption>
        </figure></div>
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