<?php
// conexion.php: datos para conectarse a la base de datos con PDO
// En el hosting se cambian estos cuatro datos por los de hPanel (este archivo con la clave real NO se sube a GitHub)
$host    = 'localhost';
$base    = 'business_alliance';
$usuario = 'root';
$clave   = '';   // en XAMPP root no tiene contraseña

$conexion = new PDO(
    "mysql:host=$host;dbname=$base;charset=utf8mb4",
    $usuario,
    $clave,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
