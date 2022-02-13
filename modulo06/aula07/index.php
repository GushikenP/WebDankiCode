<?php

    $nome = 'Patrícia';

    /*
    switch($nome){
        case 'Guilherme':
            echo 'Minha variável é Guilherme';
            break;
        case 'João':
            echo 'Minha variável é João';
            break;
        case 'Patrícia':
            echo 'Minha variável é Patrícia';
            break;
    }*/


    for($i = 0; $i<10; $i++){
        if($i == 5) continue; //pula tudo o que está embaixo do if e passa para o próximo
        echo $i;
        echo '<hr>';
        //if ($i == 5){break;}
        
    }

?>
