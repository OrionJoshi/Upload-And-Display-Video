<?php
		
	include('db.php');	
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "SELECT * FROM videos WHERE id = '$id'";
		$res = mysqli_query($con,$sql);

		$row = mysqli_fetch_assoc($res);

		$name = $row['name'];

		echo "<h1>You are watching:".$name."</h1>";

?>

<video width="615" height="315" controls>
	
	<source src="videos/<?php echo $name;?>" type="video/mp4">

</video>


<?php
	
	}

?>