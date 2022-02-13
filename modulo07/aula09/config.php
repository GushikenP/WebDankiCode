<?php

    function myAutoLoad($class){
        
        //tratamento para caso rode no linux
        $class = str_ireplace('\\', '/', $class);

        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }
    }

?>