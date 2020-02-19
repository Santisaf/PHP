<?php
	include("cap.php");
?>
    <div class="container">
    
    <div class="alert alert-primary mt-3" role="alert">  
	<h3 class="text center">FORM INSERT PAIS.</h3>
	</div>

	<form action="insertPais.php"  method="post">
		<div class="form-group">
			NOM:<input type="text" name="nom" class="form-control" placeholder="Introdueix pais"/><br/>		
			<input type="submit" class="btn btn-primary" value="INSERT"/>
	    </div>
	</form>

	</div> 

<?php
	include("footer.php");
?>