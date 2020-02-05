
  
<?php

require 'conn.php';

$sql="SELECT * FROM pais ORDER BY nom";
$rs = mysqli_query($con,$sql) or die();


?>

<table border="1">
   <tr>
    <th>id</th> 
    <th>pais</th>
  </tr> 
 <?php 
  while($row = mysqli_fetch_array($rs))
{
   ?>
  <tr>
    <th><?php echo $row['id'] ?></th> 
    <th><?php echo $row['nom'] ?></th>
  </tr>
<?php } ?>
</table>

<?php



require 'des.php';
?>
	
