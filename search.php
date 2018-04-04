<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
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
</style>
</head>
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
<div class="login-form">
    <form action="display_place.php" method="post">
        <h2 class="text-center">Search the city</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="City" required="required">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block">Search
        </div>
              
    </form>
	</body>
	</html>