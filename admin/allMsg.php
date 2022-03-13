<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		<?php 

				include 'style/allMsg.css';

		 ?>
	</style>
</head>
<body>


	<section class="msg">
		
		<h2>Messages</h2>

			<?php 

			include 'dataBase.php';

				$msgsql = mysqli_query($learnitdb, "SELECT * FROM usermsg ORDER BY id DESC");
			
			while($sql_fetch_msg = mysqli_fetch_assoc($msgsql)){
					

			?>
			<h1><?php echo 'Form: '. $sql_fetch_msg['email'] ?></h1>
			<h6><?php echo $sql_fetch_msg['time'] ?></h6>
			<h3><?php echo $sql_fetch_msg['name']." 'says" ?></h3>
			<h4><?php echo $sql_fetch_msg['msg'] ?></h4>
			<hr>

			<?php
				

				}
			?>
		
	</section>

		<div class="copyright">
        	<p>Copyright © 2021 Sk Rohan Ali. All Right Reserved</p>
    	</div>	
</body>
</html>