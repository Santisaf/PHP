<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

</head>
<body>
   
<h3>Verification</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Name: <input type="text" name="n"> <br><br>
Password: <input type="password" name="p1"> <br><br> 
Password: <input type="password" name="p2"> <br><br> 

<input type="submit" name="submit" value="Submit"><br><br>
 
</form>
 
 <?php
   
if(isset($_POST['submit'])) {

   if ( isset($_REQUEST['n'])){ $n = $_REQUEST['n']; } else { $n = ""; };
   if ( isset($_REQUEST['p1'])) { $p1 = $_REQUEST['p1']; }else{ $p1 = ""; };
   if ( isset($_REQUEST['p2'])) { $p2 = $_REQUEST['p2']; }else{ $p2 = ""; };
   
   function verification($p1,$p2){
      $res = ($p1 == $p2) ? "Passwords are the same" : "Passwords are NOT the same";
      echo $res;
   }
 
   verification($p1,$p2); 

}
?>
	
</body>
</html>