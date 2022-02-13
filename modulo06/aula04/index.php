<?php

    echo soma();
    echo soma(1,1);


    function soma($numero1 = 1, $numero2 = 2){
        return "A soma entre os dois números é " . $numero1+$numero2;
    }

?>