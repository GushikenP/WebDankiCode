<?php
	
	include('Exemplo.php');

	//instancia de objeto
	$exemplo = new Exemplo();

	//publico - acessado fora da classe
	$exemplo->var2 = 'Keichi';
	echo 'exemplo =>' . $exemplo->var2;
	echo '<br>';
	//privado - acessado somente dentro da classe
	//$exemplo->var1 = 'Patrícia';

	$exemplo2 = new Exemplo();
	$exemplo2->var2 = 'João';
	echo 'exemplo2 =>'.$exemplo2->var2;
	echo '<br>';

	// Alterando variavel static em nivel de classe
	Exemplo::$var3 = 'Outra variável';
	// Acessando variavel em nivel de classe
	echo Exemplo::$var3;

	//não vai mostrar
	echo $exemplo->var3;


	//acessando funções estaticas em nivel de classe
	echo Exemplo::metodoEstatico();

?>

