<?php
$server = "bmcnex215h52reuvleqv-mysql.services.clever-cloud.com";
$user = "ugh6566sir7zhgmj";
$pass = "KkbmuoS4H4EL5mVqrZit";
$db = "bmcnex215h52reuvleqv";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("ERRO CONEXION FAILD".$conexion->connect_errno);
}

?>