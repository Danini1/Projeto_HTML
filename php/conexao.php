<?php //session_start();

	$servidor = "us-cdbr-east-06.cleardb.net";
	$b08e5618984bbc = "root";
	$senha = "68f1c231";
	$db_name = "heroku_ba2905b51a84dfb";
	
	
	$con = new mysqli($servidor,$usuario,$senha,$db_name);

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
?>
