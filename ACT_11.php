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

if(isset($_POST['submit'])) {
	 
$contract = $_REQUEST['contract'];

         echo $contract;

}
 
?>
<h3>Contract :</h3>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<textarea name="contract" rows="5" cols="120">
	En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.

</textarea> <br>
 
<input type="submit" name="submit" value="Submit"><br>
 
</form>
 
	
</body>
</html>