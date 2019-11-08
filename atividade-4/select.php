<?php

include('conn.php');

//Conectando no banco e fznd um SELECT
$sql = "SELECT * FROM pessoas";
$resultado = $conn->query($sql);


?>