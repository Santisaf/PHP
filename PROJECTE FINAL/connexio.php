<?php

	$con = mysqli_connect("localhost", "admin12", "admin12", "hotels");

	if(mysqli_connect_errno($con)){
			echo "Error connectat correctament a la BBDD!";
	}
	else {
		//echo "Connectat correctament a la BBDD";
	}

?>