<?php
	//sessão armazena dados somente durante o período em que o navegador fica aberto. Fechar a aba do navegador não influencia
	//cookies são dados armazenados de sites, onde é possível definir por quanto tempo as informações ficarão armazenadas no navegador
	session_start(); //session não funciona sem esse comando no início
	$_SESSION['nome'] = 'Patrícia';
	$_SESSION['idade'] = '22';

	session_destroy();

?>