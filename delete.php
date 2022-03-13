<?php 
	session_start();
	session_destroy();
	include 'dataBase.php';
	
	$udel = $_REQUEST['del'];

	if (mysqli_query($learnitdb,"DELETE  FROM userdata WHERE id = '$udel'")) {
		header('location:home.php');
	}
	else{
		echo "Error";
	}

 ?>