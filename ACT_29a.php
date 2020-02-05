<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

</head>
<body>
   
<h3>Cookie</h3>

<?php
 if (isset($_COOKIE['user'])) 
echo "<h4>Usuario: ".$_COOKIE['user']."<h4/>"; 
?> 

<form method="post" action="ACT_29b.php">

User: <input type="text" name="n"> <br><br>

<input type="submit" name="submit" value="Submit"><br><br>
 
</form>
 
	
</body>
</html>