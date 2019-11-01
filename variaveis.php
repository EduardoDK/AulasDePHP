<?php

$pudim = 10;
$pudim2 = 20;

$resultado  = $pudim + $pudim2;

echo  "Resultado : " .  $resultado;

$frase = "Algum texto";

echo "<br>";

echo "Escrevendo "  . $frase;

$numDecimal = 10.6;

$carros = array('fusca','voyage','escort','kadett');

echo "<br>";

echo $carros[2];

$condicao = true ; //false

echo "<br>";

echo $condicao;

$x = 25.99;
$int_cast = (int)$x;
echo "<br>";
echo $int_cast;


echo "<br>";

$n1 = 3;
$n2 = 2;

//echo $n1 % $n2; resto da divisao


echo $n1 ** $n2; //potencia

echo "<br>";

$status = ($condicao) ? "Verdadeiro" : "Falso";
echo $status; //true or false