<?php 

 session_start();
 include('conn.php');

 if(!isset($_SESSION['login'])){
     $_SESSION['login'] = "false";
 }

if($_SESSION['login'] == "false"){
    $login = "Deslogado";
}
else{
    
    $login = "Logado";
}



//Conectando no banco e fznd um SELECT
$sql = "SELECT * FROM usuarios ";
$resultado = $conn->query($sql);


$sql = "SELECT *FROM postagem ";
$resultado = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        h1{
            Text-align:center;
            font-family:courier;
        }
        nav{
            background-color:salmon;
            padding:20px;
        }
        a{
            margin-left:40px;
            padding:10px;
            text-decoration:none;
            color:white; 
            font-size:17px;
        }
        a:hover{
            font-size:18px;
        }
        section{
            text-align:left;
        }
        .postagem{
            text-align:center;
            padding:100px;  
        }
        .status{
            font-size:20px;
        }
        .paragrafo{
            font-size:20px;
            display:flex;
            flex-wrap:wrap;
        }
    </style>
</head>
<body>

    <div>
        <nav>
            <?php
               
                if($_SESSION['login'] == "false"){
                    include('logado.php');
                }
                else{
                    
                    include('deslogado.php');
                }

            ?>
        </nav>
    </div>
    <header><h1>Bloguezinho do Pudim</h1></header>
    <p class="status">Status: <?php echo   $login?> </p>
    <main>  
        <div>
           <?php include('criarlinha.php'); ?>
        </div>
        
       
    </main>
    <?php 
    if($_SESSION['login'] == "true"){
        include('post.php');
    }
    ?>
    

        
           

    
</body>
</html>