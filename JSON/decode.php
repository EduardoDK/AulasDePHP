<?php


    //$json = '{"nome" : "Hellow World"}';
    $json = file_get_contents("https://api.myjson.com/bins/16ix7y");


    $dado=json_decode($json);
    //var_dump($dado)
    echo $dado->nome;

    echo "<hr>";

    $json=file_get_contents("https://api.myjson.com/bins/1g8adq");

    $dados=json_decode($json);


    foreach($dados as $d){
        echo $d->nome . "<br>";
    }