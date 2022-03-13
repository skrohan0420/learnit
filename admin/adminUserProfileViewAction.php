<?php 
include 'dataBase.php';

$uid = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];


$Admin_user_update = mysqli_query($learnitdb, 
		"UPDATE userdata 
				SET 
					fullName = '$name',
					email = '$email',
					phone = '$phone',
					password = '$pass',
					dob = '$dob',
					gender = '$gender'
				WHERE 
					id = '$uid'") or die (mysqli_errno($conn));

if ($Admin_user_update) {

		echo "<script>alert('Susessfully Updated');document.location='adminHome.php'</script>";
	}
	else{
		echo 'Records Not Updated';
	}

 ?>