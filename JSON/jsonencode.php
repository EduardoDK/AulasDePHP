<?php

//Simulação de uma aplicação do backend


$carros=array("Brasilia","Variant","Kadet","Monza","Escort","Veraneio");
echo json_encode($carros);

echo "<hr>";

$idade = array("Du"=>18,"Victor"=>35,"Leo"=>17);
echo json_encode($idade);

echo "<hr>";
//Jeito JSON
$pessoas = array(
    array('nome'=>'Rodrigo', 'idade'=>32, 'cpf'=>123456),
    array('nome'=>'Leo', 'idade'=>18, 'cpf'=>12456),
    array('nome'=>'Du', 'idade'=>10, 'cpf'=>123256)
);

var_dump($pessoas);