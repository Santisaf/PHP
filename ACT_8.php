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
 
$studies = $_REQUEST['radio'];
$name = $_REQUEST['name'];
	
       echo "<p>$name - $studies</p>";

}
 
?>
<h3>Studies :</h3>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" name="name"><br>	
 
<input type="radio" name="radio" value="No Studies">No Studies <br>

<input type="radio" name="radio" value="Primary School">Primary School<br>

<input type="radio" name="radio" value="Secondary School">Secondary School <br>

<input type="radio" name="radio" value="University">University <br>
 
<input type="submit" name="submit" value="Submit"><br>
 
</form>
 
	
</body>
</html>