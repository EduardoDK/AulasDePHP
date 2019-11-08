<?php

if($resultado->num_rows > 0){


    //Estrutura de repetição para leitura da lista 
    while($linha = $resultado->fetch_assoc()){
        echo "<tr> ";
        echo "<td>"  . $linha['email'] .  "</td>" ;
        echo "</tr>";
    }


}
else{
    echo "Nenhum resultado";
}