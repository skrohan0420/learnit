<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn-It</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/adminLogin.css';?></style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
	<body>
		

			
			






			<section>
				<div class="loginBx">
					<form method="post" action="adminLoginAction.php" >
						<h1>Admin</h1>

						<div class="inputBx">
							<input type="text" name="logName"  required>
							<span>Name</span>
						</div>

						<div class="inputBx">
							<input type="password" name="logPassword" required id="logPass">
							<span>Password</span>
							<i class="fas fa-eye" id="eyeIcon"></i>
						</div>

						<input type="submit" name="" value="Log-In">

	
					</form>
				</div>
			</section>



			<script type="text/javascript" src="js/adminLogin.js"></script>


	</body>
</html>