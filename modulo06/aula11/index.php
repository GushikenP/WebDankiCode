<?php

	$nome = 'Patrícia';

	if (isset($nome)):
		echo $nome;
	endif;

	$contador = 0;
	while ($contador < 10):
		$contador++;
		echo $contador .'<br>';
	endwhile;

	$array = ['Patrícia', 'Keichi', 'Gushiken'];

	foreach ($array as $key => $value):
		echo $key.'=>'.]$value . '<br>';
	endforeach;

?>