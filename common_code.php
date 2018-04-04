<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<?php
session_start();
include 'db_conn.php'; 
$connection = OpenCon();
//$email = $_SESSION['email'];
//$city = $_POST['city'];
//$results = mysqli_query($connection,"select * from places where email = '{$email}' ");
//$results = mysqli_query($connection,"select * from places where city = '{$city}' ");
$results = mysqli_query($connection,"select * from places");
while($rows = mysqli_fetch_assoc($results)){
	$image = $rows['image'];
	$place = $rows['place'];
	$city = $rows['city'];
	$state = $rows['state'];
	$description = $rows['description'];
	$rating = $rows['rating'];
	?>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="images/<?php echo $image;?>" style="max-width:100%;"/>
			</div>
			<div class="col-lg-6">
				<ul>
					<li><?php echo $place?></li>
					<li><?php echo $city?></li>
					<li><?php echo $state?></li>
					<li><?php echo $rating?></li>
				</ul>
				<p><?php echo $description;?></p>
			</div>
		</div>
	</div>
<?php
}
?>
</body>
</html>