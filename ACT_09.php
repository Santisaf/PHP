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
       if(!isset($_REQUEST['cb'])) 
  {
    echo("You didn't select any sports");
  } 
  else {
       $cb = $_REQUEST['cb'];
  	   $total = count ($cb);	
       echo "<p>$name <br>total sports:$total</p>";
       for ( $i=0;$i<$total;$i++ ) {
       echo "<p>$cb[$i]</p>"	;
       }
   }

}
 
?>
<h3>Sports :</h3>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" name="name"><br>	
 
<input type="checkbox" name="cb[]" value="football">football <br>

<input type="checkbox" name="cb[]" value="tennis">tennis<br>

<input type="checkbox" name="cb[]" value="basketball">basketball <br>

<input type="checkbox" name="cb[]" value="golf">golf <br>
 
<input type="submit" name="submit" value="Submit"><br>
 
</form>
 
	
</body>
</html>