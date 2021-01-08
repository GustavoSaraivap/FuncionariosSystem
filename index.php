<?php include_once 'lock.php'; ?>
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
	<title>Funcionários System - Home</title>
</head>
<body class="container-fluid">

	<p><h1 id="test" class="badge bg-secondary">Funcionários system - Home</h1></p>

	<?php include_once 'menu.php'; 

		if(!empty($_GET['msg']))
		{
			$msg = $_GET['msg'];

			if($msg == 'cadok')
			{
				$txt = "FUNCIONÁRIO CADASTRADO!";
				echo '<p><h3 class="alert alert-info">' . $txt . '</h3></p>';
			}
			else if($msg == 'caderro')
			{
				$txt = "ATENÇÃO: ERRO AO CADASTRAR FUNCIONÁRIO!";
				echo '<p><h3 class="alert alert-danger">' . $txt . '</h3></p>';
			}
		}

	?>

</body>
</html>