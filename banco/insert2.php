




<?php

include('conn.php');

$email = $_POST['email'];
$assunto = $_POST['assunto'];
$corpo = $_POST['corpo'];


$sql = "INSERT INTO pessoa (email,assunto,corpo) VALUES ('$email','$assunto','$corpo')";

if($conn->query($sql) == TRUE){
    echo "Email cadastrado com sucesso";
}
else{
    echo "Erro : " . $conn->error;
}

$conn->close();

