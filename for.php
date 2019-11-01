<?php

for($x = 1; $x <= 10; $x=$x+2){
    echo "Numero : $x <br>";
}


echo "<hr>";


for($x = 0 ; $x <= 10;$x++){

    if($x%2 == 0){
        echo $x  .  "  par" . "<br>";
    }
    else{
        echo $x  . " impar" . "<br>";

    }
}