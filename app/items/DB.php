<?php
$hostname_db = "localhost";
$database_db = "341377";
$username_db = "341377";
$password_db = "qaz963QAZ963";
/*
$hostname_db = "localhost";
$database_db = "salon de belleza";
$username_db = "root";
$password_db = "";
*/
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
mysqli_select_db($conexion, $database_db) or die("Ninguna DB seleccionada");
?>