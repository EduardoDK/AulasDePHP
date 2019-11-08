<?php

    include('phpqrcode/qrlib.php');

    // how to configure pixel "zoom" factor
    
    $tempDir = "qrcodes/";
    
    $codeContents = 'aliceecéarense.com.br';
    $imageWidth = 250; // px

    // generating
    QRcode::png($codeContents, $tempDir.'006_4.png', QR_ECLEVEL_L, 10);
        
    // displaying

    echo '<img src="'.$tempDir.'006_4.png" />';