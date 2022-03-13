

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn-It Home</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/adminUserProfileView.css';?></style>
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
						<i class="far fa-user"></i>
					</li>
				</a>
				<a href="userViewProfile.php"><li class="navLogin-btn">Admin</li></a>
			</ul>
		</nav>


		

	





		<section class="edit">




			<form method="post" action="adminUserProfileViewAction.php" enctype="multipart/form-data"> 
				<?php 
					include 'dataBase.php';

					$uid = $_REQUEST['id'];

					$sql = mysqli_query($learnitdb,"SELECT * FROM userdata WHERE id ='$uid'");

					$sql_fetch = mysqli_fetch_assoc($sql);

				?>

				<div class="conBx" style="display:none;">
					<h2>User id</h2>
					<input type="text" name="id" placeholder="User id" value="<?php echo $sql_fetch['id'] ?>">

				</div>

				<div class="conBx">
					<h2>User Name</h2>
					<input type="text" name="name" placeholder="User Name" value="<?php echo $sql_fetch['fullName'] ?>" required>

				</div>

				<div class="conBx">
					<h2>User Ph. No.</h2>
					<input type="number" name="phone" placeholder="User Ph. No." value="<?php echo $sql_fetch['phone'] ?>" required>

				</div>

				<div class="conBx">
					<h2>User E-mail id</h2>
					<input type="email" name="email" placeholder="User E-mail" value="<?php echo $sql_fetch['email'] ?>" required>

				</div>
				<div class="conBx">
					<h2>User Password</h2>
					<input type="text" name="pass" placeholder="User Password" value="<?php echo $sql_fetch['password'] ?>" required>
				</div>
				<div class="conBx">
					<h2>User Gender</h2>
					<input type="text" name="gender" placeholder="User Gender" value="<?php echo $sql_fetch['gender'] ?>" required>

				</div>
				<div class="conBx">
					<h2>Users Date-Of-Birth</h2>
					<input type="text" name="dob" placeholder="User E-mail" value="<?php echo $sql_fetch['dob'] ?>" required>

				</div>
				<div class="conBx">
					<h2>Account Created on</h2>
					<h3>
						<?php echo $sql_fetch['activity'] ?>
					</h3>

				</div>
				<div class="conBx">
					
					<input type="submit" name="" value="Save" >

				</div>
			</form>

			<a href="adminUserDelete.php?id=<?php echo $sql_fetch['id'] ?>"><button>Delete User</button></a>

		</section>




		



		






















		


    	<!-- CopyRight -->
    	<div class="copyright">
        	<p>Copyright © 2021 Sk Rohan Ali. All Right Reserved</p>
    	</div>
	</main>

	<script type="text/javascript">
		<?php 
			 include 'js/adminUserProfileView.js';
		?>
	</script>
</body>
</html>