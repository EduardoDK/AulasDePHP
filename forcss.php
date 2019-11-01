<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    .par{
        color: salmon;
        
    }
    .impar{
        color: blue;
    }
    ul{
        list-style-type:none;
    }

</style>
<body>
    <main>
        <h1>Contagem de números</h1>
        <hr>
        <ul>

            <?php
                
                for($i = 0 ; $i <10; $i++){
                    if($i%2 == 0){
                    echo "<li class='par'>Número : $i </li>";
                    }
                    else{
                        echo "<li class='impar'>Número : $i </li>";

                    }

                }

            ?>


        </ul>
    </main>

    
</body>
</html>