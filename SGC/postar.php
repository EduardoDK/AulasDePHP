<?php

session_start();
include('conn.php');

$comentario = $_POST['comentario'];
$titulo = $_POST['titulo'];
$autor = $_SESSION['autor'];




$sql = "INSERT INTO postagem (titulo,comentario,autor) VALUES('$titulo' , '$comentario','$autor')";

$conn->query($sql);

$conn->close();

header("Location: index.php");