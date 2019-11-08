<?php

include('conn.php');

//Conectando no banco e fznd um SELECT
$sql = "SELECT * FROM pessoa";
$resultado = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios Cadastrados</title>
    <style>
        table,th,td{
            border:1px solid salmon;
            border-collapse:collapse;
            text-align:center;
            margin-left:700px;
        }
        td,th{
            padding:5px;
            font-size:20px;
        }
        th{
            background-color:salmon;
            color:#fff;
        }
        h1{
            text-align:center;
        }
        a{
            text-decoration:none;
            font-size:20px;
        }
        p{
            text-align:center;
            font-size:20px;
        }
    </style>
</head>
<body>
    
    <h1>Pessoas Cadastradas:</h1>

    <table>
    <tr>
        <th>Emails:</th>
    </tr>
    <?php include('criarlinha2.php')?>
    </table>
    <p>O Numero de usuarios Cadastrados é : <?php echo $resultado->num_rows ; ?></p>
    <a href="newslatter.php">Voltar</a>

</body>

</html>


<?php
//Fechando a Conexão
$conn->close();
?>