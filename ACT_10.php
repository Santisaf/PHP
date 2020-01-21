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
$salary = $_REQUEST['salary'];
         echo "<p>$name , the salary is $salary</p>";
       if($salary=="+3000€") {
         echo "You must pay additional taxes";
       }

}
 
?>
<h3>Salary :</h3>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" name="name"><br>	

<select name="salary">
<option value="1-1000€">1-1000€</option>
<option value="1001-3000€">1001-3000€</option>
<option value="+3000€">+3000€</option>
</select> <br>
 
<input type="submit" name="submit" value="Submit"><br>
 
</form>
 
	
</body>
</html>