<?php
    include 'db_conn.php';
    $conn = OpenCon();
	
	$fname=$_POST['fname']; 
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['pass1'];
 
 $sql = "INSERT INTO treg(fname, lname, email, pass) VALUES ('$fname','$lname','$email','$pass')";
    $result = $conn->query($sql);
    if($result){
       echo "Success!";
    } else {
        echo "Failure!";
    }
    $conn->close();
?>
<script>
      window.location.href = 'display_all.php';
    </script>