<?php

    $arr = ['<p>Patrícia</p>', 'Natália', '<h1>Mário</h1>'];

    //array_map serve para aplicar a mesma função em todos os itens do array
    print_r(array_map('strip_tags', $arr));

?>