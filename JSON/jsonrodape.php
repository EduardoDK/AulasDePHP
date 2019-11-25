<?php

include('conn.php');

//Conectando no banco e fznd um SELECT
$sql = "SELECT * FROM rodape";
$resultado = $conn->query($sql);



$noticia = array();

if($resultado->num_rows > 0){





    //Estrutura de repetição para leitura da lista 
    while($linha = $resultado->fetch_assoc()){
      
        
       array_push($noticia,$linha);
       
    }
    $noticia = utf8_string_array_encode($noticia);
    
    echo json_encode($noticia);


}
else{
    echo "Nenhum resultado";
}

function utf8_string_array_encode(&$array){
    $func = function(&$value,&$key){
        if(is_string($value)){
            $value = utf8_encode($value);
        }
        if(is_string($key)){
            $key = utf8_encode($key);
        }
        if(is_array($value)){
            utf8_string_array_encode($value);
        }
    };
    array_walk($array,$func);
    return $array;
}