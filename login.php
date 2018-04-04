<?php
include 'db_conn.php';
$conn = OpenCon();
if(empty($_SERVER['CONTENT_TYPE'])){
  $_SERVER['CONTENT_TYPE'] = "application/json";
}


$email = $_POST['email'];
$pwd = $_POST['pass'];
$table = $_POST['treg'];

$result = mysqli_query($conn,"SELECT name FROM $table WHERE `email`=$email AND `password`= $pwd");
$results = array();

if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

while($row=mysqli_fetch_array($result)){
  array_push($results,$row);
}
echo(json_encode($results));
$conn->close();
?>


