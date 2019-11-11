<?php

include('conn.php');

$id=$_GET['id'];
$sql= "DELETE FROM pessoa WHERE id='$id'";

$conn->query($sql);

$conn->close();

header('Location: lista.php');