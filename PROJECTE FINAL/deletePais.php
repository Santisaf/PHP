<?php

	require('connexio.php');
	$sql = "DELETE FROM pais WHERE id='".$_REQUEST['id']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	
	header("location: taulaPais.php");
	exit();

?>