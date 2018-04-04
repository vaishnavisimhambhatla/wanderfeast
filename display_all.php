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
<style>
body{
margin: 0px;
background-color:black;
background-image:url("c.jpg");
}
.header
	{
		background-color: black;
    	text-align: center;
   		padding:10px 0px 0px 0px;
		font-size: 2.5em;
		color: white;

	}
ul.nav{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li a {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
a:visited
{
	text-decoraion:none;
	color:white;
}
li:hover a:hover {
    background-color: #262626;
	text-decoration:none;
	color:white;
}
.bl
{
	background-color:black;
	
}
li
{
	color:white;
	font-size:1.2em;
	list-style-type: none;
}
h2
{
	color:white;
}
p
{
	color:white;
	background-color:black;
	height:100px;
	wdith:100%;
	
	font-size:1.2em;
}
</style>
<body>
<div class="header">
	Wander Feast
</div>
<ul class="nav">
  <li><a class="active" href="display_all.php">Feed</a></li>
  <li><a href="display_email.php">Timeline</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="guide.html">Guide</a></li>
  <li style="float:right"> <a href="firspage.html"> Sign out </a></li>
</ul>
<br>
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
			 <?php echo "<h2>Place : ".$place."</h2>" ?>
			<div class="col-lg-6">
				<img src="images/<?php echo $image;?>" style="max-width:100%;"/>
			</div>
			<div class="col-lg-6">
				<ul class="bl">
					
					<li><?php echo "City&nbsp&nbsp&nbsp:&nbsp".$city?></li>
					<li><?php echo "State  : ".$state?></li>
					<li><?php echo "Rating : ".$rating."/5"?></li>
				</ul>
			</div>
			<div class="col-lg-12">
					<p ><?php echo "Description :<br>".$description;?></p>
			</div>
		</div>
	</div>
<?php
}
?>
</body>
</html>