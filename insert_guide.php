<?php


include 'db_conn.php'; 
$connection = OpenCon();
if(!$connection){
	echo "Not connected";
}else{
	echo "Connected!";
}
//if($_SESSION["email"] != NULL)
//{
	if($_POST['submit']){
		//$email = $_SESSION["email"];
		$oldFile = explode(".",$_FILES["image"]["name"]);
		$newName = hash("crc32",$_FILES["image"]["name"].time());
		move_uploaded_file($_FILES["image"]["tmp_name"], "imagesguide/" .$newName.".".end($oldFile));
		$imageNew = $newName.".".end($oldFile);
		
		$name = $_POST['name'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		
		$pno = $_POST['pno'];
		$ano = $_POST['ano'];
		$about = $_POST['about'];
		
		$query = mysqli_query($connection,"insert into guide( image, name, city, state, pno, ano, about) values( '{$imageNew}', '{$name}', '{$city}', '{$state}', '{$pno}','{$ano}' ,'$about' ) ");
		if(!$query){
			echo mysqli_error($connection); 
		}else{
			echo"<script> top.window.location='guide.html';</script>"; 
		}
	}else{
		echo "Submit button not clicked!";
	}
	
//else{
	//echo "You are not logged in!";
//}
?>