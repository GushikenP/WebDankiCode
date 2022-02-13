<?php 
	
	include('Class1.php');
	include('Class2.php');

	use \Sessao1\Class1 as ApelidoClasse1;

	//como a classe1 está no namespace, preciso informar o namespace na instancia também
	//$class1 = new \Sessao1\Class1();
	$class1 = new ApelidoClasse1();

?>