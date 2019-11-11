<?php

include('conn.php');
$email = $_POST['email'];
$nome = $_POST['nome'];
$diretorio = "uploads/";
$arquivo = $diretorio . basename($_FILES['imagemUpload']['name']);
$tipo = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
if(move_uploaded_file($_FILES['imagemUpload']['tmp_name'], $arquivo)){


}
else{
    echo "Erro ao cadastrar imagem";
}
$id = $_GET['id'];

$sql = "UPDATE pessoa SET email='$email' , nome='$nome' , caminho='$arquivo' WHERE id='$id' ";

$conn->query($sql);

$conn->close();

header('Location: lista.php');
