<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script>

		function toogleSelect(check,select){
			var isCheck = document.getElementById(check).checked;
			document.getElementById(select).disabled = !isCheck;
		} 

	</script>
</head>
<body>
   
<h3>Pizza take away</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Client's name: <input type="text" name="n"> <br><br>
Address: <input type="text" name="a"> <br><br> 
<input type="checkbox" id="Pros" name="Prosciutto" value="Prosciutto" onclick="toogleSelect('Pros','uno')">Prosciutto
<select id="uno" name="Pros" disabled>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select><br><br>
<input type="checkbox" id="Nap" name="Napolitana" value="Napolitana" onclick="toogleSelect('Nap','dos')">Napolitana
<select id="dos" name="Nap" disabled>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select><br><br>
<input type="checkbox" id="Moz" name="Mozzarella" value="Mozzarella" onclick="toogleSelect('Moz','tres')">Mozzarella
<select id="tres" name="Moz" disabled>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select><br><br>




<input type="submit" name="submit" value="Submit"><br><br>
 
</form>
 
 <?php

if(isset($_POST['submit'])) {

	   if ( isset($_REQUEST['Pros'])){ $pros = $_REQUEST['Pros']; } else { $pros = 0; };
       if ( isset($_REQUEST['Nap'])) { $nap = $_REQUEST['Nap']; }else{ $nap = 0; };
       if ( isset($_REQUEST['Moz'])){ $moz = $_REQUEST['Moz']; }else{ $moz = 0; };

      $total = number_format($pros*5.50+$nap*6.75+$moz*4.75,2);
      echo "El total es $total €";

      $f=fopen("pizza.txt","a") or die("File Error");

        fputs($f,"--------------------------------------------------------\n");
        fputs($f,"Client's name: ".$_REQUEST['n']);
		fputs($f,"\n");
		fputs($f,"Address: ".$_REQUEST['a']);
		fputs($f,"\n");
		fputs($f,"Prosciutto: $pros ud\n");
		fputs($f,"Napolitana: $nap ud\n");
		fputs($f,"Mozzarella: $moz ud\n");
		fputs($f,"--------------------------------------------------------\n");
		fputs($f,"Total: $total €\n ");

		fclose($f);
		}  
 
?>
	
</body>
</html>