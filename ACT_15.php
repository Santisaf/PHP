<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

</head>
<body>
   
<h3>LOG</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Name: <input type="text" name="n"> <br><br>
Password: <input type="password" name="p"> <br><br> 

<input type="submit" name="submit" value="Submit"><br><br>
 
</form>
 
 <?php
   
   $user[0]=array('name'=>'admin', 'password'=>'admin');
   $user[1]=array('name'=>'santi', 'password'=>'santisaf');
   $user[2]=array('name'=>'pedro', 'password'=>'123');
   $user[3]=array('name'=>'noa', 'password'=>'andreu');
   $user[4]=array('name'=>'pau', 'password'=>'mora');

if(isset($_POST['submit'])) {

   if ( isset($_REQUEST['n'])){ $n = $_REQUEST['n']; } else { $n = ""; };
   if ( isset($_REQUEST['p'])) { $p = $_REQUEST['p']; }else{ $p = ""; };
   
   for($i=0; $i<count($user); $i++){

   if ( $n==$user[$i]['name'] && $p==$user[$i]['password']){
   	echo "Log-in is right !! ";
      $comp=true;
      break;
     }else{ $comp=false; }

   }
    if ( !$comp ){ echo "NOT Log-in";}
}   
?>
	
</body>
</html>