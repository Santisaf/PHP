<?php 

setcookie("user","$_REQUEST[n]",time()+60*60*24,"/"); 
header('Location: ACT_29a.php');
?> 

 