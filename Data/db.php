<?php

	$host="127.0.0.1:3306";
	$user="root";
	$pass="";
	$db="live c8";
	
	$conn=mysqli_connect($host,$user,$pass,$db);

	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

?>