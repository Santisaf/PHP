<?php 

	setcookie("Politics","",time()-1000,"/"); 
    setcookie("Economy","",time()-1000,"/"); 
    setcookie("Sports","",time()-1000,"/"); 


if (isset($_REQUEST['Politics'])){
	setcookie("Politics","yes",time()+60*60,"/"); 
}
if (isset($_REQUEST['Economy'])){
	setcookie("Economy","yes",time()+60*60,"/"); 
}
if (isset($_REQUEST['Sports'])){
	setcookie("Sports","yes",time()+60*60,"/"); 
}
header('Location: ACT_30a.php');
?> 

 