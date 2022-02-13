<?php

    //factory ou simple factory - evita a utilização do NEW
    //
    class Cachorro
    {
        public function __construct(){
            echo 'classe cachorro<br>';
        }
    }


    class Gato{
        public function __construct(){
            echo 'classe gato <br>';
        }
    }
    
    //new Gato();
    //new Cachorro();

    //ideia do simple factory - ter um método próprio (geralmente estático) para fabricar a classe
    class Animal{
        
        public static function build($nomeClasse){
            if(class_exists($nomeClasse)){
                return new $nomeClasse;
            }else{
                die('A classe '.$nomeClasse.' não existe');
            }
        }
    }
    Animal::build('Gato');
    Animal::build('Cachorro');
    Animal::build('Peixe');
    ?>