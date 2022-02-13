<?php 

	include ('Class1.php');

	$teste = new Class1('Patrícia', 22);
	
	echo $teste->getNome() .'<br>';
	echo $teste->getIdade();
?>