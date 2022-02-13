<?php
    //incluindo classes no projeto dinamicamente

    include('config.php');

    //registra função pro php chamar automaticamente
    spl_autoload_register('myAutoLoad');


    //new Utilidades();
    new Home\Inicial;

?>