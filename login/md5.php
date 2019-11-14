<?php

$palavra = "Teste";
$codigo = md5($palavra);

echo $codigo . "<br>";

$codigo = hash('sha256' , $palavra);

echo $codigo . "<br>";


