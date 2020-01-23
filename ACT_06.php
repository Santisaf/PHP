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
      
  for($x=0;$x<=10;$x++) {
  	   $total=$x*2;
       echo "2 * ".$x." = ".$total."</br>";   
     }

     echo "</br>";
     $x=0;

  while( $x<=10 ) {
  	   $total=$x*2;
       echo "2 * ".$x." = ".$total."</br>"; 
       $x++;  
     }   

     echo "</br>";
     $x=0;
    
   do{
       $total=$x*2;
       echo "2 * ".$x." = ".$total."</br>"; 
       $x++;  
   }while ( $x<=10 );

   

	  ?>

	
</body>
</html>