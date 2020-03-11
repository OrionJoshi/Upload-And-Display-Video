<?php 

	include('db.php');

	$sql = "SELECT * FROM videos";
	$res = mysqli_query($con,$sql);

	echo "<h1> MY VIDEOS</h1>";
	while ($row = mysqli_fetch_assoc($res)) {
			
			$id = $row['id'];
			$name= $row['name'];

		echo "<h2><a href='watch.php?id=$id'>".$name. "</a></h2></br>";
	}




 ?>