<?php //session_start();

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db_name = "db_usuario";
	
	
	$con = new mysqli($servidor,$usuario,$senha,$db_name);

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
?>
