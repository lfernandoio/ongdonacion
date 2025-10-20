<?php 
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "ongnino";
$Cnx=mysqli_connect($servername,$username,$password, $dbname);
if ($Cnx->connect_error) {
    die("Conexión fallida: " . $Cnx->connect_error);
  }
?>