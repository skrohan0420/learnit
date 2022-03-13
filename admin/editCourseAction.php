<?php 

include 'dataBase.php';

$id = $_POST['id'];
$name = $_POST['name'];
$details = $_POST['details'];

$image = $_FILES['img']['name'];

$newimg = rand(1000,9999).'_'.$image;
$uplode_path = 'upload/'.$newimg;
$source_path = $_FILES['img']['tmp_name'];

if (move_uploaded_file($source_path, $uplode_path)){
	$user_update = mysqli_query($learnitdb, 
		"UPDATE coursedata 
				SET 
					course = '$name',
					details = '$details',
					img = '$uplode_path'
				WHERE 
					id = '$id'") or die (mysqli_errno($learnitdb));
	if ($user_update) {
		echo "<script>alert('Course Updated');document.location='adminHome.php'</script>";
	}
	else{
		echo 'Records Not Updated';
	}
}
?>