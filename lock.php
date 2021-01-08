<?php session_start(); // iniciar sessão

	if(empty($_SESSION))// Se não há variavel de sessão registrada (tem que sar o empty e não o !isset)
	{
		header('location:login.php?msg=notlog'); // redirecionar para página de login
	}
?>