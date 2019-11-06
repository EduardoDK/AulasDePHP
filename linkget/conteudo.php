<?php     

$id = $_GET['id'];
$titulo = '';
$conteudo = '';

if($id == "1"){
    $titulo = "Titulo1";
    $conteudo = "Contéudo 1";
}else if($id == "2"){
    $titulo = "Titulo 2";
    $conteudo = "Contéudo 2";
}
else if($id == "3"){
    $titulo = "Titulo3";
    $conteudo = "Contéudo 3";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
</head>
<body>
    <header>
        <h1>
        <?php echo $titulo; ?>
        </h1>
    </header>
    <?php include 'menu.php' ;?>

    <main>
        <p> 
            <?php echo $conteudo; ?>
        </p>
    </main>




    <footer>
        Rodapé do site
    </footer>
</body>
</html>