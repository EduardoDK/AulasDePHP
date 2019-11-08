<?php


include('conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];

$diretorio = "uploads/";
$arquivo = $diretorio . basename($_FILES['imagemUpload']['name']);

$tipo = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES['imagemUpload']['tmp_name'], $arquivo)){


}
else{
    echo "Erro ao cadastrar imagem";
}

$sql = "INSERT INTO pessoa (caminho,nome,email) VALUES ('$arquivo','$nome','$email')";


if($conn->query($sql) == TRUE){

    echo "$arquivo salva com sucesso";
    echo "Dado inserido com sucesso";
}
else{
    echo "Erro : " . $conn->error;
}




$conn->close();


header("Location: http://localhost:8080/php/aulasdephp/atividade-4/lista.php");






