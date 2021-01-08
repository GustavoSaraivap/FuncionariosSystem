<?php // Verificar se os campos foram preenchidos 

	if (empty($_POST['username']) || empty($_POST['password']))
	{
		// Se houver algum campo em branco, devolve pra página de login 
		header('location:login.php?msg=eptfields');
	}
	else
	{
		// Armazena os dados do form em variáveis locais 
		$username = $_POST['username'];
		$password = $_POST['password'];

		// antes de registrar a sessão é preciso saber se o usuário e a senha correspondem com o que ta cadastrado no banco de dados

		// inclui arquivo de conexão 
		include_once 'conn.php';


		// Cria comando sql buscando na tabela 'users_tb' pelo registro que tenha o mesmo username e password informados, tudo isso por meio do comando select, apenas pra afetar as linhas desejadas e ver se funcionaou
		$sql = "SELECT * FROM users_tb WHERE username LIKE '$username' AND password LIKE '$password'";

		// executa comando sql
		$result = mysqli_query($conn, $sql);

		// Se o comando foi executado corretamente
		// (ou seja, esse usuário existe na tabela)
		if(mysqli_affected_rows($conn) > 0)
		{
			// Transformamos o retorno do select num array associativo
			$login = mysqli_fetch_assoc($result);

			// Iniciar sessão:
			session_start();

			// registrar as variaveis de sessão
			/*
			$_SESSION['id_user']  = $login['id_user'];
			$_SESSION['username'] = $login['username'];
			$_SESSION['password'] = $login['password'];
			$_SESSION['email']    = $login['email'];
			*/

			// Registrando sessoes por meio do foreach:

				   //array  indice    valor armazenado
				   //assoc  do array  no indice
			foreach($login as $key => $value)
			{
				$_SESSION['$key'] = $value;
			}

			header('location:index.php');
		}
		else
		{
			header('location:login.php?msg=invalid');
		}
	}

// Esta página não tem nenhuma saida de dados pois esta sendo trabalhado com sessoes e também por conta do header 

 ?>