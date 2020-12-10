<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
include "session.php";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
//$cpass="hello";
if($pass==$cpass)
{
$pass=sha1($pass);
$pass=crypt($user,$pass);
$cmd="Select * from reg where UserId='$user'";
$res=mysqli_query($con,$cmd);
if(mysqli_num_rows($res)>0)
{
echo "User Exist, Please choose another user id";
}
else
{
$cmd="Insert into reg (Name,UserId,Pass) values('$name','$user','$pass')";
if(mysqli_query($con,$cmd))
{
echo 'Registration successful. <a href="login.php">Click here</a> to go to Log In';
}
else
{
echo "error $cmd";
}
}
}
else
{
echo "Password mismatch";
}
}
?>
<body>
<form action="registration.php" method="post">
<table border="1" style="border-collapse:collapse">
<tr><th colspan="3"> Please Register below</th></tr>
<tr><td>Name</td><td><input type="text" name="name"  /></td><td></td></tr>
<tr><td>User Id</td><td><input type="text" name="user"  /></td><td></td></tr>
<tr><td>Password</td><td><input type="password" name="pass"  /></td><td></td></tr>
<tr><td> Confirm Password</td><td><input type="password" name="cpass"  /></td><td></td></tr>
<tr><td colspan="2" align="center"> <input type="reset" value="Cancel"  /></td><td><input type="submit" name="submit" value="Submit"  /></td></tr>
</table>
</form>
</body>
</html>
