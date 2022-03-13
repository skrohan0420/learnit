<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn-It</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/signUp.css';?></style>
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
				


				<form  method="post" enctype="multipart/form-data" action="signUpAction.php">


					<h1>Sign-Up</h1>


					<div class="conBx">
						<div class="inputBx">
							<p id="fnAlert"></p>
							<input type="text"  onkeyup="firstNameAlert(this)" required="true" maxlength="20" minlength="2" name="firstName" >
							<span>First Name</span>
						</div>

						<div class="inputBx">
							<p id="laAlert"></p>
							<input type="text" name="lastName"  onkeyup="lastNameAlert(this)" required="true" maxlength="20" minlength="2">
							<span>Last Name</span>
						</div>

						<div class="inputBx">
							<input type="email" name="email" required="true">
							<span>Your E-Mail</span>
						</div>

						<div class="inputBx">
							<p id="phAlert"></p>
							<input type="number" name="phone"   onkeyup="phoneAlert(this)" required="true">
							<span>Phone Number</span>
						</div>

						<div class="inputBx">
							<p id="paAlert"></p>
							<input type="password" name="password"   onkeyup="pasAlert(this)" required="true" id="pass"   onkeyup= "conPass()">
							<span>Password</span>
						</div>

						<div class="inputBx">
							<p id="ConpaAlert"></p>
							<input type="password" name="conPassword" id="signConPass"  onkeyup="conPass()" required="true" >
							<span>Confirm Pssword</span>
							<i class="fas fa-eye" id="eyeIcon"></i>
						</div>
						
					</div>

						<input type="submit" name="submit" value="Sign-Up"  id="SignUpBtn">

						<div class="btnBx">
								<p>Alredy Have An Account?</p>
								<a href="login.php"><input type="button" name="" value="Login"></a>
						</div>


				</form>



			</section>









		<script type="text/javascript">
			<?php include 'js/signUp.js';?>
		</script>
	</body>
</html>