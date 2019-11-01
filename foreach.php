<?php

$cores = array("vermelho","verde","azul","amarelo","rosa","salmão");

foreach($cores as $cor){
    echo "Cor : $cor <br>";
}

echo "<hr>";

for($i=count($cores)-1;$i>= 0;$i--){
    echo "Cor : $cores[$i] <br>";
}