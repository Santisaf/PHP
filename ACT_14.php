<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

</head>
<body>
   
<h3>Pizza orders</h3>


 
<?php
$f=fopen("pizza.txt","r") or die("File Error");
while (!feof($f)) {
$line=fgets($f);
$line2=nl2br($line);
echo $line2;
}
fclose($f);
 ?>
	
</body>
</html>