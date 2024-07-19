<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>
            <div id="header">
            <div id="left">
            <label>Complaint cell</label>
        </div>
    <div id="right">
        <div id="content">
            hi' demo&nbsp;<a href="login.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>


<body>
<center>
<div id="login-form">
<form action="register.php" method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="name" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('registration', $con) or die (mysql_error());

if(isset($_POST['signup']))
    {
	$name=$_POST['name'];
	$email=$_POST['email'];	
	$pass=$_POST['pass'];


	if($name==''){
		echo "<script>alert('Please Enter your name')</script>";
		exit();
	}
	if($email==''){
		echo "<script>alert('Please Enter your Email')</script>";
		exit();
	}
	if($pass==''){
		echo "<script>alert('Please Enter a Password')</script>";
		exit();
	}
	else{
		$que="insert into signup(name, email, pass) values ('$name', '$email', '$pass')";
		if(mysql_query($que))
			echo "<script>alert('Registeration successful')</script>";
			echo "<script>window.open('complaint.php','_self')</script>";
	}
}



?>