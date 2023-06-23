<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<style>
		body {
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		video {
			width: 640px;
			height: 360px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<a href="record.php">UPLOAD</a>

	<div class="alb">
		<?php 
		 include "db.php";
		 $sql = "SELECT * FROM records ORDER BY id DESC";
		 $res = mysqli_query($con, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($record = mysqli_fetch_assoc($res)) { 
		 ?>
		 		
	        <audio src="uploads/<?=$record['record_url']?>" 
	        	   controls>
	        	
	        </audio>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>
</body>
</html>