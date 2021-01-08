<?php include_once 'func.php'; ?>
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
	<title>Funcionários System - Login</title>
</head>
<body  class="container-fluid">

	<?php Verificar_msg(); ?>

	<p><h1 id="test" class="badge bg-secondary">Funcionários System - Login</h1></p>

	<form action="validacao.php" method="post">
		<p>
			<label for="nome" class="badge bg-info text-dark">Nome de usuário:</label><br>
			<input type="text" name="username" id="nome" maxlength="50">
		</p>

		<p>
			<label for="senha" class="badge bg-info text-dark">Senha:</label><br>
			<input type="text" name="password" id="senha" maxlength="20">
		</p>

		<p>
			<button type="submit" class="btn btn-primary">Login</button>
			<a href="cadastrar_user.php" class="btn btn-primary">Cadastrar-se</a>
		</p>
	</form>

</body>
</html>