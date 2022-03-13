<?php 

	include 'dataBase.php';
	
	$udel = $_REQUEST['id'];

	if (mysqli_query($learnitdb,"DELETE  FROM coursedata WHERE id = '$udel'")) {
		echo "<script>alert('Susessfully Deleted');document.location='adminHome.php'</script>";
	}
	else{
		echo "Error";
	}

 ?>