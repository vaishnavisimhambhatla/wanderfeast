<?php

session_start();
include 'db_conn.php'; 
$connection = OpenCon();
if(!$connection){
	echo "Not connected";
}else{
	echo "Connected!";
}
if($_SESSION["email"] != NULL){
	if($_POST['submit']){
		$email = $_SESSION["email"];
		$oldFile = explode(".",$_FILES["image"]["name"]);
		$newName = hash("crc32",$_FILES["image"]["name"].time());
		move_uploaded_file($_FILES["image"]["tmp_name"], "images/" .$newName.".".end($oldFile));
		$imageNew = $newName.".".end($oldFile);
		$place = $_POST['place'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$description = $_POST['review'];
		$rating = $_POST['rating'];
		$query = mysqli_query($connection,"insert into places(email, image, place, city, state, updatedAt, description, rating) values('{$email}', '{$imageNew}', '{$place}', '{$city}', '{$state}', NOW(), '$description', $rating ) ");
		if(!$query){
			echo mysqli_error($connection); 
		}else{
			echo"<script> top.window.location='display_email.php';</script>"; 
		}
	}else{
		echo "Submit button not clicked!";
	}
}else{
	echo "You are not logged in!";
}
?>