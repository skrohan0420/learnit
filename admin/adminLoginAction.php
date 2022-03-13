<?php 


$adminName = 'admin';
$adminPass = '123456';


$logName = $_POST['logName'];
$logPass = $_POST['logPassword'];


if ($logName == $adminName && $logPass == $adminPass) {
	
	header('location:adminHome.php');

}
else{
	echo "<script>alert('Wrong username or Password');document.location='index.php'</script>";
}


 ?>