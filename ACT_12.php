<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<h3>Day :</h3>

<?php

$day = array( "Diumenge","Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte");
$n = date ("w");
  echo $day[$n];
 
?>



 
	
</body>
</html>