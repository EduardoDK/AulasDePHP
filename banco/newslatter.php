<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewsSlatter</title>
</head>
<style>
div{
    text-align:center;
    padding:20px;
}
h1{
    text-align:center;
}
label{
    font-size:20px;
}
input{
    height:30px;
   
}
a{
    text-decoration:none;
    font-size:20px;

}
</style>
<body>
    <h1>NewsLetter</h1>
    <form action="inserção.php" method="post">
    <div>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    </div>
    <div>
    <input type="submit" name="enviar">
    </div>
    <a href="leiturabanco.php">Ver emails Cadastrados</a>
    
</body>
</html>