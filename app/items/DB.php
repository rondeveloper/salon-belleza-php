<?php
$hostname_db = "localhost";
$database_db = "salon de belleza";
$username_db = "root";
$password_db = "";

$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
mysqli_select_db($conexion, $database_db) or die("Ninguna DB seleccionada");
?>