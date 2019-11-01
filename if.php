<?php


//$hora = date("H") ;

$hora = $_GET["horaAtual"];

if($hora < 12){
    echo "Bom dia filho";
}
elseif($hora < 18){
    echo "Boa tarde"; 
}
else{
    echo "Boa noite";
}