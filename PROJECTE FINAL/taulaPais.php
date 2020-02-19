<?php
include("cap.php");
?>   
    <div class="container">
	<h1>Welcome SELECT.</h1>
	<a href="insertarPais.php"><button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nou Pais</button></a><br/><br/>
	<table id='dt' class='table table-striped table-bordered' style='width:100%' >
		<thead>
			<tr><th>Pais</th><th>Editar</th><th>Borrar</th></tr>
		</thead>
		<tbody>
	<?php
		require('connexio.php');
		$sql = "SELECT * FROM pais ORDER BY nom";
		$rs = mysqli_query($con, $sql) or die();
			while($row = mysqli_fetch_array($rs)){
				echo "<tr>";
					echo "<td>".$row['nom']."</td>";
					echo "<td><a href='editarPais.php?id=".$row['id']."'><button type='button' class='btn btn-warning'><i class='fa fa-pencil' aria-hidden='true'></i> Editar</button></a></td>";
					echo "<td><a href='deletePais.php?id=".$row['id']."'><button type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i> Borrar</button></a></td>";
				echo "</tr>";
			}
		require('close.php');
		?>
		</tbody>

    </div>
	<script>
		
		$(document).ready( function () {
	    	$('#dt').DataTable( {
	    	    dom: 'Bfrtip',
	    	    buttons: [
	    	        { 	extend:'copy', 
	    	        	attr: { id: 'bCopia' } 
	    	        }, 
	    	        	'csv', 'excel', 'pdf', 'print'
	    	    	]
	    	} );
		} );

	</script>
<?php
include("footer.php");
?>