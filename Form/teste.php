<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$con = mysqli_connect("localhost", "root", "", "comentarios");

if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}

echo "Conexão feita com sucesso!";
?>
