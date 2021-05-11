<?php
	$mysqli = new mysqli('localhost','root','','formulario');

	if ($mysqli->connect_errno) {
		echo "no se puede conectar al servidor mysql error :".$mysqli->connect_errno;
	}
?>