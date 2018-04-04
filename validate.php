<?php  session_start();
include 'db_conn.php'; 
$connection = OpenCon();
 $user=$_POST['email'];
$password=$_POST['pass'];
 //starting the session for user profile page 
if(empty($_POST['email'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{
 echo"enter email id";
}
else{
//validating the username and password by getting them from database.
 $query = mysqli_query($connection,"SELECT * FROM treg where email = '$user'
 AND 
 pass = '$password'");
 $row = mysqli_fetch_assoc($query);
 
  if(($row['email']!=$user) || ($row['pass']!=$password))
  {
  echo"<center style='margin-top:20%;'><h2>SORRY... YOU ENTERED WRONG ID OR PASSWORD... PLEASE RETRY...</h2></center>";
   
   }
   else 
	{
		$_SESSION["email"] = $user;
	
      echo"<script> top.window.location='display_all.php';</script>"; 

      
	}

}