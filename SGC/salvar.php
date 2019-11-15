<?php

include('conn.php');

 $usuario = $_POST['user'];
 $senha = $_POST['password'];
 $senha = md5($senha);




 $sql = "INSERT INTO usuarios (nome,senha) VALUES('$usuario','$senha') ";

 $conn->query($sql);

 $conn->close();

 header("Location: login.php");