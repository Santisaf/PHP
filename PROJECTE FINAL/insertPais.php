
<?php
	include("cap.php");
?>
	<h1>Welcome INSERT.</h1>
	<?php

		require('connexio.php');

		$sql = "INSERT INTO pais (nom) VALUES ('".$_REQUEST['nom']."')";

		//echo $sql."<br/>";

		mysqli_query($con, $sql) or die();

		echo "Insert realitzat correctament.";

		require('close.php');

		header("location:taulaPais.php");
		exit();

	?>
<?php
	include("footer.php");
?>
