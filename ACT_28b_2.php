<?php

require 'conn.php';

$sql="INSERT INTO ARTICLE (name,description, price,location,image) VALUES ('$_REQUEST[n]','$_REQUEST[d]','$_REQUEST[p]','$_REQUEST[l]','copy($_FILES['f']['tmp_name'],$_FILES['f']['name'])')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "insert ok";



require 'des.php';
?>