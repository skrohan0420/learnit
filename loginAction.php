<?php
session_start();

include 'dataBase.php';




$logEmail = $_POST['logEmail'];
$logPass = $_POST['logPassword'];

$q = "select * from userData where email ='$logEmail' && password ='$logPass'";

$result = mysqli_query($learnitdb,$q);
$data = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);


$_SESSION['id'] = $data['id'];
$_SESSION['fullName'] = $data['fullName'];
$_SESSION['email'] = $data['email'];
$_SESSION['phone'] = $data['phone'];
$_SESSION['password'] = $data['password'];
$_SESSION['gender'] = $data['gender'];
$_SESSION['dob'] = $data['dob'];
$_SESSION['image'] = $data['image'];
$_SESSION['activity'] = $data['activity'];


if ($num==1){
    
    header('location:userHome.php');
    
}
else{

    echo "<script>alert('Wrong username or Password');document.location='login.php'</script>";
    
    $_SESSION['error'] = "error";


}




?>
