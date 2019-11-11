<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "ti33";

$conn = new mysqli($servidor, $usuario , $senha, $banco);

if($conn ->connect_error){
    die("Não foi possível conectar :" . $conn->connect_error);
}


