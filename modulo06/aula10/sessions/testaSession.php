<?php

	session_start();
	if(isset($_SESSION['nome'])){
		echo $_SESSION['nome'] ." " .$_SESSION['idade'];
	}

	// para limpar a sessão da memória
	// unset($_SESSION['nome']);

	// limpar todas as variáveis de sessão
	session_destroy();
?>