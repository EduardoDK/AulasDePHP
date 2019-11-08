<?php

    include('phpqrcode/qrlib.php');

    // how to save PNG codes to server
    
    $tempDir = "qrcodes/";
    
    $codeContents = 'uol.com.br';
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_'.md5($codeContents).'.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = $tempDir.$fileName;
    
    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath);
        echo 'File generated!';
        echo '<hr />';
    } else {
       
    }
    

    // displaying


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
    img{
        width:100px;
        height:001px;
    }
    </style>
    <body>
        
    <img src="<?php echo $urlRelativeFilePath ; ?>" alt="">

    </body>
    </html>