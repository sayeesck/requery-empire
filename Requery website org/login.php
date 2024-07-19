
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

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


<center>
<div id="login-form">
<form action="login.php" method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php">Sign Up Here</a></td>
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

if (isset($_POST['login'])){

	$email=$_POST['email'];
	$pass=$_POST['pass'];

	if($email=="") {
		echo "<script>window.open('login.php?user=Please Enter your email')</script>";
	}

	if($pass=="") {
		echo "<script>window.open('login.php?user=Please Enter your password')</script>";
	}
	else {
	$query="select * from signup where email='$email' AND pass='$pass'";
	$run=mysql_query($query) or die (mysql_error());
	if (mysql_num_rows($run)>0){
		echo "<script>window.open('complaint.php','_self')</script>";
	}

}
}

?>
