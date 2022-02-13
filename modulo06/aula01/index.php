<?php

    $arr = array('Mário', 'Natália', 'Patrícia', 'Lidia', 'Carlos');

    echo "Esse array tem " . count($arr) . " itens <br>";

    /*
    foreach($arr as $key => $value){
        echo $key . "=>" . $value . " <br>";
    }
    */

    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i] . " ";
    }



?>