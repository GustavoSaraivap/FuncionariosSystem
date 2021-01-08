<?php  

	function Verificar_msg()
	{
		if(!empty($_GET['msg']))
		{
			$msg = $_GET['msg'];

			if($msg == 'eptfields')
			{
				$texto = "Atenção: Preencha todos os campos!";
			}
			else if($msg == 'invalid')
			{
				$texto = "Atenção: Usuário ou senha invalidos!";
			} 
			else if($msg == 'notlog')
			{
				$texto = "Atenção: Informe os dados de login para acessar a página!";
			}
			else if($msg == 'userok')
			{
				$texto = "USUÁRIO CADASTRADO COM SUCESSO!!";
			}
			else if($msg == 'usererro')
			{
				$texto = "Atenção: Erro ao cadastrar usuário!";
			}

			echo '<p><h3 class="alert alert-warning">' . $texto . '</h3></p>';
		}
	}



?>