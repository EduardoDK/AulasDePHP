<?php 

 session_start();

 if(!isset($_SESSION['login'])){
     $_SESSION['login'] = "false";
 }

if($_SESSION['login'] == "false"){
    $login = "Deslogado";
}
else{
    $login = "Logado";
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Login</title>
    <style>
        nav{
            background-color:salmon;
            padding:30px;
            
        }
        a{
            padding:30px;
            text-decoration:none;
            color:White;
            font-family:arial;
        }
        a:hover{
            font-size:17px;
        }
        h1,h3{
            text-align:center;
        }
    </style>
</head>
<body>

    <div>
        <header>
        <h1>Sistema de Login</h1>
        <h3>Situação : <?php echo $login   ?> </h3>
        </header>
        <nav>
            <a href="cadastro.php">Cadastro</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
    
</body>
</html>