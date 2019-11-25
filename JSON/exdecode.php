<?php

    //Acesso os dados simulando a aplicação frontend
    $json = file_get_contents("10.60");


    $titulo=json_decode($json);

    $json=file_get_contents("https://api.myjson.com/bins/1g8adq");

    $dados=json_decode($json);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo->nome  ?></title>
</head>
<body>
    <div>
        <header>
            <h1>Titulo do site : <?php echo $titulo->nome ?></h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                </tr>
                <?php
                
                    foreach($dados as $d){
                        echo "<tr>";
                        echo "<td>" . $d->id ."</td>";
                        echo "<td>" . $d->nome ."</td>";
                        echo "<tr>";
                    }

                ?>
            </table>
        </main>

    </div>
    
</body>
</html>