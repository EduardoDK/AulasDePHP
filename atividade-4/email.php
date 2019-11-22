<?php

include('conn.php');

//Conectando no banco e fznd um SELECT
$sql = "SELECT * FROM pessoa";
$resultado = $conn->query($sql);


$conn->close();




//PHPMAILER v5.2 - versão estável


require 'mailer/PHPMailerAutoload.php';
//require para a execução se houver problema para importar o arquivo

$assunto = $_POST['assunto'];
$corpo = $_POST['corpo'];
$diretorio = "uploads/";
$arquivo = $diretorio . basename($_FILES['imagemUpload']['name']);
if(move_uploaded_file($_FILES['imagemUpload']['tmp_name'], $arquivo)){


}
else{
    echo "Erro ao cadastrar imagem";
}

$tipo = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));




$mail = new PHPMAILER(); //INSTANCIA UM OBJETO do tipo PHPMAIL

$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure ='tls';
$mail->Username='ti33senacsc@gmail.com';
$mail->Password='senac123';
$mail->Port=587;

$mail->setFrom('ti33senacsc@gmail.com');
$mail->addReplyTo('ti33senacsc@gmail.com');

if($resultado->num_rows > 0){

    while($linha = $resultado->fetch_assoc()){

        $mail->addAddress($linha['email']);
    }
}





$mail->isHTML(true);
$mail->Subject=$assunto;
$mail->Body=$corpo;
   
$mail->addAttachment($arquivo ,$arquivo);

if(!$mail->send()){
                    
     echo "Não foi possivel enviar a mensagem";

    }else{
        echo "Mensagem enviada com sucesso";
     }
                
header('Location: enviaremail.php');
                
