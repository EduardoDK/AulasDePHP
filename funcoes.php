<?php

escreverHello();

function escreverHello(){
    echo "Hello World";
}

function familia($nome){
    echo "$nome Silva.<br>";
}

echo "<br>";

familia("Pedro");
familia("Maria");

echo"<hr>";


function familiaIdade($nome , $idade ){
    echo" $nome Silva . idade $idade";
}

familiaIdade("Sillas" , "35");

///////////////////
echo "<hr>";
function somar($num1 , $num2){
    echo $num1 + $num2;
}

somar(5,10);


//////////////
echo "<hr>";

function somarComReturn($num1,$num2){
    return $num1  + $num2;
}

$resultado = somarComReturn(5,10);
echo $resultado;
//////////////////////////
