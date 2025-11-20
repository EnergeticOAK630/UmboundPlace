<?php
$host = "localhost";
$usuario = "admin";
$senha = "4152623@Pa";
$banco = "clientes";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
