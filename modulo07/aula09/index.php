<?php 

    include('config.php');
    
    spl_autoload_register('myAutoLoad');

    $pessoa = new Pessoa();

    $pessoa->setDateBirth('1999-01-19');
    echo $pessoa->getDateBirth();

?>