<?php 


include 'dataBase.php';

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$date = date_default_timezone_set('Asia/Kolkata');
$today = date("F j, Y, g:i a T");

$act = array();
array_push($act,$today);

$actStr = implode(',',$act); 


$user_insert = mysqli_query($learnitdb,
		"INSERT INTO 
			usermsg 
				VALUES(
					'',
					'$name',
					'$email',
					'$msg',
					'$actStr')")
	or die(mysqli_error($learnitdb));



if ($user_insert){
		echo "<script>alert('Massage Sent');document.location='userHome.php'</script>";
	}
	else{
		echo "<p>Error </p>";
		// echo '<a href="signUp.php"><h4>Try Again</h4></a>';
	}

 ?>