
  
<?php

require 'conn.php';

$sql="INSERT INTO pais (nom) VALUES ('$_REQUEST[name]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";



require 'des.php';
?>
	
