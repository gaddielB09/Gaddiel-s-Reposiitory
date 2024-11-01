<?php 
function connectDB() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'bienesraices';
    
    $conexion = mysqli_connect($host, $user, $password, $database);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    return $conexion;
}
