<?php
$host = "localhost";
$usuario = "João"; 
$senha = "Joãolindo123";       
$banco = "padaria_bumbameupao";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>