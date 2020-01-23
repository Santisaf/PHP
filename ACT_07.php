<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
   
<?php
 
if(isset($_GET['submit'])) {
 
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
 
	if ( $age>=18 ){
       echo "<p>".$name." is adult</p>";
	}else{
	   echo "<p>".$name." isn't adult</p>";
	}
 
}
 
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<input type="text" name="name"><br>

<input type="number" name="age"><br>
 
<input type="submit" name="submit" value="Submit"><br>
 
</form>
 
	
</body>
</html>