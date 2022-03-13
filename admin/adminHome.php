<?php 
// session_start();
// include 'dataBase.php';


// if (isset($_SESSION['id'])) {
// 	header('location:userHome.php');

// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn-It Admin</title>
	<link rel="icon" href="img/LEARN-IT.png">
	<style type="text/css"><?php include 'style/adminHome.css';?></style>
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
					<a href="login.php">Login</a>
					<div class="imgBx">
						<a href="login.php"><i class="far fa-user"></i></a>
					</div>
				</li>
			</ul>
			<ul id="navList">
				<a href="#about" onclick="hide()"><li>About</li></a>
				<a href="#course" onclick="hide()"><li>Course</li></a>
				<a href="#contact" onclick="hide()"><li>Contact</li></a>
			</ul>
		</div>


		<!-- Nav Bar -->
		<nav>
			<ul>
				<a href="#course"><li>LEARN-IT</li></a>
			</ul>

			<ul>
				<a href="#users">
					<li>
						<div class="navBorder up"></div>
						All Users 
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="#course">
					<li>
						<div class="navBorder up"></div>
						Courses 
						<div class="navBorder btm"></div>
					</li>
				</a>
				<a href="#contact">
					<li>
						<div class="navBorder up"></div>
						Contact Me 
						<div class="navBorder btm"></div>
					</li>
				</a>
			</ul>


			<ul>
				<a href=""><li class="userImgBx"><i class="far fa-user"></i></li></a>
				<a href=""><li class="navLogin-btn">Admin</li></a>
			</ul>
		</nav>




















		<!-- New Courses -->
		<section class="course" id="course">
			
			

			<h2>Creat a New Topic</h2>
				
			<div class="mainCon">
				

					<form autocomplete="off" action="newCourseAction.php" method="post" enctype='multipart/form-data'>
						
						<div class="con1">
							
							<input type="text" name="name" placeholder="Course Name" required>
							<input type="text" name="details" placeholder="Course Description" required>

						</div >
						<div class="con2">
							<h3>Add a Course Image</h3>
							<input type="file" name="img" required>

							<input type="submit" name="" value="Create" >

						</div>

					</form>

				
			</div>













			<!-- all topics -->

			<h2>Topics</h2>
			<div class="topics">
				
				<?php 

				include 'dataBase.php';

				$sql = mysqli_query($learnitdb, "SELECT * FROM  coursedata");


				?>




				<?php 
				while ($sql_fetch = mysqli_fetch_assoc($sql)){
				?>


				<div class="topicBx">
					
					<img src="<?php echo $sql_fetch['img'];?>">

					<h1>
						<?php echo $sql_fetch['course']; ?>
					</h1>

					<p>
						<?php echo $sql_fetch['details']; ?>			
					</p>

					<a href="editCourse.php?ep=<?php echo $sql_fetch['id'] ?>">
						<button>
						 	View And Edit
						</button>
					</a>
				</div>

				<?php 
					}
				?>
				

			</div>




		</section>


		

















		<!-- All Users -->
		<section class="users" id="users">
				
			<h2>All Users</h2>

				

			<h6 class="totalUser">
  				
  				<?php 
  					$sql_fetch = mysqli_num_rows($sql);

  					echo 'Total Number Of Users : '.$sql_fetch;
  				

  				 ?>


  			</h6>
			<div class="table-container">

				    <table class="unfixed-table">
				      <thead>
				        <tr>
				        	<th>Name</th>
				        	<th>Image</th>
				        	<th>SL No.</th>
				        	<th>Uniuqe Id</th>
				        	<th>E-mail</th>
				        	<th>Phone No.</th>
				        	<th>Gender</th>
				        	<th>Date of Birth</th>
				        	<th>Password</th>
				        	<th>Account Created on</th>
				        	<th>Actions</th>
				        </tr>
				      </thead>

				      <tbody>
				      	<?php 

							include 'dataBase.php';

							$sql = mysqli_query($learnitdb, "SELECT * FROM userdata");

							$sl = 0;
							while ($sql_fetch = mysqli_fetch_assoc($sql)){
						?> 
				        
				        <tr>
				        	<td><?php echo $sql_fetch['fullName']; ?></td>
				        	<td>
				        		<?php 
					        		if ($sql_fetch['image'] == 'not set'){
					        			echo 'not set';	
					        		}
					        		else{
					        			echo "<img src='" .'../'. $sql_fetch['image'] . "'>";
					        		}
				        		?>	
				        	</td>
				        	<td><?php echo $sl+1; $sl++; ?></td>
				        	<td><?php echo $sql_fetch['id']; ?></td>
				        	<td id="email"><?php echo $sql_fetch['email']; ?></td>
				        	<td><?php echo $sql_fetch['phone']; ?></td>
				        	<td><?php echo $sql_fetch['gender']; ?></td>
				        	<td><?php echo $sql_fetch['dob']; ?></td>
				        	<td id="pass"><?php echo $sql_fetch['password']; ?></td>
				        	<td><?php echo $sql_fetch['activity']; ?></td>
				        	<td>
				        		<a href="adminUserProfileView.php?id=<?php echo $sql_fetch['id'] ?>">Edit & Delete</a>
				        	</td>

				        </tr>
				        <?php 
				        	}
				        ?>		        
				      </tbody>
				      
				      <!-- <tfoot>
				        <tr>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        	<td>Footer</td>
				        </tr>
				      </tfoot> -->

				    </table>



  			</div>

  			<a href="allUsers.php"> <button>View all</button></a>

			


		</section>
























		<!-- User Msgs -->
		<section class="msg" id="msg">
			<h2>Messages</h2>

			<?php 

				$msgsql = mysqli_query($learnitdb, "SELECT * FROM usermsg ORDER BY id DESC");
			
				$x = 0;
				while($sql_fetch_msg = mysqli_fetch_assoc($msgsql)){
					$x++;

			?>
			<h1><?php echo 'Form: '. $sql_fetch_msg['email'] ?></h1>
			<h3><?php echo $sql_fetch_msg['name']." 'says" ?></h3>
			<h4><?php echo $sql_fetch_msg['msg'] ?></h4>
			<hr>

			<?php
				if ($x == 3) {
					break;
				}

				}
			?>


			<a href="allMsg.php"><button>View All</button></a>
		</section>

		


    	<!-- CopyRight -->
    	<div class="copyright">
        	<p>Copyright © 2021 Sk Rohan Ali. All Right Reserved</p>
    	</div>
	</main>

	

	
	<script type="text/javascript">
		<?php 
			 include 'js/adminHome.js';
		?>
	</script>
</body>
</html>