<?php

if($resultado->num_rows > 0){


    while($linha = $resultado->fetch_assoc()){


    echo " <section>";
       echo "<article>";
        echo    "<h2>" . $linha['titulo'] ."</h1>";
        echo    "<span>" . "Postado por : ". $linha['autor'] . "</span>";
        echo    "<p class='paragrafo'>". $linha['comentario'] ."</p>";
        echo "</article>";
    echo "</section>";
    echo "<hr>";
    }
}