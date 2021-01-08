<?php  
	include_once 'conn.php';
	
	function Cadastrar_func($func)
	{
		global $conn;

		$values = "('" . $func['nome'] . "', " . 
				  "'" . $func['cargo'] . "', " .
				  "'" . $func['email'] . "')";
		$sql = "INSERT INTO funcionarios_tb (nome, cargo, email) VALUES " . $values;

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			
			header('location:index.php?msg=cadok');
		}
		else
		{
			
			header('location:index.php?msg=caderro');
		}
	}

	function Cadastrar_user($user)
	{
		global $conn;

		$values = "('" . $user['username'] . "', " . 
				  "('" . $user['password'] . "', " .
				  "('" . $user['email']    . "')";

		$sql = "INSERT INTO users_tb (username, password, email) VALUES " . $values;

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:login.php?msg=userok');
		}
		else
		{
			header('location:login.php?msg=usererro');
		}
	}

?>