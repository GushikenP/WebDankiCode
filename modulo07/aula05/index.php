<?php 

	include('interface1.php');

	class Teste implements Interface1{
		public function printOnScreen($var1){
			echo 'Olá! Seu nome é ' .$var1;
		}
	}

	$teste = new Teste();
	$teste->printOnScreen('Patrícia');
?>