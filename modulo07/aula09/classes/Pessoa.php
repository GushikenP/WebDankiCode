<?php
    
    class Pessoa{

        const daydForValidPass = 90;
        private $name;
        private $dateBirth;
        private $email;
        private $pass;
        private $dataRegister;

        public function __construct(){

        }

        public function getName(){return $this->name;}
        public function setName($pName){$this->name = $pName;}

        public function getDateBirth(){return $this->dateBirth;}
        public function setDateBirth($pDateBirth){

            if(date('Y-m-d', strtotime($pDateBirth)) !== $pDateBirth) 
                echo 'invalid date';
            else{
                $this->dateBirth = $pDateBirth;
            }
        }

        public function getEmail(){return $this->email;}
        public function setEmail($pEmail){$this->email = $pEmail;}

        public function getPass(){return $this->pass;}
        public function setPass($pPass){$this->pass = $pPass;}

    }

?>