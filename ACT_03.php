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

      $name="Santi";
      $age=42;
      $weight=86.7;
      $category="Alumne";
      $champion=true;

	  ?>


    <table border="1">
    <tr>
    	<td>name</td>
    	<td>age</td>
    	<td>weight</td>
    	<td>category</td>
    	<td>champion</td>
    </tr>
     <tr>
       	<td><?php echo $name ?></td>
    	<td><?php echo $age ?></td>
    	<td><?php echo $weight ?></td>
    	<td><?php echo $category ?></td>
    	<td><?php echo $champion ?></td>
    </tr>	
    </table>   


	
</body>
</html>