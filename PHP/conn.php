<?php
	$conn = mysqli_connect('localhost', 'root','', 'SR');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>