<?php

include('conn.php');


$id = $_GET['id'];


$sql = "SELECT * FROM pessoas WHERE id ='$id'";
$resultado = $conn->query($sql);

if($resultado->num_rows  > 0){

    $linhas = true;
    $linha = $resultado->fetch_assoc();

}else{
    $linhas = false;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormUpdate</title>
</head>
<body>
    
    <div>
        <header><h1>Formúlario para atualização</h1></header>
        <main>
            <h2><?php echo $linhas?"":"Nenhum resultado encontrado" ?></h2>
            <form action="update.php?id=<?php echo $linha['id'] ?>" method="post">

                <div>
                <label for="NomeForm">Nome</label>
                <input type="text" value="<?php echo $linhas?$linha['nome']:"" ?>" name="nome">
                </div>
                <div>
                <label for="SobrenomeFOrm">Sobrenome</label>
                <input type="text" value="<?php echo $linhas?$linha['sobrenome']:"" ?>" name="sobrenome">
                </div>
                <div>
                <label for="DatForm">Data Nascimento</label>
                <input type="date" value="<?php echo $linhas?$linha['nascimento']:"" ?>" name="nascimento">
                </div>
                <div>
                    <input type="submit" value="Salvar">
                </div>
            </form>
        </main>
        <footer></footer>
    </div>

</body>
</html>