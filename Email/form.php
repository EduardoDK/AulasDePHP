<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<style>
    form{
        display:flex;
        justify-content: center;
        align-items: center;
 
    }
</style>
<body>

    <div>
        <header>
            <h1>Formulário para envio de emails</h1><hr>
        </header>
    </div>
    <main>
        <form action="enviar.php" method="post">
            <div>
                <label for="email">email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="assunto">assunto:</label>
                <input type="text" name="assunto" id="assunto">
            </div>
            <div>
                <label for="corpo">Conteudo:</label>
                <textarea name="corpo" id="corpo" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" name="Enviar">
            </div>
        </form>
    </main>

    
</body>
</html>