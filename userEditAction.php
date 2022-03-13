<?php 
session_start();
include 'dataBase.php';

$uid = $_SESSION['id'];
$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];



$image = $_FILES['img']['name'];

$newimg = rand(1000,9999).'_'.$image;
$uplode_path = 'upload/'.$newimg;
$source_path = $_FILES['img']['tmp_name'];







// $ex = pathinfo($uplode_path,PATHINFO_EXTENSION);


// Allow certain file formats

// if($ex != "jpg" && $ex != "png" && $ex != "jpeg"
// && $ex != "gif" ) {
// echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
// 
// }

if (isset($uplode_path)) {
	
	
}
else{
	echo 'record not foumd';
}

if (move_uploaded_file($source_path, $uplode_path)){
	$user_update = mysqli_query($learnitdb, 
		"UPDATE userdata 
				SET 
					fullName ='$name',
					email ='$email',
					phone = '$number',
					password = '$password',
					gender ='$gender',
					dob  ='$dob',
					image ='$uplode_path'
				WHERE 
					id = '$uid'") or die (mysqli_errno($learnitdb));






	if ($user_update) {
		$id = $_SESSION['id'];

		$q = "select * from userData where id ='$id'";

		$result = mysqli_query($learnitdb,$q);
		$data = mysqli_fetch_array($result);


		$_SESSION['id'] = $data['id'];
		$_SESSION['fullName'] = $data['fullName'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['phone'] = $data['phone'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['gender'] = $data['gender'];
		$_SESSION['dob'] = $data['dob'];
		$_SESSION['image'] = $data['image'];
		$_SESSION['activity'] = $data['activity'];

		echo "<script>alert('Sucssesfuly Updated');document.location='userViewProfile.php'</script>";
	}
	else{
		echo 'Records Not Updated';
	}


}

?>