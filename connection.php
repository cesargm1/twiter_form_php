<?php
$serverName = "";
$username = "";
$password = "root";
$port = "3306";


$conn = new mysqli($serverName, $username, $password, $port);

if ($conn->connect_errno) {
    die("Error al conectar: "  . $conn->connect_error);
}

echo ("conexion exitosa");
