




<?php

include('conn.php');

$email = $_POST['email'];

$sql = "INSERT INTO pessoa (email) VALUES ('$email')";

if($conn->query($sql) == TRUE){
    echo "Email cadastrado com sucesso";
}
else{
    echo "Erro : " . $conn->error;
}

$conn->close();

