<?php

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';

    /*
    echo substr($conteudo, 0, 10) . "<br>";

    $nome = 'Patrícia Keichi Gushiken';

    // separa string em array a partir do delimitador
    $nomes = explode(' ', $nome);

    print_r($nomes);

    // junta array com um delimitador
    $nomes = implode(' ', $nomes);

    print_r($nomes);
    */

    //retira códigos html do texto
    //$conteudo = '<h1>Patrícia</h1> Outra coisa';
    //echo strip_tags($conteudo);


    // mostra o código html na página sem interpretar
    echo htmlentities('<div></div>');

?>