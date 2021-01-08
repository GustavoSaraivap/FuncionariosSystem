<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<style type="text/css">
		
		#test{
			font-size: 30px;
		}

		body{
			background-color: lavender;
		}

	</style>
	<title>Funcionários System - Cadastrar Usuário</title>
</head>
<body class="container-fluid">

	<p><h1 id="test" class="badge bg-secondary">Cadastrar Funcionário</h1></p>

	<form action="cadastrar_user.php" method="post">
		<p>
			<label for="username" class="badge bg-info text-dark">Nome de usuário:</label><br>
			<input type="text" name="username" id="username" maxlength="50">
		</p>
		<p>
			<label for="password" class="badge bg-info text-dark">Senha:</label><br>
			<input type="text" name="password" id="password" maxlength="20">
		</p>
		<p>
			<label for="email" class="badge bg-info text-dark">E-mail:</label><br>
			<input type="text" name="email" id="email" maxlength="100">
		</p>
		<p>
			<button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
			<a href="login.php" class="btn btn-primary">Já possui cadastro?</a>
		</p>
	</form>

	<?php  

		if(isset($_POST['enviar']))
		{
			if(!empty($_POST['username']) || !empty($_POST['password']) || !empty($_POST['email']))
			{
				$user['username'] = $_POST['username'];
				$user['password'] = $_POST['password'];
				$user['email'] = $_POST['email'];

				include_once 'DAO.php';

				cadastrar_user($user);
			}
			else
			{
				$texto = "Preencha todos os campos!";
				echo '<p><h3 class="alert alert-warning">' . $texto . '</h3></p>';
			}
		}

	?>

</body>
</html>