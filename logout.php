<?php session_start(); // Inicia sessão

	// limpar a sessão usando a função unset que serve pra limpar valor de qualquer variavel
	unset($_SESSION);

	// Destruir a sessão
	session_destroy();

	// Redirecionar o usuário para a página de login para que ele possa se logar de novo se ele quiser 
	header('location:login.php');

?>