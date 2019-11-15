<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postagem</title>
</head>
<body>
<style>
.postagem{

    display:flex;
    flex-wrap:wrap;
    flex-direction: column;
    justify-content: left;
    align-items: left;
    padding:10px;
    width:530px; 
}
.textarea{
    width:550px; 
    height:250px;
}

</style>
<form action="postar.php" method="post">

        <?php include('nav.php') ?>
    <div class="postagem">
        <div>
            <label for="tituloPostagem">Titulo da postagem:</label>
            <input class="postagem" type="text" name ="titulo" requeried>
        </div>
        <div>
            <label for="comentarioForm">Adicionar Conteudo :</label>
        </div>
        <div>
            <textarea class="textarea" name="comentario" id="comentarioForm" required  ></textarea>
        </div>
        <div>
            <input  type="submit" name="postar">
        </div>
    </div>
</form>
    
</body>
</html>
