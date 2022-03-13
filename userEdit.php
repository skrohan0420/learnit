<?php 
session_start();
include 'dataBase.php';


if (!isset($_SESSION['id'])) {
	header('location:home.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn-It Home</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/userEdit.css';?></style>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>




	<main>


		<!-- Mobile NavBar -->
		<div class="mobNav">
			<ul>
				<li><a href="#course">LEARN-IT</a></li>
				<li><i class="fas fa-bars"  id="nav"></i></li>
				<li>
					<a href="userViewProfile.php"></a>
					<div class="imgBx">
						<a href="userViewProfile.php"><i class="far fa-user"></i></a>
					</div>
				</li>
			</ul>
			<ul id="navList">
				<a href="#contact" onclick="hide()"><li>Contact Me</li></a>
				<a href="#" onclick="hide()"><li>Edit Profile</li></a>
				<a href="logOut.php" onclick="hide()"><li>Log Out</li></a>
			</ul>
		</div>


		<!-- Nav Bar -->
		<nav>
			<ul>
				<a href="#course"><li>LEARN-IT</li></a>
			</ul>

			<ul>
				<a href="#contact">
					<li>
						<div class="navBorder up"></div>
						Contact Me 
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="">
					<li>
						<div class="navBorder up"></div>
						Edit Profile
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="logOut.php">
					<li>
						<div class="navBorder up"></div>
						 Logout 
						<div class="navBorder btm"></div>
					</li>
				</a>
			</ul>


			<ul>
				<a href="userViewProfile.php">
					<li class="userImgBx">
						<?php 
							if ($_SESSION['image'] !== 'not set') {
								echo '<img src="' .$_SESSION['image']. '">'; 
							}
							else{
								
								echo '';
							}	
						?> 
						<i class="far fa-user"></i>
					</li>
				</a>
				<a href="userViewProfile.php"><li class="navLogin-btn"><?php echo $_SESSION['fullName'];   ?></li></a>
			</ul>
		</nav>


		

	










		<section class="edit" id="edit">
			
			<h1>Edit Your Profile</h1>



		<form action="userEditAction.php" method="post" enctype="multipart/form-data">

			<div class="conBx1">	
				<div id="imgBx">
					<div class="imgBx">
						<?php 

						if (!isset($_SESSION['image'])) {
							echo '';
						}
						else{
							echo  '<img src="' .$_SESSION['image']. '" >';
						}


						 ?>
					</div>
					<h4>Update Image</h4>
					<input type="file" name="img" class="inp" required>
				</div>

				<div class="btnBx">
					
					<a href="delete.php?del=<?php echo $_SESSION['id'] ?>">
						<button class="btn-delete">
							Delete Your Profile <i class="fas fa-trash"></i>
						</button>
					</a>


				</div>
			</div>




			<div class="conBx">
				<div class="txtBx">
					
					<h4> Name : </h4>

					<input type="text" name="name" class="inp" value="<?php echo $_SESSION['fullName'] ?>"required maxlength="20" minlength="2">

				</div>

				<div class="txtBx">
						
					<h4> Phone Number : </h4>

					<input type="number" name="phone" class="inp" value="<?php echo $_SESSION['phone'] ?>"required>

				</div>

				<div class="txtBx">
						
					<h4> E-mail id :</h4>

					<input type="email" name="email" class="inp" value="<?php echo $_SESSION['email'] ?>"required>

				</div>

				<div class="txtBx">
						
					<h4> Password : </h4>

					<input type="text" name="password" class="inp" value="<?php echo $_SESSION['password'] ?>"required maxlength="20" minlength="6">

				</div>

				<div class="txtBx">
						
					<h4> Gender :</h4>

					<select class="inp" name="gender">
						<option></option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="others">Others</option>
					</select>
					

				</div>

				<div class="txtBx">
						
					<h4> Date Of Birth :</h4>

					<input type="date" name="dob" class="inp" >
				</div>

			</div>

			<div class="submit">
					
				<input type="submit" name="" value="Save Changes">

			</div>
		</form>

		</section>



		






















		


    	<!-- CopyRight -->
    	<div class="copyright">
        	<p>Copyright © 2021 Sk Rohan Ali. All Right Reserved</p>
    	</div>
	</main>

	<script type="text/javascript">
		<?php 
			 include 'js/userEdit.js';
		?>
	</script>
</body>
</html>