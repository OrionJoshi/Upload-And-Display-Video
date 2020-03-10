<!DOCTYPE html>
<html>
<head>
	<title>Video upload</title>
</head>
<body>

	<h1><a href="video.php">Videos</a></h1>

	<form method="post" action="index.php" enctype="multipart/form-data" >

		<input type="file" name="file">
		<input type="submit" name="upload" value="upload">

		

	</form>

</body>
</html>
<?php

	include('db.php');

	if(isset($_POST['upload'])){


		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];

		move_uploaded_file($tmp, "videos/".$name);

		$sql = "INSERT INTO videos(name) VALUES ('$name')";

		$res = mysqli_query($con,$sql);

		if($res==1){

			echo "<h1>Video inserted sucessfully</h1>";
		}
	}





?>