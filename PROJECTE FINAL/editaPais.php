<!DOCTYPE html>
<html>
<head>
	<title>Welcome PHP</title>
</head>
<body>
	<h1>Welcome UPDATE.</h1>
	<?php

		require('connexio.php');

		$sql = "UPDATE pais SET nom = '".$_REQUEST['nom']."' 
				WHERE id ='".$_REQUEST['id']."'";

		echo $sql."<br/>";

		mysqli_query($con, $sql) or die();

		echo "Update realitzat correctament.";

		header("location:taulaPais.php");
		exit();

		require('close.php');

	?>
</body>
</html>