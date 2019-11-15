<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
  
</head>
<style>
.login{

display:flex;
flex-wrap:wrap;
flex-direction: column;
justify-content: center;
align-items: center;
padding:10px;

}
</style>
<body>
    <?php include('nav.php') ?>
    <div class="login">
        <header><h1>Login</h1></header>
        <main>
            <form action="verifica.php" method="post">
                <div>
                    <label for="username">Usuario:</label>
                    <input  class="login" type="text" name="user" id="username" requeried>
                </div>
                <div>
                    <label for="password">Senha:</label>
                    <input  class="login"  requeried type="password" name="password" id="password"> 
                </div>
                <div>
                    <input  class="login" type="submit" value="Logar" requeried>
                </div>
            </form>
        </main>
    </div>
    
</body>
</html>