<?php
session_start();



include('conn.php');



$usuario = $_POST['user'];
$senha = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE nome='$usuario'";
$resultado = $conn->query($sql);



if($resultado->num_rows > 0){
    
    $linha = $resultado->fetch_assoc();
    if($linha["senha"] == md5($senha)){
        echo "Logado com sucesso";

        
        $_SESSION['login']="true";
        $_SESSION['autor'] = "$usuario";
        header("Location: index.php");
    }
    else{
        echo "Senha Invalida";
    }
}
else{
    echo "usuario não cadastrado";
}