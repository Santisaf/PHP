<?php 

copy($_FILES['file1']['tmp_name'],$_FILES['file1']['name']); 
copy($_FILES['file2']['tmp_name'],$_FILES['file1']['name']); 
copy($_FILES['file3']['tmp_name'],$_FILES['file1']['name']); 
echo "File has been uploaded to the server.<br>"; 


?> 
 
	