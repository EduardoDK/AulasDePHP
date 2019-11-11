<?php

include('conn.php');

$id=$_GET['id'];
$sql= "DELETE FROM pessoas WHERE id='$id'";

$conn->query($sql);

$conn->close();

header('Location: select.php');