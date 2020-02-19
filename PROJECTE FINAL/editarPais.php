<?php
	include("cap.php");

		require('connexio.php');
		$sql = "SELECT * FROM pais WHERE id='".$_GET['id']."'";
		$rs = mysqli_query($con, $sql) or die();
		$row = mysqli_fetch_array($rs);
	?>
	 <div class="container">

	<div class="alert alert-primary mt-3" role="alert"> 
	<h3>FORM EDITAR PAIS.</h3>
    </div>
	<form action="editaPais.php" method="post">
		<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		NOM:<input type="text" name="nom" class="form-control" value="<?php echo $row['nom']; ?>" /><br/>
		<input type="submit" class="btn btn-primary" value="EDIT"/>
	    </div>
	</form>

     </div>
<?php
	include("footer.php");
?>