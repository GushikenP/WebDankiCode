<?php

    //para pegar o fuso horário certo
    date_default_timezone_set('America/Sao_Paulo');

    //trabalhando com datas
    $data = '19/01/1999 19:00:00';

    $data = date('d/m/Y H:i:s');
    echo $data ."<br>";

    $data = date('d/m/Y H:i:s', time()+60);
    echo $data;
?>