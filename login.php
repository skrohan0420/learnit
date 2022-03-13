<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn-It</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/login.css';?></style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
	<body>
		

			
			<nav>
				<ul>
					<li class="logo"><a href="home.php">learn-it</a></li>
					<li class="homeBtn">
						<a href="home.php">
							<i class="fas fa-home"></i>Home
						</a>
					</li>
				</ul>
			</nav>






			<section>
				<div class="loginBx">
					<form method="post" action="loginAction.php" >
						<h1>Login</h1>

						<div class="inputBx">
							<input type="email" name="logEmail"  required>
							<span>E-Mail</span>
						</div>

						<div class="inputBx">
							<input id="logPass" type="password" name="logPassword" required>
							<span>Password</span>
							<i class="fas fa-eye" id="eyeIcon"></i>
						</div>

						<input type="submit" name="" value="Log-In">
						<a href="">Forgot Password?</a>

						<div class="btnBx">
							<p>Dont Have An Account?</p>
							<a href="signUp.php"><input type="button" name="" value="Sign-Up"></a>
						</div>
					</form>
				</div>
			</section>









		<script type="text/javascript">
			<?php include 'js/login.js';?>
		</script>
	</body>
</html>