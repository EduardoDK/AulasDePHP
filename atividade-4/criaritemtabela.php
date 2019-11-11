<?php

if($resultado->num_rows > 0){


    //Estrutura de repetição para leitura da lista 
    while($linha = $resultado->fetch_assoc()){

        $url = $linha['caminho']; 
        echo "<tr> ";
        echo "<td>" .  $linha['id'] . "</td>";
        echo "<td>"  . $linha['nome'] .  "</td>" ;
        echo "<td>" .  $linha['email'] . "</td>";
        echo "<td>".  "<img src='$url'>" . "</td>";
        echo "<td><a href='listaupdate.php?id=". $linha['id'] . "'>Editar</a> |";
        echo "<a href='delete.php?id=". $linha['id'] . "'>Apagar</a></td>";


        


        echo "</tr>";
    }


}
else{
    echo "Nenhum resultado";
}



