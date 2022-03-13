	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;
		/*outline: 1px solid red;*/
	}

	a{
		height: fit-content;
		width: fit-content;
		text-decoration: none;
		color: blue;
	}
	p{
		text-align: center;
		color: rgba(255, 0, 0, 0.6);
		font-weight: 600;
		margin: 100px 0px 20px 0px;
	}
	h4{
		width: 140px;
		height: 50px;
		outline: none;
		background-color: rgba(255, 0, 0, 0.4);
		border: none;
		color: white;
		cursor: pointer;
		font-size: 25px;
		margin: 0px auto 0px auto;
		display: grid;
		place-items: center;
	}
	h4:hover{
		background-color: white;
		outline: 2px solid rgba(255, 0, 0, 0.4);
		color: rgba(255, 0, 0, 0.4);
	}

	</style>


<?php 

include 'dataBase.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$fullName = $firstName.' '.$lastName;
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$conPassword = $_POST['conPassword'];
$img = 'not set';
$gender = 'not set';
$dob = 'not set';


$date = date_default_timezone_set('Asia/Kolkata');
$today = date("F j, Y, g:i a T");

$act = array();
array_push($act,$today);

$actStr = implode(',',$act); 
	

$num = '/[0-9]/';




if(preg_match($num, $fullName)){
	echo "<p>You cannot Put Numbers In Your name</p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else if (strlen($phone) < 10) {
	echo "<p>Phone Number Is To Sort</p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else if (strlen($phone) > 12) {
	echo "<p>Phone Number Is To Long</p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else if ($phone[0] == '1' || $phone[0] == '4' || $phone[0] == '5' || $phone[0] == '2') {
	echo "<p> invalid Phone Number</p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else if($password !== $conPassword ){
	echo "<p>Passwords Did not Match</p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else if(strlen($password) < 6 ){
	echo "<p>Password is To Small Atleast 6 charactes Needed</p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else if(strlen($password) > 30 ){
	echo "<p>Password is To Big Maximum 30 charactes </p>";
	echo '<a href="signUp.php"><h4>Try Again</h4></a>';
}
else{
	$user_insert = mysqli_query($learnitdb,
		"INSERT INTO 
			userData 
				VALUES(
					'',
					'$fullName',
					'$email',
					'$phone',
					'$password',
					'$gender',
					'$dob',
					'$img',
					'$actStr')")
	or die(mysqli_error($learnitdb));

	if ($user_insert){
		header('location: login.php');
	}
	else{
		echo "<p>Error </p>";
		echo '<a href="signUp.php"><h4>Try Again</h4></a>';
	}
}


 ?>