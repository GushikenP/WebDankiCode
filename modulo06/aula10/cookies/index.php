<?php
	//sessão armazena dados somente durante o período em que o navegador fica aberto. Fechar a aba do navegador não influencia
	//cookies são dados armazenados de sites, onde é possível definir por quanto tempo as informações ficarão armazenadas no navegador
	session_start(); //session não funciona sem esse comando no início
	
	//expira a partir do momento atual + 24 horas
	// o parametros '/' diz que o cookie é acessível para todas as páginas. Caso não coloque, fica válido somente para esta página
	//setcookie('nome', 'Patrícia', time() + (60*60*24), '/');

	//macete para destruir cookie
	//após a declaração de um cookie, ele nunca vai estar disponível na hora. precisa dar um refresh na página de novo para surtir efeito
	setcookie('nome', 'Patrícia', time() - (60*60*24), '/');

	echo $_COOKIE['nome'];


?>