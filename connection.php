<?php
$hostName = "localhost";
$username = "";
$password = "root";
$database = "twiter";
$port = "3306";


$conn = new mysqli($hostName, $username, $password, $database, $port);

if ($conn->connect_errno) {
    die("Error al conectar: "  . $conn->connect_error);
}

echo ("conexion exitosa");
