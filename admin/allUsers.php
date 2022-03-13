<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		<?php 
		include 'style/allUsers.css'
		 ?>
	</style>
</head>
<body>
	<section class="users" id="users">
				

			<h6 class="totalUser">
  				
  				<?php 
  					include 'dataBase.php';

					$sql = mysqli_query($learnitdb, "SELECT * FROM  coursedata");

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


			


		</section>

</body>
</html>