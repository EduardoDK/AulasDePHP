 <?php

        if($resultado->num_rows > 0){


            //Estrutura de repetição para leitura da lista 
            while($linha = $resultado->fetch_assoc()){
                echo "<tr> ";
                echo "<td>"  . $linha['nome'] .  "</td>" ;
                echo "<td>" .  $linha['sobrenome'] . "</td>";
                echo "<td>" .  $linha['nascimento'] . "</td>";
                echo "<td><a href='formupdate.php?id=". $linha['id']. "'>Editar</a></td>";
                echo "<td><a href='delete.php?id=". $linha['id']. "'>Apagar</a></td>";

                echo "</tr>";
            }


        }
        else{
            echo "Nenhum resultado";
        }