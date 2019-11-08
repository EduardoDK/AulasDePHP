<?php

include('conn.php');

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$nascimento = $_GET['nasc'];

$sql = "INSERT INTO pessoas (nome, sobrenome,nascimento) VALUES ('$nome' , '$sobrenome','$nascimento')";

if($conn->query($sql) == TRUE){
    echo "Dado inserido com sucesso";
}
else{
    echo "Erro : " . $conn->error;
}

$conn->close();