<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

$conn = new mysqli($servidor, $usuario , $senha);

if($conn ->connect_error){
    die("Não foi possível conectar :" . $conn->connect_error);
}

echo "Conectado ao Banco";

$conn->close();