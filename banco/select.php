<?php

include('conn.php');

//Conectando no banco e fznd um SELECT
$sql = "SELECT * FROM pessoas";
$resultado = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessos</title>
    <style>
        table,th,td{
            border:1px solid salmon;
            border-collapse:collapse;
        }
        td,th{
            padding:5px;
        }
        th{
            background-color:salmon;
            color:#fff;
        }
    </style>
</head>
<body>
    
    <h1>Pessoas Cadastradas:</h1>

    <table>
    <tr>
        <th>Nome:</th>
        <th>Sobrenome:</th>
        <th>Data nascimento:</th>
        <th>Ação:</th>
    </tr>
    <?php include('criarlinha.php')?>
     
    </table>
</body>
</html>


<?php
//Fechando a Conexão
$conn->close();
?>