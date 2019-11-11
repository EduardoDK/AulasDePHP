<?php

include('conn.php');
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$diretorio = "uploads/";
$arquivo = $diretorio . basename($_FILES['imagemUpload']['name']);
$tipo = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
$id = $_GET['id'];

$sql = "UPDATE pessoa SET email='$email' , nome='$nome' , caminho='$arquivo' WHERE id='$id' ";

$conn->query($sql);

$conn->close();

