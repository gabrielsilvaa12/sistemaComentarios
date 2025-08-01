<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "comentarios";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$con) {
    die("FALHA NA CONEXÃO: " . mysqli_connect_error());
}
?>