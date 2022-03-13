<?php 

$learnitdb = mysqli_connect('localhost','root','','learnitdb') OR die(mysqli_error());
	
if ($learnitdb) {
	// echo '<h4 style="color:green; text-align:center;">Database Connected</h4>';
}
else{
	echo 'Error ';
}

?>