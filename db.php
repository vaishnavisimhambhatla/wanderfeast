 <?php //initialising the connection.
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'project');
 define('DB_USER','root');
 define('DB_PASSWORD','vaishusim8'); 
 //creating the connection.
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) 
or
 die("Failed to connect to MySQL: " . mysql_error()); 
 //creating the database.
$db=mysql_select_db(DB_NAME,$con) 
or 
die("Failed to connect to MySQL: " . mysql_error());
?>