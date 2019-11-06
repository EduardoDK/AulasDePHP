<?php


    //$arquivo = fopen("novoarquivo.txt", "w") or die("Não foi possivel encontrar o arquivo");
    $arquivo = fopen("novoarquivo.txt", "a") or die("Não foi possivel encontrar o arquivo");

    $texto = "Windoes Lixo !!\n";
    fwrite($arquivo , $texto);


    $texto = "Aula de PHP !!\n";
    fwrite($arquivo , $texto);

    fclose($arquivo);

?>