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
	<title>Funcionários System - Cadastro</title>
</head>
<body class="container-fluid">

	<p><h1 id="test" class="badge bg-secondary">Cadastrar Funcionário</h1></p>

	<form action="cadastrar.php" method="post">
		<p>
			<label for="nome" class="badge bg-info text-dark">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="100">
		</p>
		<p>
			<label for="cargo" class="badge bg-info text-dark">Cargo:</label><br>
			<input type="text" name="cargo" id="cargo" maxlength="50">
		</p>
		<p>
			<label for="email" class="badge bg-info text-dark">E-mail:</label><br>
			<input type="text" name="email" id="email" maxlength="50">
		</p>
		<p>
			<button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
			<a href="index.php" class="btn btn-primary">Voltar</a>
		</p>
	</form>

	<?php 

		if(isset($_POST['enviar']))
		{
			if(!empty($_POST['nome']) || !empty($_POST['cargo']) || !empty($_POST['email']))
			{
				$func['nome'] = $_POST['nome'];
				$func['cargo'] = $_POST['cargo'];
				$func['email'] = $_POST['email'];

				include_once 'DAO.php';

				Cadastrar_func($func);
			}
			else
			{
				header('location:login.php?msg=eptfields');
			}
		}

	?>

</body>
</html>