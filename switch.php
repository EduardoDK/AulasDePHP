<?php

$corfavorita = $_GET["cor"];
$pessoa = $_GET["nome"];

echo "<h1>$pessoa</h1>";

switch($corfavorita){
    case "vermelha";
        echo"Cor favorita: vermelha";
        break;
    case"azul";
        echo"Cor favorita: azul";
        break;
    default:
        echo"Outra cor";
}