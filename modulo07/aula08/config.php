<?php

//método será chamado sempre que instanciar uma classe
    function myAutoLoad($class){
        
         $class = str_ireplace('\\', '/', $class);

        if(file_exists('classes/' .$class. '.php')){
            include('classes/'.$class.'.php');
        }
    }

?>